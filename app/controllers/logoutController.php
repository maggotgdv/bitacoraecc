<?php

class logoutController extends BaseController
{
	public function getIndex() 
	{
		
		if(Session::get('logeado')==1)
		{
			Session::flush();
		 	return Redirect::to('http://bitacoraecc.herokuapp.com/');
		}
		else
		{
			return Redirect::to('http://bitacoraecc.herokuapp.com/');
		}
	}
}
?>