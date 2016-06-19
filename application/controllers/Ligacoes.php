<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ligacoes extends CI_Controller {

	private $saida;

	public function index()
	{
		$this->show('Ligações entre as tabelas', 'edit');
	}


       private function show($titulo, $view)
        {
                $this->load->view('header', array('titulo' => $titulo));
                $this->load->view("ligacoes/$view", $this->saida);
                $this->load->view('footer');
        }


}
