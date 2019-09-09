<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <table border="1">
  @foreach($postfollowcate as $key=>$value)
    <tr>
      <td>{{$value->ten}}</td>
      <td>{{$value->noi_dung_rut_gon}}</td>
      <td>{{$value->noi_dung}}</td>
    </tr>
  @endforeach
</table>
</body>
</html>