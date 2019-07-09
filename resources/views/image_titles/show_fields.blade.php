<!-- Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title_id', 'Id:') !!} 
    <p>{!! $imageTitle->id !!}</p>
</div>

<!-- Title Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title_id', 'Título:') !!}
    <p>{!! $imageTitle->title->description !!}</p>
</div>

<!-- Image Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('image_id', 'Imágen:') !!}
    <p>
        <img src="{{ asset('img/'.$imageTitle->image->path) }}" class="img-responsive" style="width: 400px; height: 300px;">
    </p>
</div> 

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado en:') !!}
    <p>{!! $imageTitle->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado en:') !!}
    <p>{!! $imageTitle->updated_at !!}</p>
</div>

