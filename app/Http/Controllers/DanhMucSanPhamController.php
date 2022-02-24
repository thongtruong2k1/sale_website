<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDanhMucSanPhamRequest;
use App\Http\Requests\UpdateDanhMucSanPhamRequest;
use App\Models\DanhMucSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhMucSanPhamController extends Controller
{
    public function index()
    {
        $danh_muc_cha = DanhMucSanPham::where('id_danh_muc_cha', 0)->get();
        $sql = 'SELECT a.*, b.ten_danh_muc as `ten_danh_muc_cha`
                FROM `danh_muc_san_phams` a LEFT JOIN `danh_muc_san_phams` b
                on a.id_danh_muc_cha = b.id';
        $data = DB::select($sql);
        return view('admin.pages.danh_muc_san_pham.index', compact('data', 'danh_muc_cha'));
    }

    public function store(CreateDanhMucSanPhamRequest $request)
    {
        dd($request->all());
        DanhMucSanPham::create([
            'ten_danh_muc'      =>  $request->ten_danh_muc,
            'slug_danh_muc'     =>  $request->slug_danh_muc,
            'hinh_anh'          =>  $request->hinh_anh,
            'id_danh_muc_cha'   =>  empty($request->id_danh_muc_cha) ? 0 : $request->id_danh_muc_cha,
            'is_open'           =>  $request->is_open,
        ]);
        // $data = $request->all();
        // DanhMucSanPham::create($data);
        toastr()->success('Đã thêm mới danh mục thành công!');
        return redirect('/admin/danh-muc-san-pham/index');
    }

    public function doiTrangThai($id)
    {
        $danh_muc = DanhMucSanPham::find($id);
        if($danh_muc) {
            $danh_muc->is_open = !$danh_muc->is_open;
            $danh_muc->save();
            return response()->json([
                'trangThai'         =>  true,
                'tinhTrangDanhMuc'  =>  $danh_muc->is_open,
            ]);
        } else {
            return response()->json([
                'trangThai'         =>  false,
            ]);
        }
    }

    public function destroy($id)
    {
        $danh_muc = DanhMucSanPham::find($id);
        if($danh_muc) {
            $danh_muc->delete();
            return response()->json([
                'status'  =>  true,
            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }

    public function edit($id)
    {
        $danh_muc = DanhMucSanPham::find($id);
        if($danh_muc) {
            return response()->json([
                'status'  =>  true,
                'data'    =>  $danh_muc,
            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }

    public function edit_form($id)
    {
        $danh_muc = DanhMucSanPham::find($id);
        if($danh_muc) {
            $danh_muc_cha = DanhMucSanPham::where('id_danh_muc_cha', 0)->get();
            return view('admin.pages.danh_muc_san_pham.edit', compact('danh_muc','danh_muc_cha'));
        } else {
            toastr()->error("Danh mục không tồn tại!");
            return redirect()->back();
        }
    }

    public function update_form(UpdateDanhMucSanPhamRequest $request)
    {
        $data     = $request->all();
        $danh_muc = DanhMucSanPham::find($request->id);
        $danh_muc->update($data);

        toastr()->success('Đã cập nhật danh mục thành công!');
        return redirect('/admin/danh-muc-san-pham/index');
    }

    public function update(UpdateDanhMucSanPhamRequest $request)
    {
        $data     = $request->all();
        $danh_muc = DanhMucSanPham::find($request->id);
        $danh_muc->update($data);

        return response()->json(['status'=> true]);
    }
}
