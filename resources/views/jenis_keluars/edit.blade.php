@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Jenis Keluar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jenisKeluar, ['route' => ['jenisKeluars.update', $jenisKeluar->id], 'method' => 'patch']) !!}

                        @include('jenis_keluars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection