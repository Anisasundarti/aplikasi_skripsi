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
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- {!! Form::open(['route' => 'lokasiKejahatans.store']) !!} -->
                    <form action="{{route('lokasiKejahatans.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        @include('lokasi_kejahatans.fields')
                    </form>

                    <!-- {!! Form::close() !!} -->
                </div>
            </div>
        </div>
    </div>
@endsection
