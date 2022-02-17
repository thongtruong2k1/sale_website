<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDanhMucSanPhamRequest;
use App\Models\DanhMucSanPham;
use Illuminate\Http\Request;

class DanhMucSanPhamController extends Controller
{
    public function index()
    {
        return view('admin.pages.danh_muc_san_pham.index');
    }

    public function store(CreateDanhMucSanPhamRequest $request)
    {
        DanhMucSanPham::create([
            'ten_danh_muc'      =>  $request->ten_danh_muc,
            'slug_danh_muc'     =>  $request->slug_danh_muc,
            'hinh_anh'          =>  $request->hinh_anh,
            'id_danh_muc_cha'   =>  $request->id_danh_muc_cha,
            'is_open'           =>  $request->is_open,
        ]);
        // $data = $request->all();
        // DanhMucSanPham::create($data);
        toastr()->success('Đã thêm mới danh mục thành công!');
        return redirect('/admin/danh-muc-san-pham/index');
    }
}
