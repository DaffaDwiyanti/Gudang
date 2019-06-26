@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Keluar Detail
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($keluarDetail, ['route' => ['keluarDetails.update', $keluarDetail->id], 'method' => 'patch']) !!}

                        @include('keluar_details.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection