@extends('layouts.app')

@section('content')
<div class="listdirectory">
            <div class="title">
            <div class="title-left">
                    <h1>Chỉnh Sửa Danh Mục</h1>
            </div>
            <div class="title-right">
                   <ul>
                       <li>
                           <a href="{{route('adddirectory')}}">
                           <i class="fas fa-plus"></i>
                           <span>ADD</span>
                           </a>
                       </li>
                       <li>
                           <a href="{{route('directory')}}">
                           <i class="fas fa-list-ul"></i>
                           <span>List-Directory</span>
                           </a>
                       </li>
                   </ul>
            </div>
            </div>
            <div class="wiget">
                <div class="wiget-title">
                        <p>Edit :)) </p>
                </div>
                        <div class="wiget-bodi">
                        <form action="{{ route('postdirectory')}}" method="post">
                        
                        @if(count($errors)>0)   
                          <div class="alert alert-danger">
                              @foreach($errors->all() as $err)
                                  {{ $err }}<br>
                              @endforeach
                          </div>            
                      @endif
                      @CSRF  
                      @if(session('message'))
                          <div class="alert alert-success">
                              {{ session('message') }}
                          </div>
                      @endif
                                <label for="tendanhmuc">Tên danh mục </label>     
                                <label for="loaidanhmuc">Loại danh mục</label><br>
                                <input class="ip" type="text" name="tendm" value="{{$dr->name_directory}}">
                                <span class="ip">{{$dr->category}}</span><br><br>
                                <label for="loaidanhmuc"> Chọn loại danh mục</label><br>
                                <select  class="ip" name="loaidm" >
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
                                <button type="submit">Sửa</button>
                    </form>
                        </div>
            </div>
</div>
@endsection
