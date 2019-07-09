@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Imágen
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'images.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('images.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
