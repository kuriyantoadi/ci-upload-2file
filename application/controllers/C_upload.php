<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_upload extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->helper(array('form', 'url'));
      $this->load->database();
  }

	public function index()
	{
    $data['error'] = "";
    $data['result'] = $this->db->order_by('id_upload','DESC')
                              ->get('upload')
                              ->result();

		$this->load->view('upload',$data);
    $this->load->view('lihat',$data);
	}

}
