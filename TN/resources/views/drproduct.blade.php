@extends('layouts.layoutwb')

@section('content')
<section>
        <nav>
            <div class="danhmuc">
                <h3 id="menu">Danh mục sản phẩm</h3>
                <ul id="menu-danhmuc">
                    <li  onclick="mo()" ondblclick="dong()" style="color:#00e; cursor: pointer;">Đồ điện tử<i id="icon" class="fa fa-angle-down"></i></li>
                    <ul id="menu-c2">
                        <li><a href="index.html"> <i id="icon-right" class="fa fa-angle-right"></i>Điện thoại</a></li>
                        <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>Máy tính bảng</a></li>
                        <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>SIM thẻ</a></li>
                        <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>Máy đọc sách</a></li>
                        <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>Máy tính bảng</a></li>
                        <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>Điện thoại</a></li>
                        <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>Máy tính bảng</a></li>
                        <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>SIM thẻ</a></li>
                        <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>Máy đọc sách</a></li>
                        <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>Máy tính bảng</a></li>
                    </ul>
                </ul>
            </div>
            <div class="car">
                <h3 id="menu">Bạn quan tâm tới xe hơi?</h3>
                <ul id="menu-car">
                    <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>Audi Q7</a></li>
                    <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>Ford</a></li>
                    <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>Ferari</a></li>
                    <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>Toyota</a></li>
                    <li><a href="#"> <i id="icon-right" class="fa fa-angle-right"></i>VinFast</a></li>
                </ul>
            </div>
        </nav>
        <div class="content">
            <div class="info">
            <div class="img-sp">
                <img src="../img/content-post.jpg" width="350px" height="250px" style="border-radius:5px;"/>
            </div>
            <div id="infomation">

                <div id="name-post">
                    Tên Bài viết
                </div>

                <div id="info-user">
                    <div id="name">
                        <p>Nguyễn Văn A</p>
                    </div>
                    <div id="phone">
                        <p>00111122223333444</p>
                    </div>
                </div>

                <div id="info-user">
                    <div id="cost">
                        <p>12.000.000VND</p>
                    </div>
                    <div id="place">
                        <p>Hà Nọi</p>
                    </div>
                </div>
            </div>
            </div>

            <div class="description">
                <h3 style="text-align: center;">Mô tả</h3>
                <p>Theo từ điển Urban Dictionary, wibu (hay weeaboo) là một thuật ngữ mang thái độ tiêu cực, dùng để chỉ những ai bị ám ảnh, phát cuồng quá mức đối với văn hóa Nhật Bản đến độ gây phiền cho người khác. Hầu hết các wibu đều không tự nhận thức được mức độ cuồng của bản thân. Một biểu hiện khác của wibu là có mong muốn được trở thành người Nhật.

                Ngày nay, wibu còn dùng để ám chỉ những kẻ không hiểu rõ về Nhật hay văn hóa Nhật nhưng rất thích ra vẻ, thể hiện.<br/>
                Wibu xuất phát từ đâu?
                Chính xác thì ban đầu, thuật ngữ “weeaboo” là tiếng lóng dùng để chỉ những người phương Tây bị ám ảnh bởi văn hóa Nhật, xem nền văn hóa này vượt trội hơn so với văn hóa quốc gia và các nền văn hóa khác. Tiền thân của weeaboo là Wapanese, là từ được kết hợp từ white (trắng/da trắng) hoặc wannabe (muốn trở thành) và Japanese (thuộc về Nhật Bản).

                Xuất hiện nhiều trên trang web 4chan vào đầu những năm 2000, Wapanese mang ý nghĩa miệt thị những người da trắng phát cuồng mọi thứ về văn hóa Nhật Bản. Khi weeaboo du nhập vào Việt Nam, từ này bị biến thể thành wibu (phát âm của weeaboo).</p>
            </div>

            <div class="comment">
                Bình Luận
            </div>
        </div>
            
    
    </section>

@endsection