
@extends('welcome')

@section('content')
<form action="{{ route('product')}}" method="post">
        @csrf
        <label for="tensanphamc">Tên sản phẩm</label><br>
        <input type="text" name="tensp"><br><br>
        <select name="tendm">
                      @foreach($a as $al)

                        <option value="{{$al->id}}">{{$al->name_directory}}  
                     @endforeach
        </select>  <br><br>
        <label for="tendanhmuc">Mô tả</label><br>
        <textarea name="content"></textarea><br><br>
        <label for="Image">Ảnh</label><br>
        <input type="text" name="image"><br><br>
        
        <button type="submit">thêm</button>
</form>
 @endsection