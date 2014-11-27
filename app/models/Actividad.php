<?php 

	class Actividad extends Eloquent{

		protected $table = "T002ACTIVIDAD";
		public $timestamp = false;
		public static $rules = array('evidenact' => 'required|mimes:jpeg,jpg,bmp,png,gif');

		}

?>