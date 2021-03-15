@extends('layouts.layoutwb')

@section('content')
<form action="profile/update/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="profile">
        <img src="../images/anhhang/{{Auth::user()->image}}" width="130px" height="130px" style="border-radius:50%">
        <input type="hidden" value="{{Auth::user()->id}}">
        <input type="text" name="name" value="{{Auth::user()->name}}"><br>
        <input type="text" name="email" value="{{Auth::user()->email}}"><br>
        <input type="text" name="address" value="{{Auth::user()->address}}"><br>
        <input type="text" name="phone" value="{{Auth::user()->phone}}"><br>
        <input type="date" name="date_of_birth" >{{Auth::user()->date_of_birth}}
        <input type="text" name="gender" value="{{Auth::user()->gender}}"><br>
        <input type="file" name="image">
        <button type="submit">Cap nhat  thong tin</button>

    </div>
    </form>
@endsection