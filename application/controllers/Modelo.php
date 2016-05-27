<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	private $saida;


	public function __construct()
        {
		parent::__construct();
		$this->load->model('modelo_model');
		$this->saida = array();
	}

	public function index()
	{
		$this->saida['dados']  = $this->modelo_model->listar();
		$this->saida['active'] = 'modelos';
		$this->show('Modelos');
	}

	public function edit($id)
	{


	}
	public function deletar($id)
	{


	}

	public function add($id)
	{


	}

	public function save($id)
	{


	}

	private function show($titulo)
	{
		$this->load->view('header', array('titulo' => 'Modelos'));
		$this->load->view('modelos/listar', $this->saida);
		$this->load->view('footer');
	}

}
