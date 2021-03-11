<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    //
    public function getIndex(){
        $a = DB::table('directories')->where('category','Đồ điện tử')->get();
        $b = DB::table('directories')->where('category','Thiết bị nghe nhìn')->get();
        $c = DB::table('directories')->where('category','Đồ gia dụng')->get();
        $d = DB::table('directories')->where('category','Xe cộ')->get();
        $f = DB::table('directories')->where('category','Thời trang, Phụ kiện')->get();
        $q = DB::table('directories')->where('category','Nội, Ngoại thất')->get();
        $w = DB::table('directories')->where('category','Vật nuôi, Cây cảnh')->get();
        $e = DB::table('directories')->where('category','Thể thao')->get();
        $r = DB::table('directories')->where('category','Sách báo, Nghệ thuật')->get();
        $t = DB::table('directories')->where('category','Máy móc chuyên dụng')->get();
            return view('welcome',compact('a','b','c','d','f','q','w','e','r','t'));
    }
}
