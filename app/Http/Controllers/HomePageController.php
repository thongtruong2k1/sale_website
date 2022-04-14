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

        // $allSanPham = SanPham::all();
        // foreach($allSanPham as $key => $value) {
        //     $tyLe = ($value->gia_ban - $value->gia_khuyen_mai) / $value->gia_ban * 100;
        //     $value->ty_le_giam_gia = $tyLe;
        // }

        // for($i = 0; $i < count($allSanPham) - 1; $i++) {
        //     for($j = $i + 1; $j < count($allSanPham); $j++) {
        //         if($allSanPham[$i]->ty_le_giam_gia < $allSanPham[$j]->ty_le_giam_gia) {
        //             $x = $allSanPham[$i];
        //             $allSanPham[$i] = $allSanPham[$j];
        //             $allSanPham[$j] = $x;
        //         }
        //     }
        // }

        return view('home_page.pages.home_page', compact('menuCha', 'menuCon', 'config', 'allSanPham'));
    }
}
