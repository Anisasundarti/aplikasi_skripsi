@extends('layouts.app')

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
                   {!! Form::model($lokasiKejahatan, ['route' => ['lokasiKejahatans.update', $lokasiKejahatan->id], 'method' => 'patch']) !!}

                        @include('lokasi_kejahatans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection