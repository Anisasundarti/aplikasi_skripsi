@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
   <title>SIG DARATAN | Peta </title>

</head>
<body>

@section('content')
    <section class="content-header">
        <h1>
            Data Peta
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'peta.store']) !!}

                        @include('peta.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
