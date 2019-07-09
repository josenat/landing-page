<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_id', 'Título:') !!}
    {{ Form::select('title_id', $imageTitle, null, ['class' => 'form-control']) }}
</div>
<div class="clearfix"></div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_id', 'Imágen:') !!}
				<div class="table-responsive">
					<table class="table table-striped" id="lista">
						<thead>
							<th>    </th>
							<th>N°  </th>
							<th>Imágen</th>
						</thead>
						@php static $i=0; @endphp
						@foreach($imagenes as $imagen)					
							<tbody>
								<td>
									<input type="radio" name="item" value="{{ $imagen->id }}">
								</td>
								<td>
									@php echo ++$i; @endphp
								</td>
								<td>
									<img src="{{ $imagen->path }}" class="img-responsive"/>
								</td>
							</tbody>
						@endforeach
					</table>
					{{--
				    <div class="col-md-4 col-md-offset-4 column">                                     
				        {{$imagenes->render()}}       
				    </div>	
				    --}}				
				</div>	
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('imageTitles.index') !!}" class="btn btn-default">Cancelar</a>
</div>
