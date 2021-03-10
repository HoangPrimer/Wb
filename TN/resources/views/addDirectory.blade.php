@extends('welcome')

@section('content')

<form action="{{ route('store')}}" method="post">
        @csrf
        <label for="tendanhmuc">Tên danh mục</label><br>
        <input type="text" name="tendm"><br><br>
        <label for="loaidanhmuc">Loại danh mục</label><br>
        <select name="loaidm">
                <option value="Đồ điện tử">Đồ điện tử</option>
                <option value="Thiết bị nghe nhìn">Thiết bị nghe nhìn</option>
                <option value="Đồ gia dụng"> Đồ gia dụng</option>
                <option value="Xe cộ">Xe cộ</option>
                <option value="Thời trang, Phụ kiện">Thời trang, Phụ kiện</option>
                <option value="Nội, Ngoại thất">Nội, Ngoại thất</option>
                <option value="Vật nuôi, Cây cảnh">Vật nuôi, Cây cảnh</option>
                <option value="Thể thao">Thể thao</option>
                <option value="Sách báo, Nghệ thuật">Sách báo, Nghệ thuật</option>
                <option value="Máy móc chuyên dụng">Máy móc chuyên dụng</option>
        </select>
        <button type="submit">thêm</button>
</form>
@endsection