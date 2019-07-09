@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Nueva relación
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'imageTitles.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('image_titles.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
