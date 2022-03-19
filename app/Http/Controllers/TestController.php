<?php

namespace App\Http\Controllers;

use App\Models\SanPham;

class TestController extends Controller
{
    public function form()
    {
        $sanPham = SanPham::all();
        return view('form', compact('sanPham'));
    }

    public function ajax()
    {
        return view('ajax');
    }

    public function data()
    {
        $sanPham = SanPham::all();
        return response()->json(['sanPham' => $sanPham]);
    }
}
