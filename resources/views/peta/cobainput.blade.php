<!DOCTYPE html>
<html lang="en">
    <head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Fonts -->

          <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }




        </style>
    </head>
    <body>

        <div class="container" >
            <center><h4><p>INPUT DATA POSKO </p></h4> </center>

<form action ="#" method="POST">

 {{csrf_field()}}


<table class="table">
  <tr>
      <td>id_posko</td>
      <td>:</td>
      <td>
        <select id="id" name="id" class="form-control" >
                          <option value=""></option>
                          @forelse($Nos as $id)
                          <option value="{{$id}}">{{$id}}</option>
                          @empty
                          <option value="">Belum Ada Data</option>
                          @endforelse
                      </select></td>
  </tr>

        <tr>
            <td>Nama Posko</td>
            <td>:</td>
            <td>
              <select id="nama_posko" name="nama_posko" class="form-control">
                          <option value=""></option>
                          @forelse($pemiliks as $nama_posko)
                          <option value="{{$nama_posko}}">{{$nama_posko}}</option>
                          @empty
                          <option value="">Belum Ada Data</option>
                          @endforelse
                      </select></td>
        </tr>

  </div>
  <td align="right">
    <a href="{{route('peta.cobainput')}}" class="btn btn-danger btn-lg">
    KEMBALI
 </a>
            <input type="submit" value="SIMPAN" class="btn btn-success btn-lg" >
          </td>
        </div>
    </body>
</html>
