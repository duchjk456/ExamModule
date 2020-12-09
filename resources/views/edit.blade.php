<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form action="{{route('update',$agency->id)}}" method="post" style="width: 100%;">
    @csrf
    <h1 style="text-align: center">Chỉnh sửa đại lí phân phối</h1>
    <table style="margin-left: 35%;">
        <tr>
            <td>
                <p>Mã số đại lí:</p>
                <input type="number" name="code" value="{{$agency->code}}">
                @error('code')
                <p style="color: red">{{$message}}</p>
                @enderror
                <br><br>
                <p>Tên đại lí:</p>
                <input type="text" name="name" value="{{$agency->name}}">
                @error('name')
                <p style="color: red">{{$message}}</p>
                @enderror<br><br>
                <p>Điện thoại</p>
                <input type="number" name="phone" value="{{$agency->phone}}"><br><br>
                @error('phone')
                <p style="color: red">{{$message}}</p>
                @enderror
                <p>Email:</p>
                <input type="text" name="email" value="{{$agency->email}}"><br><br>
                @error('email')
                <p style="color: red">{{$message}}</p>
                @enderror
            </td>
            <td>
                <div style="margin-left: 7%;margin-top:-6%"><p>Địa chỉ:</p>
                    <textarea name="address" cols="30" rows="7">{{$agency->address}}</textarea>
                    @error('address')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                    <p>Tên người quản lí</p>
                    <input type="text" name="admin" value="{{$agency->admin}}">
                    @error('admin')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                    <p>Trạng thái:</p>
                    <select name="status">
                        <option value="{{$agency->status}}">{{$agency->status}}</option>
                        <option value="Không hoạt động">Không hoạt động</option>
                        <option value="Hoạt động">Hoạt động</option>
                    </select>@error('status')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right"><button class="btn btn-primary">Submit</button></td>
        </tr>
    </table>

</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
