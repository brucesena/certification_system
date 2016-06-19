<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nivel_capacidade extends CI_Controller {

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
		$this->load->model('nivel_capacidade_model');
		$this->saida = array();
	}

	public function index()
	{
		$this->saida['dados']  = $this->nivel_capacidade_model->listar();
		$this->saida['active'] = 'Nivel_capacidade';
		$this->show('Nível capacidade', 'list');
	}

	public function save()
	{
		if ($this->input->post('button') == 'ok'){
			$data = array();
			$id = $this->input->post('_id');
			$data['nome'] = $this->input->post('nome');
			$data['sigla'] = $this->input->post('sigla');
			$data['descricao'] = $this->input->post('descricao');
			$this->nivel_capacidade_model->save($data, $id);	
		}
		redirect('nivel_capacidade/', 'refresh');
	}


	public function edit($id)
	{
		$this->saida['dados'] = $this->nivel_capacidade_model->listar($id)[0];
		$this->show('Nível capacidade - Editar', 'edit');
	}
	public function delete($id)
	{
		$this->nivel_capacidade_model->remover($id);
		redirect('nivel_capacidade/', 'refresh');
	}

	public function add()
	{
		$this->show('Nível Capacidade - Adicionar', 'add');
	}

	private function show($titulo, $view)
	{
		$this->load->view('header', array('titulo' => $titulo));
		$this->load->view("nivel capacidade/$view", $this->saida);
		$this->load->view('footer');
	}

}
