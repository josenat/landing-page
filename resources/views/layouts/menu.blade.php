<li class="{{ Request::is('titles*') ? 'active' : '' }}">
    <a href="{!! route('titles.index') !!}"><i class="fa fa-edit"></i><span>Títulos</span></a>
</li>

<li class="{{ Request::is('images*') ? 'active' : '' }}">
    <a href="{!! route('images.index') !!}"><i class="fa fa-edit"></i><span>Imágenes</span></a>
</li>

<li class="{{ Request::is('imageTitles*') ? 'active' : '' }}">
    <a href="{!! route('imageTitles.index') !!}"><i class="fa fa-edit"></i><span>Catálogo</span></a>
</li>

<li class="">
    <a href="{!! url('index') !!}"><i class="fa fa-edit"></i><span>Landing Page</span></a>
</li>
