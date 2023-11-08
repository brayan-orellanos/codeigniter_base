<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class Inicio extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('InicioModel', 'model');
	}


	public function index()
	{
		$data['path_add'] = site_url('inicio/add');
		$data['index'] = site_url('inicio');

		$this->load->view('inicio', $data);
	}

	public function add ()
	{
		$params = $this->security->xss_clean($this->input->post());

		if($params) {
			$data = $this->model->add($params);

			echo json_encode($data);
			exit();
		}
		else {
			echo json_encode(array('value' => FALSE, 'message' => 'Parametros invalidos'));
			exit();
		}

	}
}
