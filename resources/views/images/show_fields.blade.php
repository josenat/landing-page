<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $image->id !!}</p>
</div>

<!-- Image Name -->
<div class="form-group">
    {!! Form::label('path', 'Nombre:') !!}
    <p>{!! $image->path !!}</p>
</div>

<!-- Path Field -->
<div class="form-group">
    {!! Form::label('path', 'Imágen:') !!}
    <img src="{{ asset('img/'.$image->path) }}" class="img-responsive" style="width: 400px; height: 300px;">
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado en:') !!}
    <p>{!! $image->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado en:') !!}
    <p>{!! $image->updated_at !!}</p>
</div>

