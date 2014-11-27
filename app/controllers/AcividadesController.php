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
}
?>