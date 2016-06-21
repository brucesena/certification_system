<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_usuario extends CI_Controller {

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
		$this->load->model('cadastro_usuario_model');
		$this->saida = array();
	}

	public function index()
	{
		$this->saida['dados']  = $this->cadastro_usuario_model->listar();
		$this->saida['active'] = 'cadastro_usuario';
		$this->show('Cadastro de Usuário', 'list');
	}

	public function save()
	{
		if ($this->input->post('button') == 'ok'){
			$data = array();
			$id = $this->input->post('_id');
			$data['nome'] = $this->input->post('nome');
			$data['email'] = $this->input->post('email');
			$data['senha'] = $this->input->post('senha');
			$this->cadastro_usuario_model->save($data, $id);	
		}
		redirect('cadastro_usuario/', 'refresh');
	}


	public function edit($id)
	{
		$this->saida['dados'] = $this->cadastro_usuario_model->listar($id)[0];
		$this->show('Cadastro de Usuário - Editar', 'edit');
	}
	public function delete($id)
	{
		$this->cadastro_usuario_model->remover($id);
		redirect('cadastro_usuario/', 'refresh');
	}

	public function add()
	{
		$this->show('Cadastro de Usuário - Adicionar', 'add');
	}

	private function show($titulo, $view)
	{
		$this->load->view('header', array('titulo' => $titulo));
		$this->load->view("cadastro_usuario/$view", $this->saida);
		$this->load->view('footer');
	}

}
