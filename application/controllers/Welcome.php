<?php

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends REST_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->model('Model_mahasiswa', 'mahasiswa');
    }

	public function index_get()
	{
		$user = $this->mahasiswa->getMahasiswa();

		if (!empty($user))
        {
            $this->set_response($user, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => 'User could not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
	}

	public function index_post(){
		$data = [
            'nama' => $this->post('nama'),
            'stb' => $this->post('stb')
		];
		
		if ($this->mahasiswa->insertMahasiswa($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'new mahasiswa has been created'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to create new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
	}
}