@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
   <title>SIG DARATAN | Tentang</title>

</head>
<body>

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Tentang Kami</h1>
        <h1 class="pull-right"></h1>
    </section>
    
    <style type="text/css">
        .rata-kiri {
            text-align: left;
            font-size: 20px;
            font-weight: bold;
        }
        .link {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
        .gambar {
            float: left;
            margin: 5px;
        }
    </style>

    <div class="content">
           @include('flash::message')
        <div class="clearfix"></div>
            <div class="box box-primary">
                <div class="box-body"> 
                    <div class="col-md-90 m-900">
                        <div class="gambar">
                            <img src="{{asset('anisa.jpg')}}" width="250px"></div>
                            <!-- <img src="{{asset('Lambang_Polri.png')}}" width="250px"></div> -->
                        <div class="rata-kiri">
                            
                            <p>Nama     : Anisa Sundarti</p>
                            <p>NIM      : H171600574 </p>
                            <p>Jurusan  : Manajemen Pertanian </p>
                            <p>Prodi    : Teknologi Rekayasa Perangkat Lunak</p>
                            <p>Alamat   : Perumahan Pinang Bahari Sebelah Mushola 
                                          As Shiddiq Kelurahan Gunung Panjang Kecamatan Samarinda Seberang</p>
                                          <br><br><br>
                        <div class="link">
                            <p>Kontak Admin : </p>
                            <a href="https://www.instagram.com/_anssund/"><p>Instagram: @_anssund </p></a>
                            <a href="https://web.facebook.com/anisa.sundarti"><p>Facebook : Anisa Sundarti </p></a>
                            <a href="sundartianisa@gmail.com"><p>sundartianisa@gmail.com</p></a>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
@endsection

