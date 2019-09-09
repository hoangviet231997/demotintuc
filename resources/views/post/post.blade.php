<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($allpost as $key=>$value)
     <p>{{$value->ten}}</p>
     <p>{{$value->noi_dung_rut_ngan}}</p>
     <p>{{$value->noi_dung}}</p>
    @endforeach
</body>
</html>