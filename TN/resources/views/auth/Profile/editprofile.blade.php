
@extends('layouts.layoutwb')

@section('content')
<div class="profile">
            @foreach($pro as $pro)
            @endforeach
           
         <div class="heder">
             <h1> Thông    Tin     Cá     Nhân</h1>
         </div>
         <form action="{{ route('updateprofile', ['id'=> $pro->id])}}" method="post" enctype="multipart/form-data">
             @csrf
         <div class="edit">
                <label for="Avatar">Avatar : </label>
                <div class="abc">
                        <input type="file" name="avatar" >
                        @error('avatar')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                </div>
         </div>
         <div class="edit">
                <label for="Name">Name : </label>
                <div class="abc">
                        <input type="text" name="name" value=" {{$pro->name}}">
                        @error('name')
                                    <span >
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                </div>
         </div>

         <div class="edit">
                <label for="Name">Địa chỉ : </label>
                <div class="abc">
                         <input type="text" name="address" value=" {{$pro->address}}">
                         @error('address')
                                    <span >
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                </div>
         </div>

         <div class="edit">
                <label for="Name">SĐT : </label>
                <div class="abc">
                        <input type="text" name="phone" value=" {{$pro->phone}}">
                        @error('phone')
                                    <span >
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                </div>
         </div>

        <div class="edit">
                <label for="Name">Giới tính  : </label>
                <div class="abc">
                         <input type="text" name="gender" value=" {{$pro->gender}}">
                         @error('gender')
                                    <span >
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                </div>
         </div>

         <div class="edit">
                <label for="Name">Ngày sinh : </label>
                <div class="abc">
                         <input type="text" name="date_of_birth" value=" {{$pro->date_of_birth}}">
                          @error('date_of_birth')
                                    <span >
                                        <strong>{{ $message }}</strong>
                                    </span>
                           @enderror
                </div>
         </div>

         <div class="img">
                    <button  type="submit">Lưu</button>
         </div>
         </form>
</div>
   
@endsection