<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>the thao</title>
</head>
<body>
        @if(isset($allcate))
        @foreach($allcate as $key=>$value)          
           <p> <a href="{{url('').'/get-post-follow-category/'. $value->id}}">{{ $value->tentheloai }}</a> </p>
        @endforeach
    @endif
    @if(isset($cate))
        <p>{{$cate->tentheloai}}</p>
    @endif

</body>
</html>