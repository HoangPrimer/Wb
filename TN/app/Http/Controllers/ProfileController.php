<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('auth\Profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    
    public function edit($id)
    {
        //
    }

    public function updateprofile(Request $request, $id)
    {
        $update = User::find($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name =$file->getClientOriginalName();
            $file->move("images/avatar", $name);
            $update->image = $file->getClientOriginalName();
        }
        
        $update->email = $request->email;
        $update->name = $request->name;
        $update->address = $request->address;
        $update->phone = $request->phone;
        $update->date_of_birth = $request->date_of_birth;
        $update->gender = $request->gender;
      
        $update->save();
           return redirect()->action('ProfileController@create');
       
       
    }

    //quan ly ca nhan
    public function viewlistpost()
    {
        $a = Post::with('image')->get();
        return view('auth.Post.listpost',compact('a'));
        
    }
    public function createpost()
    {
        $a = DB::table('directories')->get();
        return view('auth.Post.createPost',compact('a'));
        
    }
    public function postpost(Request $request)
    {
          $post = new Post;
         $post->directory_id = $request->tendm;
         $post->user_id  = Auth::id();
         $post->name_post = $request->title;
         $post->content = $request->content;
         $post->price  =$request->price;
         $post->save();

         $post_id = $post ->id;
        
         if($request->hasFile('file')){
             foreach($request->file('file') as $file){
                 $post_image = new Image;
                 if(isset($file)){
                     $post_image->name = $file->getClientOriginalName();
                     $post_image->post_id = $post_id;
                     $file->move("images/anhhang",$file->getClientOriginalName());
                     $post_image->save();
                 }
             }
         }
          
         return  redirect()->route('listpost');
    }

    public function deletepost($id){
        $del = Post::find($id);
        $del->delete();

        return  redirect()->action('ProfileController@viewlistpost');
    }

    public function vieweditpost($id) {
        $p = Post::with('image')->find($id);
        return view('auth.Post.editpost',compact('p'));
    }
    //
    public function destroy($id)
    {
        //
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
