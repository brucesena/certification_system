<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_trabalho extends CI_Controller {

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
			$this->load->model('produto_trabalho_model');
			$this->saida = array();
		}

		public function index()
		{
			$this->saida['dados']  = $this->produto_trabalho_model->listar();
			$this->saida['active'] = 'produto_trabalho';
			$this->show('Produto de trabalho', 'list');
		}

	public function save()
	{
		if ($this->input->post('button') == 'ok'){
			$data = array();
			$id = $this->input->post('_id');
			$data['nome'] = $this->input->post('nome');
			$data['template'] = $this->input->post('template');			
			$this->produto_trabalho_model->save($data, $id);	
		}
		redirect('Produto_trabalho/', 'refresh');
	}


	public function edit($id)
	{
		$this->saida['dados'] = $this->produto_trabalho_model->listar($id)[0];
		$this->show('Produto de trabalho - Editar', 'edit');
	}
	public function delete($id)
	{
		$this->produto_trabalho_model->remover($id);
		redirect('produto_trabalho/', 'refresh');
	}

	public function add()
	{
		$this->show('Produto de trabalho - Adicionar', 'add');
	}

	private function show($titulo, $view)
	{
		$this->load->view('header', array('titulo' => $titulo));
		$this->load->view("produto_trabalho/$view", $this->saida);
		$this->load->view('footer');
	}

}
