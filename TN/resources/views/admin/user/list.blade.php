@extends('layouts.app')

@section('content')

<div class="listdirectory">
        <div class="title">
                <div class="title-left">
                        <h1>Quản Lý Người Dùng</h1>
                </div>
                <div class="title-right">
                        <ul>
                
                        <li>
                                <a href="{{route('listuser')}}">
                                <i class="fas fa-list-ul"></i>
                                <span>List-User</span>
                                </a>
                        </li>
                        </ul>
                </div>
        </div>
        
        @if(session('message'))
                          <div class="alert alert-success">
                              {{ session('message') }}
                          </div>
                      @endif
                <div class="wiget">
                        <div class="wiget-title">
                                <p>Số Lượng : {{ count($u)}}</p>
                        </div>
                        <div class="wiget-body">
                        <table>
                                <tr>
                                        <td  style="color: rgb(5, 172, 32);">ID</td>
                                        <td  style="color: rgb(5, 172, 32);"> Tên</td>
                                        <td  style="color: rgb(5, 172, 32);">Email</td>
                                        <td  style="color: rgb(5, 172, 32);">Address</td>
                                        <td  style="color: rgb(5, 172, 32);">Phone</td>
                                        <td  style="color: rgb(5, 172, 32);">Gender</td>
                                        <td  style="color: rgb(5, 172, 32);">Date_Of_Birth</td>
                                        <td  style="color: rgb(5, 172, 32);">Level</td>
                                        <td  colspan="2" style="color: rgb(5, 172, 32);">Hành Động</td>
                                </tr>
                                @foreach( $u as $dt)
                                <tr>
                                        <td >{{ $dt -> id }}</td>
                                        <td >{{ $dt -> name }}</td>
                                        <td >{{ $dt -> email }}</td>
                                        <td >{{ $dt -> address }}</td>
                                        <td >{{ $dt -> phone }}</td>
                                        <td >{{ $dt -> gender }}</td>
                                        <td >{{ $dt -> date_of_birth }}</td>
                                        <td >{{ $dt -> is_admin }}</td>
                                        <td ><a href="/admin/user/delete/{{$dt->id}}"><i class="fas fa-trash"></i></a></td>
                                        <td ><a href="#"><i class="fas fa-edit"></i></a></td>
                                </tr>
                                @endforeach
                        </table>
                        <div class="x">
                        {{$u->links()}}
                        </div>
                        </div>
                </div>
</div>

@endsection