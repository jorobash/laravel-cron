<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3 class="align">
            File Uploading in Laravel
        </h3>
        <br>
        <br>

        <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="file" name="select-file">
            <input type="submit" name="upload" value="upload">
        </form>
    </div>

    <div>
        <img src="/images/{{Session::get('path')}}" width="300" alt="">
    </div>
</body>
</html>