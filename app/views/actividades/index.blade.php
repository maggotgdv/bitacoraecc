 @extends("layout.index")
@section("contenido")
 <div align="center"><font face="Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif" color="#FFFFFF" size="+2">
    Nombre: </font>
    {{Form::open(array('url'=>'actividad/search', 'files'=>true))}}
    {{ Form::text('Buscar', 'Buscar', ['class'=>'textbox','size'=>'35']) }}
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
    {{Form::submit('Buscar', array('class'=>'button','size'=>'20'))}}
    {{Form::close()}}
    </div>
    <br><br><br>
    <font face="Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif" color="#FFFFFF" size="+1">
<table width="1204" height="181" border="1" align="center" bordercolor="#FFFFFF">
  <tbody>
    <tr align="center" bgcolor="3C9137">
      <th width="190" height="45" scope="col" align="center" ><div align="center">Nombre</div></th>
      <th width="190" scope="col" align="center"><div align="center">Fecha</div></th>
      <th width="190" scope="col" align="center"><div align="center">Costo</div></th>
      <th width="190" scope="col" align="center"><div align="center">Descripción</div></th>
      <th width="190" scope="col" align="center"><div align="center">Evidencia</div></th>
      <th width="190" scope="col" align="center"><div align="center">Programada</div></th>
      <th width="190" scope="col" align="center"><div align="center">Resposable</div></th>
    </tr>
    @foreach ($actividades as $actividad)  
    <tr>
      <td>{{$actividad->nomact}}</td>
      <td>{{$actividad->fechact}}</td>
      <td>{{$actividad->costoact}}</td>
      <td>{{$actividad->descact}}</td>
      <td>{{HTML::image($actividad->evidenact,$actividad->nomact, array('height'=>'100'))}}</td>
      <td>{{$actividad->programact}}</td>
      <td>{{$actividad->respact}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</font>
@stop