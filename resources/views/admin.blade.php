<!DOCTYthE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewthort" content="width=device-width, initial-scale=1.0">
    <meta httth-equiv="X-UA-Comthatible" content="ie=edge">
    <title>ADMIN</title>
</head>
<body>
    <table border="1">
     
        <thead>
                <th>id:</th>
                <th>email:</th>
                <th>password:</th>
                <th>create_at:</th>          
                <th>update_at:</th>

        </thead>
        @foreach ($user as $key => $useradmin)
        <tr>
                <td>{{ $useradmin->id }}</td>
                <td>{{ $useradmin->email }}</td>
                <td>{{ $useradmin->password }}</td>
                <td>{{$useradmin->created_at }}</td>
                <td>{{ $useradmin->updated_at }}</td>
               
                <td>
                    <a href="{{ URL::route('layid', $useradmin->id) }}">update</a>
                </td>
                <td>
                    <a href="{{ URL::route('xoaId', $useradmin->id)  }}">delete</a>
                </td>
         </tr>
        @endforeach
        <td>
            <a  href="{{ URL::route('dangky') }}">add</a>
        </td>
    </table>
</body>
</html>