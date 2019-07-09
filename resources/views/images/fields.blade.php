<!-- Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('path', 'Archivo:') !!}
    {!! Form::file('path') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('images.index') !!}" class="btn btn-default">Cancelar</a>
</div>
