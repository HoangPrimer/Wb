<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;


class PageController extends Controller
{
    
   
    public function getIndex(){
        $dodientu = DB::table('directories')->where('category','Đồ điện tử')->get();
        $nghenhin = DB::table('directories')->where('category','Thiết bị nghe nhìn')->get();
        $dogiadung = DB::table('directories')->where('category','Đồ gia dụng')->get();
        $xeco = DB::table('directories')->where('category','Xe cộ')->get();
        $thoitrang = DB::table('directories')->where('category','Thời trang, Phụ kiện')->get();
        $noithat = DB::table('directories')->where('category','Nội, Ngoại thất')->get();
        $vatnuoi = DB::table('directories')->where('category','Vật nuôi, Cây cảnh')->get();
        $thethao = DB::table('directories')->where('category','Thể thao')->get();
        $sach = DB::table('directories')->where('category','Sách báo, Nghệ thuật')->get();
        $may = DB::table('directories')->where('category','Máy móc chuyên dụng')->get();

         $posts = Post::with('image')->get();
        return view('welcome',compact('dodientu','nghenhin','dogiadung','xeco','thoitrang','noithat','vatnuoi','thethao','sach','may','posts'));
    }
}
