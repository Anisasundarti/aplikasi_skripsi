@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Jenis Kejahatan
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'jenisKejahatans.store']) !!}

                        @include('jenis_kejahatans.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
