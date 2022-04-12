<?php

namespace App\Http\Controllers;

use App\Models\KhoHang;
use App\Models\SanPham;
use Illuminate\Http\Request;

class KhoHangController extends Controller
{

    public function index()
    {
        return view('new_admin.pages.kho_hang.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function loadData()
    {
        $data = KhoHang::where('type', 0)->get();

        return response()->json(['nhapKho' => $data]);
    }

    public function store($id)
    {
        $sanPham = SanPham::find($id);
        if($sanPham) {
            $khoHang = KhoHang::where('id_san_pham', $id)->where('type', 0)->first();
            if($khoHang) {
                $khoHang->so_luong++;
                $khoHang->save();
            } else {
                KhoHang::create([
                    'id_san_pham'       => $sanPham->id,
                    'ten_san_pham'      => $sanPham->ten_san_pham,
                    'so_luong'          => 1,
                ]);
            }
            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KhoHang  $khoHang
     * @return \Illuminate\Http\Response
     */
    public function show(KhoHang $khoHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KhoHang  $khoHang
     * @return \Illuminate\Http\Response
     */
    public function edit(KhoHang $khoHang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KhoHang  $khoHang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KhoHang $khoHang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KhoHang  $khoHang
     * @return \Illuminate\Http\Response
     */
    public function destroy(KhoHang $khoHang)
    {
        //
    }
}
