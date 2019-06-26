@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Barang Keluar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($barangKeluar, ['route' => ['barangKeluars.update', $barangKeluar->id], 'method' => 'patch']) !!}

                        @include('barang_keluars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection