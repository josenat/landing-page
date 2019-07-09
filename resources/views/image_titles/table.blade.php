<div class="table-responsive">
    <table class="table" id="imageTitles-table">
        <thead>
            <tr>
                <th> Fila               </th>
                <th> Título             </th>
                <th> Imágen             </th>
                <th colspan="3"> Acción </th>
            </tr>
        </thead>
        <tbody>
        @foreach($imageTitles as $imageTitle)
            <tr>
                <td>  
                    {!! $imageTitle->row_num !!} 
                </td>
                <td> 
                    {!! substr($imageTitle->title->description, 0, 160) !!}...  
                </td>
                <td> <img src="{{ asset('img/'.$imageTitle->image->path) }}" class="img-responsive" style="width: 150px; height: 85px;" title="{{ $imageTitle->image->path }}">
                </td>
                <td>
                    {!! Form::open(['route' => ['imageTitles.destroy', $imageTitle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('imageTitles.show', [$imageTitle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('imageTitles.edit', [$imageTitle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Está seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
