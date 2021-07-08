@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
   <title>SIG DARATAN | Lokasi Kejahatan</title>

</head>
<body>

@section('content')
    <section class="content-header">
        <h1>
            Lokasi Kejahatan
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('lokasi_kejahatans.show_fields')
                    <a href="{{ route('lokasiKejahatans.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
