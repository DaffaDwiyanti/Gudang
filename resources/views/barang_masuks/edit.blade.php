@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Barang Masuk
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($barangMasuk, ['route' => ['barangMasuks.update', $barangMasuk->id], 'method' => 'patch']) !!}

                        @include('barang_masuks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection