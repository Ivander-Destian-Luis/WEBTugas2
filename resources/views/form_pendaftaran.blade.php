<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    @if(Session::has('success'))
<div class="alert alert-success" role="alert">
    <p class="alert alert-success">{{ Session::get('success') }}</p>
</div>
@endif
    <h1 class="text-center">Form Pendaftaran</h1>
    <br>
    <form action="/insert" method="POST">
        @csrf
        <div class="container">
                <div class="row g-3 align-items-center" style="padding: 70px">
                    <div class="input-group">
                        <span class="input-group-text">NPM</span>
                        <input type="text" name="npm" id="npm" class="form-control">
                      </div>
                    <div classs="input-group">
                        <span class="input-group-text">Nama</span>
                        <input type="text" name="nama" id="nama" class="form-control">
                      </div>
                      <div>
                        <span class="input-group-text">Jenis Kelamin</span>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" checked value="Laki - Laki">
                        <label class="form-check-label" for="laki-laki">
                          Laki - Laki
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">
                          Perempuan
                        </label>
                      </div>
                      <div class="input-group">
                        <span class="input-group-text">Tanggal Lahir</span>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                      </div>
                      <div class="input-group">
                        <span class="input-group-text">Tempat Lahir</span>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </div>
          </div>
    </form>
    <form action="/select" method="POST">
      @csrf
      <div class="container">
        <div class="row g-3 align-items-center" style="padding: 70px ">
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Lihat Data</button>
          </div>
        </div>
      </div>
    </form>
    
</body>
</html>