	public function save()
	{
		if ($this->input->post('button') == 'ok'){
			$data = array();
			$id = $this->input->post('_id');
			$data['nome'] = $this->input->post('nome');
			$data['sigla'] = $this->input->post('sigla');
			$data['descricao'] = $this->input->post('descricao');
			$this->modelo_model->save($data, $id);	
		}
		redirect('meta_generica/', 'refresh');
	}


	public function edit($id)
	{
		$this->saida['dados'] = $this->meta_generica_model->listar($id)[0];
		$this->show('Meta Genérica - Editar', 'edit');
	}
	public function delete($id)
	{
		$this-> meta_generica_model->remover($id);
		redirect('meta_generica/', 'refresh');
	}

	public function add()
	{
		$this->show('Meta Genérica - Adicionar', 'add');
	}


	private function show($titulo, $view)
	{
		$this->load->view('header', array('titulo' => $titulo));
		$this->load->view("metas_genericas/$view", $this->saida);
		$this->load->view('footer');
	}
}