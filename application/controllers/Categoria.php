<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

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
			$this->load->model('categoria_model');
			$this->saida = array();
		}

		public function index()
		{
			$this->saida['dados']  = $this->categoria_model->listar();
			$this->saida['active'] = 'categoria';
			$this->show('Categoria', 'list');
		}

	public function save()
	{
		if ($this->input->post('button') == 'ok'){
			$data = array();
			$id = $this->input->post('_id');
			$data['nome'] = $this->input->post('nome');			
			$this->categoria_model->save($data, $id);	
		}
		redirect('Categoria/', 'refresh');
	}


	public function edit($id)
	{
		$this->saida['dados'] = $this->categoria_model->listar($id)[0];
		$this->show('Categoria - Editar', 'edit');
	}
	public function delete($id)
	{
		$this->categoria_model->remover($id);
		redirect('categoria/', 'refresh');
	}

	public function add()
	{
		$this->show('Categoria - Adicionar', 'add');
	}

	private function show($titulo, $view)
	{
		$this->load->view('header', array('titulo' => $titulo));
		$this->load->view("categoria/$view", $this->saida);
		$this->load->view('footer');
	}

}
