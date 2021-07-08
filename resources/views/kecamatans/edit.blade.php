@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kecamatan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($kecamatan, ['route' => ['kecamatans.update', $kecamatan->id], 'method' => 'patch']) !!}

                        @include('kecamatans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection