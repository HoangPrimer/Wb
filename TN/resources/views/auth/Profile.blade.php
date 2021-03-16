@extends('layouts.layoutwb')

@section('content')
<div class="profile">
   <div class="nav-left">
         <div class="heder">
             <h1> Thông Tin Cá Nhân</h1>
         </div>
         <div class="img">
                 <img src="../images/avatar/{{Auth::user()->image}}">
         </div>
         <div class="info">
             <label for="Email"> Email :</label>
             <span>{{Auth::user()->email}}</span>
         </div>
         <div class="info">
                <label for="Name">Name : </label>
                <span>{{Auth::user()->name}}</span>
         </div>
         <div class="info">
           <label for="Địa Chỉ"> Địa chỉ :</label>
           <span>{{Auth::user()->address}}</span>
         </div>
         <div class="info">
            <label for="SĐT"> SĐT : </label>
            <span>{{Auth::user()->phone}}</span>
         </div>
         <div class="info">
             <label for="Ngày Sinh"> Ngày Sinh :</label>
             <span>{{Auth::user()->date_of_birth}}</span>
         </div>
         <div class="info">
             <label for="Giới Tính"> Giới Tính :</label>
             <span> {{Auth::user()->gender}}</span>
         </div>
         <div class="img">
             <button  type="submit" onclick="form-info">Cập Nhật Thông Tin</button>
         </div>
         <form class="form-info" action="profile/update/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
         @csrf
                <h3>cập nhật thông tin</h3>
                <input type="text" name="name">
                <input type="email" name="email">
                <input type="text" name="address">
                <input type="number" name="phone">
                <input type="text" name="gender" >
         </form>
  </div>
   <div class="nav-right"></div>
</div>
@endsection