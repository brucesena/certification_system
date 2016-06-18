<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metas_genericas extends CI_Controller {

        /**
         * Index Page for this controller.
         *
         * Maps to the following URL
         *              http://example.com/index.php/welcome
         *      - or -
         *              http://example.com/index.php/welcome/index
         *      - or -
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
                $this->load->model('metas_genericas_model');
                $this->saida = array();
        }

        public function index()
        {
                $this->saida['dados']  = $this->metas_genericas_model->listar();
                $this->saida['active'] = 'metas_genericas';
                $this->show('Metas genéricas', 'list');
        }



	public function save()
	{
		if ($this->input->post('button') == 'ok'){
			$data = array();
			$id = $this->input->post('_id');
			$data['nome'] = $this->input->post('nome');
			$data['sigla'] = $this->input->post('sigla');
			$data['descricao'] = $this->input->post('descricao');
			$this->metas_genericas_model->save($data, $id);	
		}
		redirect('metas_genericas/', 'refresh');
	}


	public function edit($id)
	{
		$this->saida['dados'] = $this->meta_generica_model->listar($id)[0];
		$this->show('Meta Genérica - Editar', 'edit');
	}
	public function delete($id)
	{
		$this-> meta_generica_model->remover($id);
		redirect('metas_genericas/', 'refresh');
	}

	public function add()
	{
		$this->show('Meta Genérica - Adicionar', 'add');
	}


	private function show($titulo, $view)
	{
		$this->load->view('header', array('titulo' => $titulo));
		$this->load->view("meta_generica/$view", $this->saida);
		$this->load->view('footer');
	}
}
