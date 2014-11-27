<?php

class ActividadesController extends BaseController
{
	public function _construct()
	{
	  $this->beforeFilter('csr',array('on'=>'post'));
	}

	public function getIndex() 
	{
		if(Session::get('logeado')==1)
		{
		 	return View::make('actividades.index')->with('actividades',Actividad::all());
		}
		else
		{
			return Redirect::to('http://bitacoraecc.herokuapp.com/');
		}
	}
	public function postSearch()
	{
		$buscar = Input::get('Buscar');
		$resultados = Actividad::all()->whereRaw('lower(T002ACTIVIDAD."nomact") like lower(?) or lower(T002ACTIVIDAD."fechact") like lower(?) or lower(T002ACTIVIDAD."costoact") like lower(?) or lower(T002ACTIVIDAD."descact") like lower(?) or lower(T002ACTIVIDAD."respact") like lower(?) ',array("%$buscar%","%$buscar%","%$buscar%","%$buscar%","%$buscar%"))->get();
		return View::make('actividades.index')->with('actividades',$resultados);
	}
}
?>