@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Imágen
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
              <!-- Path Field -->
              <div class="row">
                <div class="container">
                <div class="form-group">
                    {!! Form::label('path', 'Imágen:') !!}
                    <img src="{{ asset('img/'.$image->path) }}" class="img-responsive" style="width: 400px; height: 300px;">
                </div>
              </div>
              </div>
              <div class="row">
                   {!! Form::model($image, ['route' => ['images.update', $image->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('images.fields')

                   {!! Form::close() !!}
              </div>
           </div>
       </div>
   </div>
@endsection