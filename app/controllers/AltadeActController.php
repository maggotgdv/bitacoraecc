<?php

class AltadeActController extends BaseController
{
	public function _construct()
	{
	  $this->beforeFilter('csr',array('on'=>'post'));
	}

	public function getIndex() 
	{
		 return View::make('altadeact.index');
	}

	public function postCreate()
	 {
	  $destinationPath = 'public/img/';
	  $filename        = '';
	  $validator = Validator::make(Input::all(), Actividad::$rules);
	  if($validator->passes())
	  { 
	   $actividad = new Actividad;
	   $actividad->nomact = Input::get('nomact');
	   $actividad->fechact = Input::get('fechact');
	   $actividad->costoact = Input::get('costoact');
	   $actividad->descact = Input::get('descact');
	   $actividad->programact = Input::get('programact');
	   $actividad->respact = Input::get('respact');
	   if (Input::hasFile('evidenact')) 
	   {
	          $file            = Input::file('evidenact');
	          $filename        = date('Y-m-d-h-i-s').'-'. $file->getClientOriginalName();
	          $uploadSuccess   = $file->move($destinationPath, $filename);
	      }
	      $actividad->evidenact = "img/".$filename;
	      $actividad->save();


	   return Redirect::to('http://www.bitacora.naposac.com/subir/'.$file);
	  }
	  return Redirect::to('dardealta/index')
	   ->with('mesage','algo esta mal')
	   ->withErrors($validator)
	   ->withInput();
	 }
		
	}

?>