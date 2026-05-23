<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Partner;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        $partners = Partner::latest()->get();

        return view('welcome', compact('categories', 'partners'));
    }
}