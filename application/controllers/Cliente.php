<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cliente extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produto_model');
	}

	public function index()
	{
		/*$data['produtos'] = $this->Produto_model->get_all_products(); // Buscando todos os produtos
											$this->load->view('clientePaginaPrincipal', $data); // Carregando a view*/

		$id_usuario = $this->session->userdata('id_usuario');
		$data['produtos'] = $this->Produto_model->get_all_products();
		$data['tipo_acesso'] = $this->session->userdata('tipo_acesso');
		$data['homeUrl'] = '/';
		$data['nome_usuario'] = $this->session->userdata('nome_usuario');

		$data['conteudo'] = $this->load->view('clientePaginaPrincipal', $data, TRUE);

		$this->load->view('template/index', $data);
	}

	public function comprar_produto()
	{
		$id_produto = $this->input->post('id_produto');
		$quantidade = $this->input->post('quantidade');

		$produto = $this->Produto_model->get_product_by_id($id_produto);

		if ($quantidade <= $produto->estoque) {
			// Lógica para processar a compra
			// Reduzir a quantidade no estoque e salvar a compra no banco de dados
			$novo_estoque = $produto->estoque - $quantidade;
			$this->Produto_model->update_estoque($id_produto, $novo_estoque);
			// Código para registrar a compra
			$this->session->set_flashdata('success', 'Compra realizada com sucesso!');
		} else {
			$this->session->set_flashdata('error', 'Quantidade solicitada maior que o estoque disponível.');
		}

		redirect('cliente');
	}

	// Controller: Cliente.php



}
