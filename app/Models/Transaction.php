<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    // Mengizinkan kolom-kolom ini diisi data
    protected $fillable = [
        'event_id', 'order_id', 'customer_name', 'customer_email', 'customer_phone', 'total_price', 'status', 'snap_token'
    ];

    // Relasi balik ke tabel Event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}