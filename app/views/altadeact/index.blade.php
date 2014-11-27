@extends("layout.index")
@section("contenido")

    {{Form::open(array('url'=>'dardealta/create', 'files'=>true))}}
    <font face="Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif" color="#FFFFFF" size="+1">
    <table width="524" height="516" border="0" align="center">
      <tbody>
        <tr>
          <td height="73" colspan="2"><div align="center"><font face="Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif" color="#FFFFFF" size="+2">Login</font></div></td>
        </tr>
        <tr>
          <td width="258" height="59"><div align="center">Nombre</div></td>
          <td width="259">{{ Form::text('nomact', 'Nombre', ['class'=>'textbox','size'=>'37']); }}</td>
        </tr>
        <tr>
          <td width="258" height="63"><div align="center">Fecha</div></td>
          <td width="259">{{ Form::date('fechact', 'fecha', ['class'=>'textbox','size'=>'37']); }}</td>
        </tr>
        <tr>
          <td width="258" height="64"><div align="center">Costo</div></td>
          <td width="259">{{ Form::text('costoact', 'Costo', ['class'=>'textbox','size'=>'37']); }}</td>
        </tr>
        <tr>
          <td width="258" height="61"><div align="center">Descipci&oacute;n</div></td>
          <td width="259">{{ Form::text('descact', 'Descripci&oacute;n', ['class'=>'textbox','size'=>'37']); }}</td>
        </tr>
        <tr>
          <td width="258" height="70"><div align="center">Evidencia</div></td>
          <td width="259">{{Form::file('evidenact')}}</td>
        </tr>
        <tr>
          <td width="258" height="47"><div align="center">Programada</div></td>
          <td width="259"><div align="center">{{ Form::checkbox('programact', 1, true) }}</div></td>
        </tr>
        <tr>
          <td width="258" height="61"><div align="center">Responsable</div></td>
          <td width="259">{{ Form::text('respact', 'Responsable', ['class'=>'textbox','size'=>'37']); }}</td>
        </tr>
        <tr>
          <td height="61" align="center">{{Form::submit('Aceptar', array('class'=>'button'))}}</td>
          <td height="61" align="right"><a href="dardealta/index" class="button">Cancelar</a></td>
        </tr>
      </tbody>
    </table>
    </font>
    {{Form::close()}}

@stop