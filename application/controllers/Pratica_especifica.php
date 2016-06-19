<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pratica_especifica extends CI_Controller {

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

	public function index()
	{
		$this->saida['dados']  = $this->pratica_especifica_model->listar();
                $this->saida['active'] = 'Pratica_especifica';
                $this->show('Pratica_especifica', 'list');
	}

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pratica_especifica_model');
                $this->saida = array();
        }

	public function save()
        {
                if ($this->input->post('button') == 'ok'){
                        $data = array();
                        $id = $this->input->post('_id');
                        $data['nome'] = $this->input->post('nome');
                        $data['sigla'] = $this->input->post('sigla');
                        $data['descricao'] = $this->input->post('descricao');
                        $this->pratica_especifica_model->save($data, $id);
                }
                redirect('Pratica_especifica/', 'refresh');
        }

	public function edit($id)
        {
                $this->saida['dados'] = $this->pratica_especifica_model->listar($id)[0];
                $this->show('Pratica_especifica - Editar', 'edit');
        }

	public function delete($id)
        {
                $this->pratica_especifica_model->remover($id);
                redirect('Pratica_especifica/', 'refresh');
        }

       public function add()
        {
                $this->show('Pratica_especifica - Adicionar', 'add');
        }


	private function show($titulo, $view)
        {
                $this->load->view('header', array('titulo' => $titulo));
                $this->load->view("pratica_especifica/$view", $this->saida);
                $this->load->view('footer');
        }

}
