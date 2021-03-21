<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Directory;
use App\Post;
use App\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    private $directory;
    public function __construct(Directory $directory)
    {
        $this->directory = $directory;
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }

    
    public function viewdirectory()
    {
        $direc = DB::table('directories')->get();
        return view('admin.directory.Directory',compact('direc'));
    }

    public function viewadddirectory()
    {

        return view('admin.directory.addDirec');
    }
    public function adddirectory(Request $request)
    {
        //
        $new = new Directory;
        $new->name_directory = $request->tendm;
        $new->category = $request->loaidm;
        $new->save();

        return  redirect()->action('AdminController@viewadddirectory')->with('message','Thêm Thành Công');

    }

    public function vieweditdirectory($id) {
        $dr = Directory::find($id);
        return view('admin.directory.editdirectory',compact('dr'));
    }
    public function viewPost()
    {
        $post = Post::with('image')->get();
        return view('admin.home',compact('post'));
    }

    

    public function duyetbai($id)
    {
        $dr = Post::find($id);
        if($dr->public == 'private')
        {
            $dr->public ='public';
            $dr->save();
        }
       
        return  redirect()->action('AdminController@viewPost');
    }
    public function deletepost($id){
        $del = Post::find($id);
        $del->delete();

        return  redirect()->action('AdminController@viewPost');
    }
    public function deldirectory($id){
        $del = Directory::find($id);
        $del->delete();

        return  redirect()->action('AdminController@viewdirectory')->with('message','Xóa Thành Công');;
    }

    public function updatedirectory(Request $request, $id)
    {
        // $update = Directory::find($id);
        // $update->name_directory = $request->tendm;
        // $update->category = $request->loaidm;
   
        // $update->save();
        $update = $this->directory->find($id)->update([
            'name_directory' => $request->tendm,
            'category' =>  $request->loaidm
        ]);
        

           return redirect()->action('AdminController@viewdirectory')->with('message','Sửa Thành Công');
       
       
    }
    public function listuser()
    {
        $u = DB::table('users')->get();
        return view('admin.user.list',compact('u'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
