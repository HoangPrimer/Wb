@extends('layouts.layoutwb')
@section('content')
<div class="listdirectory">
        <div class="title">
                <div class="title-left">
                        <span>Quản Lý Bài Viết Cá Nhân<span>
                </div>
                <div class="title-right">
                        <ul>
                        <li>
                                <a href="{{route('createpost')}}">
                                <i class="fas fa-plus"></i>
                                <span>ADD</span>
                                </a>
                        </li>
                        <li>
                                <a href="{{route('listpost')}}">
                                <i class="fas fa-list-ul"></i>
                                <span>List-Post</span>
                                </a>
                        </li>
                        </ul>
                </div>
        </div>
                <div class="wiget">
                        <div class="wiget-title">
                                <p>Số Lượng : {{count($a)}}</p>
                        </div>
                        <div class="wiget-body">
                        <table>
                                <tr>
                                        <td  style="color: rgb(5, 172, 32); width:100px;">ID</td>
                                        <td  style="color: rgb(5, 172, 32); width:200px;">Tiêu Đề</td>
                                        <td  style="color: rgb(5, 172, 32); width:400px;">Nội Dung</td>
                                        <td  colspan="3" style="color: rgb(5, 172, 32); width:699px;">Ảnh</td>
                                        <td  style="color: rgb(5, 172, 32); width:120px;">Trạng Thái</td>
                                        <td  colspan="2" style="color: rgb(5, 172, 32);">Hành Động</td>
                                </tr>
                                @foreach( $a as $dt)
                                <tr>
                                        <td >{{ $dt -> id }}</td>
                                        <td >{{ $dt -> name_post }}</td>
                                        <td >{{ $dt -> content }}</td>
                                        <td style="width:233px;"> <img src="../images/anhhang/{{ DB::table('images')->where('post_id', $dt->id)->value('name')}}"> </td>
                                        <td style="width:233px;"> <img src="../images/anhhang/{{ DB::table('images')->where('post_id', $dt->id)->value('name')}}"> </td>
                                        <td style="width:233px;"> <img src="../images/anhhang/{{ DB::table('images')->where('post_id', $dt->id)->value('name')}}"> </td>
                                        @if($dt -> public == 'private')
                                        <td style="color: red;" >Chưa Duyệt</td>
                                             
                                        <td ><a href="/profile/post/delete/{{$dt -> id }}"><i class="fas fa-trash"></i></a></td>
                                        <td ><a href="/profile/post/edit/{{$dt -> id }}"><i class="fas fa-edit"></i></a></td>
                                        @else
                                            <td style="color: blue;">Đã Được Duyệt</td>
                                            <td colspan="2"><a href="/profile/post/delete/{{$dt -> id }}" ><i class="fas fa-trash"></i></a></td>
                                        @endif
                                </tr>
                                @endforeach
                        </table>
                        </div>
                </div>
</div>


@endsection