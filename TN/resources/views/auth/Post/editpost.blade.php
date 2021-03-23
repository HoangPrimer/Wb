@extends('layouts.layoutwb')
@section('content')
 
<div class="mid">
        <div class="mid-title">
                <h1>Sửa Tin Bán Sản Phẩm</h1>
        </div>
        <div class="mid-content">
            <form class="mct-form" action="{{route('addpost')}}" method="post" enctype="multipart/form-data">
            @csrf
                   <div class="tit">     
                        <div class="txt">
                            <p>Tiêu đề</p>
                        </div>
                        <div class="inp">
                            <input type="text" name="title" value="{{$p->name_post}}" required>
                        </div>
                    </div>
                    <div class="tit"> 
                         <div class="txt">
                            <p>Mô tả</p>
                        </div>
                        <div class="inp">
                            <textarea name="content" required>{{$p->content}}</textarea>
                        </div>
                    </div>
                    <div class="tit"> 
                        @for( $i = 1 ; $i <= 3 ; $i++)
                       <div class="txt">
                            <p>Ảnh{!! $i !!}</p>
                        </div>
                        <div class="">
                            <input type="file" name="file[]"  >
                        </div>
                        @endfor
                     </div>

                    <div class="tit"> 
                     <div class="txt">
                            <p>Giá</p>
                        </div>
                        <div class="inp">
                            <input class="asd" type="text" name="price" value="{{$p->price}}" required><span>VND</span>
                        </div>
                     </div>
                     <div class="tit"> 
                         <div class="txt">
                            <p>Danh mục sản phẩm</p>
                        </div>
                        
                        
                     </div>
                     
                    <div class="tit"> 
                         <div class="btn">
                            <button type="submit" >Đăng tin</button>
                        </div> 
                    </div>
            </form>
            </div>
</div>
  
@endsection