<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Transaction;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function ticket($order_id = null)
    {
        // Mencari transaksi berdasarkan ID, jika kosong ambil transaksi sukses terakhir
        if ($order_id) {
            $transaction = Transaction::with('event')->where('order_id', $order_id)->firstOrFail();
        } else {
            $transaction = Transaction::with('event')->where('status', 'success')->latest()->firstOrFail();
        }
        
        $categories = Category::all();
        return view('checkout.ticket', compact('transaction', 'categories'));
    }

    // Fungsi success yang otomatis mengarahkan ke halaman tiket
    public function success($order_id)
    {
        $transaction = Transaction::with('event')->where('order_id', $order_id)->firstOrFail();
        
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$curlOptions = [
            CURLOPT_HTTPHEADER => [],
            CURLOPT_SSL_VERIFYPEER => false,
        ];

        try {
            $midtransStatus = \Midtrans\Transaction::status($order_id);
            $statusAsli = is_array($midtransStatus) ? $midtransStatus['transaction_status'] : $midtransStatus->transaction_status;
            
            if (in_array($statusAsli, ['capture', 'settlement'])) {
                $transaction->update(['status' => 'success']);
            }
        } catch (\Exception $e) {}
        
        return redirect()->route('checkout.ticket', $transaction->order_id);
    }

    public function create($id)
    {
        $event = Event::findOrFail($id);
        return view('checkout.create', compact('event'));
    }

    public function store(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:50',
        ]);

        if ($event->stock <= 0) {
            return redirect()->back()->with('error', 'Maaf, tiket event ini sudah habis.');
        }

        // Hitung total harga: harga tiket + biaya layanan Rp 5.000
        $total_price = $event->price + 5000;

        // Generate unik order_id
        $order_id = 'TRX-' . strtoupper(Str::random(8)) . '-' . time();

        // Konfigurasi Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
        \Midtrans\Config::$curlOptions = [
            CURLOPT_HTTPHEADER => [],
            CURLOPT_SSL_VERIFYPEER => false,
        ];

        // Siapkan parameter transaksi
        $params = [
            'transaction_details' => [
                'order_id' => $order_id,
                'gross_amount' => $total_price,
            ],
            'customer_details' => [
                'first_name' => $request->customer_name,
                'email' => $request->customer_email,
                'phone' => $request->customer_phone,
            ],
            'item_details' => [
                [
                    'id' => $event->id,
                    'price' => $event->price,
                    'quantity' => 1,
                    'name' => substr($event->title, 0, 50),
                ],
                [
                    'id' => 'service-fee',
                    'price' => 5000,
                    'quantity' => 1,
                    'name' => 'Biaya Layanan',
                ]
            ]
        ];

        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);

            // Simpan data transaksi ke database
            $transaction = Transaction::create([
                'event_id' => $event->id,
                'order_id' => $order_id,
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'total_price' => $total_price,
                'status' => 'Pending',
                'snap_token' => $snapToken,
            ]);

            // Mengurangi stok event
            $event->decrement('stock');

            return redirect()->route('checkout.payment', $transaction->order_id);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memproses pembayaran ke Midtrans: ' . $e->getMessage());
        }
    }

    public function payment($order_id)
    {
        $transaction = Transaction::with('event')->where('order_id', $order_id)->firstOrFail();
        return view('checkout.payment', compact('transaction'));
    }
}