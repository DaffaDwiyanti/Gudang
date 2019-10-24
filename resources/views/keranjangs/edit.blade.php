@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Keranjang
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($keranjang, ['route' => ['keranjangs.update', $keranjang->id], 'method' => 'patch']) !!}

                        @include('keranjangs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection