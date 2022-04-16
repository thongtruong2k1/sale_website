<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\DanhMucSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function index()
    {
        $menuCha = DanhMucSanPham::where('id_danh_muc_cha', 0)
                                 ->where('is_open', 1)
                                 ->get();
        $menuCon = DanhMucSanPham::where('id_danh_muc_cha', '<>', 0)
                                 ->where('is_open', 1)
                                 ->get();

        $config  = Config::latest()->first();

        $sql = "SELECT *, (`gia_ban` - `gia_khuyen_mai`) / `gia_ban` * 100 AS `TYLE` FROM `san_phams` ORDER BY TYLE DESC";
        $allSanPham = DB::select($sql);


        return view('home_page.pages.home_page', compact('menuCha', 'menuCon', 'config', 'allSanPham'));
    }
}
