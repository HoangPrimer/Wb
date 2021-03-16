@extends('layouts.layoutwb')
@section('content')
 
<div class="mid">
        <div class="mid-title">
                <h1>Đăng Tin Bán Sản Phẩm</h1>
        </div>
        <div class="mid-content">
            <form class="mct-form" action="{{url('post\store')}}" method="post" enctype="multipart/form-data">
            @csrf
                   <div class="tit">     
                        <div class="txt">
                            <p>Tiêu đề</p>
                        </div>
                        <div class="inp">
                            <input type="text" name="title" required>
                        </div>
                    </div>
                    <div class="tit"> 
                         <div class="txt">
                            <p>Mô tả</p>
                        </div>
                        <div class="inp">
                            <textarea name="content" required></textarea>
                        </div>
                    </div>
                    <div class="tit"> 
                        @for( $i = 1 ; $i <= 3 ; $i++)
                       <div class="txt">
                            <p>Ảnh{!! $i !!}</p>
                        </div>
                        <div class="">
                            <input type="file" name="file[]" required>
                        </div>
                        @endfor
                     </div>

                    <div class="tit"> 
                     <div class="txt">
                            <p>Giá</p>
                        </div>
                        <div class="inp">
                            <input class="asd" type="text" name="price" required><span>VND</span>
                        </div>
                     </div>
                     <div class="tit"> 
                         <div class="txt">
                            <p>Danh mục sản phẩm</p>
                        </div>
                        
                        <select name="tendm" class="drt">
                               @foreach($a as $abc)
                               <option value="{{$abc->id}}">{{$abc->name_directory}}</option>
                               @endforeach
                           </select>
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