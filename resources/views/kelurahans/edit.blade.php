@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kelurahan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($kelurahan, ['route' => ['kelurahans.update', $kelurahan->id], 'method' => 'patch']) !!}

                        @include('kelurahans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection