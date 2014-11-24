<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//Usuario
		DB::table('categorias')->insert(array('nomusu'=>'Ernesto', 'apllusu'=>'Calderon', 'tipousu'=>1,'carrusu'=> 'Ingenieria de Software', 'aptousu'=>true,'matusu'=>'2010200521'));
		DB::table('categorias')->insert(array('nomusu'=>'Juan', 'apllusu'=>'Tragocamote', 'tipousu'=>1,'carrusu'=> 'Medicina', 'aptousu'=>false,'matusu'=>'2012224589'));
		
	}

}
