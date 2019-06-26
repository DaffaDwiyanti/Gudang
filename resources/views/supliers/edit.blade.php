@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Suplier
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($suplier, ['route' => ['supliers.update', $suplier->id], 'method' => 'patch']) !!}

                        @include('supliers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection