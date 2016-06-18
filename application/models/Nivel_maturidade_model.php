<?php

class Nivel_maturidade_model extends CI_Model{

	public function listar($id = null)
	{
		if (!is_null($id)){
			$mongo_id = new MongoId($id);
	    		$criteria = array('_id' => $mongo_id);
			return $this->mongo_db->where($criteria)->get('nivel_maturidade');
		}else{	
			return $this->mongo_db->get('nivel_maturidade');
		}
	}

	public function save($data, $id = null)
	{
		$collection = $this->mongo_db->db->selectCollection('nivel_maturidade');
		$mongo_id = new MongoId($id);
	    	$criteria = array('_id' => $mongo_id);
	        $update = array('$set' => $data);
		$collection->update($criteria, $update, array('upsert' => true));
	}

	public function remover($id)
	{
		$mongo_id = new MongoId($id);
	    	$criteria = array('_id' => $mongo_id);
		$this->mongo_db->where($criteria)->delete('nivel_maturidade');
	}

}
