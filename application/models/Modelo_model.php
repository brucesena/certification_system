<?php

class Modelo_model extends CI_Model{

	public function listar()
	{
		//var_dump($this->mongo_db); die;
		return $this->mongo_db->get('modelo');
	}


}
