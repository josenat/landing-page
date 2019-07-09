<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title_id', 'Título:') !!}
    {{ Form::select('title_id', $titles, null, ['class' => 'form-control']) }}
</div>
<div class="clearfix"></div>
 
<!-- Path Field -->
<div class="form-group col-sm-12">
    {!! Form::label('path', 'Imágen:') !!}
    {{ Form::select('image_id', $images, null, ['class' => 'form-control']) }}
</div>
<div class="clearfix"></div>

<!-- Row Field -->
<div class="form-group col-sm-12">
    {!! Form::label('row_num', 'Nº Fila:') !!}
    {{ Form::select('row_num', array('1'=>'Primera Fila','2'=>'Segunda Fila','3'=>'Tercera Fila','4'=>'Cuarta Fila','5'=>'Quinta Fila'), null, ['class' => 'form-control']) }}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('imageTitles.index') !!}" class="btn btn-default">Cancelar</a>
</div>
