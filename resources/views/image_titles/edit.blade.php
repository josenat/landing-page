@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actualizar Relación
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($imageTitle, ['route' => ['imageTitles.update', $imageTitle->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('image_titles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection