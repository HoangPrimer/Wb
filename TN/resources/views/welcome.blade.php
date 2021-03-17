@extends('layouts.layoutwb')

@section('content')
    <div class="main">
  <div class="directory">
      <div class="row">
          <div class="colums">
              <div class="image">
                  <img src="../images/cat-1.jpg">
              </div>
              <div class="nd">
               <h4> Đồ điện tử</h4>
              @foreach($dodientu as $al)
                <p>{{$al->name_directory}} </p>
             @endforeach
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-16.jpg">
              </div>
              <div class="nd">
              <h4> Thiết bị, nghe nhìn</h4>
              @foreach($nghenhin as $al)
                <p>{{$al->name_directory}} </p>
             @endforeach
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-24.jpg">
              </div>
              <div class="nd">
              <h4> Đồ gia dụng</h4>
              @foreach($dogiadung as $al)
                <p>{{$al->name_directory}} </p>
             @endforeach
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-41.jpg">
              </div>
              <div class="nd">
              <h4> Xe cộ</h4>
              @foreach($xeco as $al)
                <p>{{$al->name_directory}} </p>
             @endforeach
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-48.jpg">
              </div>
              <div class="nd">
              <h4> Thời trang, Phụ kiện</h4>
              @foreach($thoitrang as $al)
                <p>{{$al->name_directory}} </p>
             @endforeach
              </div>
          </div>

      </div>

      <div class="row">
          <div class="colums">
              <div class="image">
              <img src="../images/cat-64.jpg">
              </div>
              <div class="nd">
              <h4> Nội, Ngoại thất</h4>
              @foreach($noithat as $al)
                <p>{{$al->name_directory}} </p>
             @endforeach
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-74.jpg"></div>
              <div class="nd">
              <h4> Vật nuôi, Cây cảnh</h4>
              @foreach($vatnuoi as $al)
                <p>{{$al->name_directory}} </p>
             @endforeach
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-82.jpg">
              </div>
              <div class="nd">
              <h4> Thể thao</h4>
              @foreach($thethao as $al)
                <p>{{$al->name_directory}} </p>
             @endforeach
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-86.jpg">
              </div>
              <div class="nd">
              <h4> Sách báo, Nghệ thuật</h4>
              @foreach($sach as $al)
                <p>{{$al->name_directory}} </p>
             @endforeach
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-92.jpg">
              </div>
              <div class="nd">
              <h4> Máy móc chuyên dụng</h4>
              @foreach($may as $al)
                <p>{{$al->name_directory}} </p>
             @endforeach
              </div>
          </div>

      </div>
  </div>
 
  <div class="producttt">
             <div class="title">
                     <h1> Có Thể Bạn Quan Tâm</h1>
             </div>
   
            <div class="row-d5">
                @foreach($posts as $po)
                <div class="colum-d3">
                   <div class="image-d1">
                         <img src="images/anhhang/{{ DB::table('images')->where('post_id', $po->id)->value('name')}}">
                   </div>
                    <div class="image-d2">
                        <p>{{$po->name_post}} </p>
                        <p>{{$po->price}}</p>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
@endsection