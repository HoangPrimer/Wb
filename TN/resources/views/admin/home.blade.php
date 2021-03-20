@extends('layouts.app')

@section('content')
<div class="listdirectory">
            <div class="title">
            <div class="title-left">
                    <h1>Quản Lý Bài Viết</h1>
            </div>
            <div class="title-right">
                   <ul>
                       <li>
                           <a href="{{route('adpost')}}">
                           <i class="fas fa-plus"></i>
                           <span>ADD</span>
                           </a>
                       </li>
                       <li>
                           <a href="{{route('adpost')}}">
                           <i class="fas fa-list-ul"></i>
                           <span>List-Post</span>
                           </a>
                       </li>
                   </ul>
            </div>
            </div>
            <div class="cont">
                <div class="wiget-title">
                        <p>Số Lượng : {{count($post)}}</p>
                </div>
                        <div class="wiget-body">
                        <table>
                                <tr>
                                        <td  style="color: rgb(5, 172, 32); width:50px;">ID</td>
                                        <td  style="color: rgb(5, 172, 32); width:150px;"> Tên</td>
                                        <td  style="color: rgb(5, 172, 32); width:400px;">Tiêu Đề</td>
                                        <td  style="color: rgb(5, 172, 32); width:800px;">Nội Dung</td>
                                        <td  style="color: rgb(5, 172, 32); width:100px;">Trạng Thái</td>
                                        <td  colspan="2" style="color: rgb(5, 172, 32);">Hành Động</td>
                                </tr>
                                @foreach( $post as $dt)
                                <tr>
                                        <td >{{ $dt -> id }}</td>
                                        <td >{{ $dt ->user-> name }}</td>
                                        <td >{{ $dt -> name_post }}</td>
                                        <td >{{ $dt -> content }}</td>
                                        <td >{{ $dt -> public }}</td>
                                        <td ><a href="#"><i class="fas fa-trash"></i></a></td>
                                        <td ><a href="#"><i class="fas fa-edit"></i></a></td>
                                </tr>
                                @endforeach
                        </table>
                        </div>
            </div>
</div>
@endsection
