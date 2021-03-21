@extends('layouts.app')

@section('content')

<div class="listdirectory">
        <div class="title">
                <div class="title-left">
                        <h1>Quản Lý Danh Mục</h1>
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
                @if(count($errors)>0)   
                          <div class="alert alert-danger">
                              @foreach($errors->all() as $err)
                                  {{ $err }}<br>
                              @endforeach
                          </div>            
                      @endif
                
                      @if(session('message'))
                          <div class="alert alert-success">
                              {{ session('message') }}
                          </div>
                      @endif
                <div class="wiget">
                        <div class="wiget-title">
                                <p>Số Lượng : {{count($direc)}}</p>
                        </div>
                        <div class="wiget-body">
                        <table>
                                <tr>
                                        <td  style="color: rgb(5, 172, 32);">ID</td>
                                        <td  style="color: rgb(5, 172, 32);"> Tên</td>
                                        <td  style="color: rgb(5, 172, 32);">Thể Loại</td>
                                        <td  colspan="2" style="color: rgb(5, 172, 32);">Hành Động</td>
                                </tr>
                                @foreach( $direc as $dt)
                                <tr>
                                        <td >{{ $dt -> id }}</td>
                                        <td >{{ $dt -> name_directory }}</td>
                                        <td >{{ $dt -> category }}</td>
                                        <td ><a href="/admin/directory/delete/{{$dt->id}}"><i class="fas fa-trash"></i></a></td>
                                        <td ><a href="/admin/directory/edit/{{$dt->id}}"><i class="fas fa-edit"></i></a></td>
                                </tr>
                                @endforeach
                        </table>
                        </div>
                </div>
</div>

@endsection