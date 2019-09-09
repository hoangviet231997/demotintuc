<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản Lý Học Sinh</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- <link type="text/css" href="{{ URL('public/restful/css/bootstrap.min.css') }}" rel="stylesheet"> -->
  </head>
  <body>
    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Sửa Điểm Học Sinh</h3>
        </div>
        <div class="panel-body">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif


          {{ Form::open(array(
            'route' =>array('hocsinh.update', $hocsinh->id),
            'method' => 'PUT'
          )
          ) }}
          @csrf
          <div class="form-group">
            <label for="lblavata">Ảnh đại diện</label>
            <td><img src="{{ asset ($hocsinh->avata) }}" alt="" class="img-fluid" /></td>
          </div>
            <div class="form-group">
              <label for="lblHoTen">Họ Tên Học Sinh</label>
              <input type="text" class="form-control" name="txtHoTen" value="{{$hocsinh->hoten}}" />
            </div>
            <div class="form-group">
              <label for="lblToan">Điểm Môn Toán: {{$hocsinh->toan}}</label>
              <input type="text" class="form-control" name="txtToan" value="" />
            </div>
            <div class="form-group">
              <label for="lblLy">Điểm Môn Lý: {{$hocsinh->ly}}</label>
              <input type="text" class="form-control" name="txtLy" value="" />
            </div>
            <div class="form-group">
              <label for="lblHoa">Điểm Môn Hóa: {{$hocsinh->hoa}}</label>
              <input type="text" class="form-control" name="txtHoa" value="" />
            </div>
            <button type="submit" class="btn btn-default">Thêm</button>
          {{ Form::close() }}
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>