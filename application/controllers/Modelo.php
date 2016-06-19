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
		$this->show('Modelos', 'list');
	}

	public function save()
	{
		if ($this->input->post('button') == 'ok'){
			$data = array();
			$id = $this->input->post('_id');
			$data['nome'] = $this->input->post('nome');
			$data['versao'] = $this->input->post('versao');
			$data['site'] = $this->input->post('site');
			$data['descricao'] = $this->input->post('descricao');
			$this->modelo_model->save($data, $id);	
		}
		redirect('modelo/', 'refresh');
	}


	public function edit($id)
	{
		$this->saida['dados'] = $this->modelo_model->listar($id)[0];
		$this->show('Modelos - Editar', 'edit');
	}

	public function edit_capacidade($id)
	{
		$this->load->model('nivel_capacidade_model');
		$this->saida['niveis']  = $this->nivel_capacidade_model->listar();
		$this->saida['dados'] = $this->modelo_model->listar($id)[0];
		$this->show('Modelos - Editar', 'edit_capacidade');
	}

	public function save_capacidade()
	{

		redirect('modelo/', 'refresh');
	}

	public function delete($id)
	{
		$this->modelo_model->remover($id);
		redirect('modelo/', 'refresh');
	}

	public function add()
	{
		$this->show('Modelos - Adicionar', 'add');
	}

	private function show($titulo, $view)
	{
		$this->load->view('header', array('titulo' => $titulo));
		$this->load->view("modelos/$view", $this->saida);
		$this->load->view('footer');
	}

}
