@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Jenis Masuk
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jenisMasuk, ['route' => ['jenisMasuks.update', $jenisMasuk->id], 'method' => 'patch']) !!}

                        @include('jenis_masuks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection