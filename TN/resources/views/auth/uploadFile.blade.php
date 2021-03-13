<form action="{{route('uploadfile')}}" method="post" enctype="multipart/form-data">
@csrf
        <input type="file"  name="myfile">
        <button type="submit">Upfile</button>
</form>