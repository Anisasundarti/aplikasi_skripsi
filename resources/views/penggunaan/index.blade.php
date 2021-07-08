@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
   <title>SIG DARATAN | Prosedur Aplikasi</title>

</head>
<body>

@section('content')
<section class="content-header">
    <h1 class="pull-left">Cara Penggunaan Aplikasi</h1>
    <h1 class="pull-right"></h1>
</section>
    
    <style type="text/css">
        .rata-tengah {
            text-align: justify;
            font-size: 15px;
            font-weight: bold ;
        }
    </style>

    <div class="content">
           @include('flash::message')
        <div class="clearfix"></div>
            <div class="box box-primary">
                <div class="box-body"> 
                    <div class="col-md-50 m-500">
                        <div class="rata-tengah">
                        <p>Aplikasi ini berbentuk website mengenai informasi lokasi kejahatan yang pernah terjadi di Kecamatan Samarinda Seberang Dan Loa Janan Ilir. Kegiatan menambah data peta hanya dapat dilakukan oleh Admin.</p><br>
                        

                        <p>Adapun prosedur untuk masuk aplikasi ini sebagai berikut :<br>
                        1. Silahkan ke menu login (jika sudah pernah login) <br>
                        2. Jika belum pernah login, silahkan ke menu registrasi dengan melengkapi data yang diminta kemudian login. <br>
                        3. Masuk ke menu peta lokasi pilih menu tahun jika prosedur dilakukan secara benar maka titik akan muncul dipeta.

                        
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

