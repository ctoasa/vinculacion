<table class="table table-responsive" id="tallers-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripcion</th>
        <th>Riesgo</th>
        <th>Imagen</th>
        <th>Video</th>
        <th>Unidad de producción</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tallers as $taller)
        <tr>
            <td>{!! $taller->nombre !!}</td>
            <td>{!! $taller->descripcion !!}</td>
            <td>{!! $taller->riesgo !!}</td>
            <td >
                @if($taller->imagen!=null)
                    <p><img class="img-responsive"  width="20%" height="30%" src="{!! $taller->imagen !!}"/></p></td>
                @else
                    {!! $taller->imagen !!}
                @endif
            <td>{!! $taller->video !!}</td>
            <td>{!! $taller->unidadproduccion->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tallers.destroy', $taller->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tallers.show', [$taller->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tallers.edit', [$taller->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro de eliminar?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>