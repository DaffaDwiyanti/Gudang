@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Masuk Detail
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($masukDetail, ['route' => ['masukDetails.update', $masukDetail->id], 'method' => 'patch']) !!}

                        @include('masuk_details.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection