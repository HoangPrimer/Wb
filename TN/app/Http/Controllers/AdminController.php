<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Directory;
use App\Post;
use App\Image;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
