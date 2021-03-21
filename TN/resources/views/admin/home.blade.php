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
                                        <td  style="color: rgb(5, 172, 32); width:100px;"> Tên</td>
                                        <td  style="color: rgb(5, 172, 32); width:250px;">Tiêu Đề</td>
                                        <td  style="color: rgb(5, 172, 32); width:400px;">Nội Dung</td>
                                        <td  colspan="3" style="color: rgb(5, 172, 32); width:699px;">Ảnh</td>
                                        <td  style="color: rgb(5, 172, 32); width:100px;">Trạng Thái</td>
                                        <td  colspan="2" style="color: rgb(5, 172, 32);width:150px">Hành Động</td>
                                </tr>
                                @foreach( $post as $dt)
                                <tr>
                                        <td style=" width:50px;">{{ $dt -> id }}</td>
                                        <td style=" width:100px;">{{ $dt ->user-> name }}</td>
                                        <td style=" width:250px;">{{ $dt -> name_post }}</td>
                                        <td style=" width:400px;">{{ $dt -> content }}</td>
                                        @foreach($dt->image as $img)
                                        <td style="width:233px;"> <img src="/images/anhhang/{{$img->name}}"> </td>
                                        @endforeach
                                        @if($dt -> public == 'private')
                                        <td style="color: red;width:100px;" >Chưa Duyệt</td>
                                             
                                        <td style=" width:60px;"><a href="/admin/post/delete/{{$dt -> id }}"><i class="fas fa-trash"></i></a></td>
                                        <td style=" width:90px;"><a href="/admin/post/duyetbai/{{$dt -> id }}">Duyệt</i></a></td>
                                        @else
                                            <td style="color: blue;">Đã Được Duyệt</td>
                                            <td colspan="2" style=" width:100px;"><a href="/profile/post/delete/{{$dt -> id }}" ><i class="fas fa-trash"></i></a></td>
                                        @endif
                                        
                                </tr>
                                @endforeach
                        </table>
                        </div>
            </div>
</div>
@endsection
