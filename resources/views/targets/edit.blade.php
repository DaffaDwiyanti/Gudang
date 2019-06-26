@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Target
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($target, ['route' => ['targets.update', $target->id], 'method' => 'patch']) !!}

                        @include('targets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection