<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Anggota UKM</title>
</head>
<body>
    @if(Session::has('success'))
<div class="alert alert-success" role="alert">
    <p class="alert alert-success">{{ Session::get('success') }}</p>
</div>
@endif
    <h1>DATA ANGGOTA UKM </h1>
    <table border="2px">
        <thead>
            <tr>
                <td>NPM</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Tanggal Lahir</td>
                <td>Tempat Lahir</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggota as $item)
                <tr>
                    <td>{{$item -> npm}}</td>
                    <td>{{$item -> nama}}</td>
                    <td>{{$item -> jenis_kelamin}}</td>
                    <td>{{$item -> tanggal_lahir}}</td>
                    <td>{{$item -> tempat_lahir}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>