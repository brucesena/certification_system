<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nivel_maturidade extends CI_Controller {

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
		$this->load->model('nivel_maturidade_model');
		$this->saida = array();
	}

	public function index()
	{
		$this->saida['dados']  = $this->nivel_maturidade_model->listar();
		$this->saida['active'] = 'nivel_maturidade';
		$this->show('Nível de maturidade', 'list');
	}

	public function save()
	{
		if ($this->input->post('button') == 'ok'){
			$data = array();
			$id = $this->input->post('_id');
			$data['sigla'] = $this->input->post('sigla');
			$data['nome'] = $this->input->post('nome');
			$data['descricao'] = $this->input->post('descricao');
			$this->nivel_maturidade_model->save($data, $id);	
		}
		redirect('nivel_maturidade/', 'refresh');
	}


	public function edit($id)
	{
		$this->saida['dados'] = $this->modelo_model->listar($id)[0];
		$this->show('Nível de maturidade - Editar', 'edit');
	}
	public function delete($id)
	{
		$this->modelo_model->remover($id);
		redirect('nivel_maturidade/', 'refresh');
	}

	public function add()
	{
		$this->show('Nível de maturidade - Adicionar', 'add');
	}

	private function show($titulo, $view)
	{
		$this->load->view('header', array('titulo' => $titulo));
		$this->load->view("nivel_maturidade/$view", $this->saida);
		$this->load->view('footer');
	}

}
