<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_upload_gambar extends CI_Controller {

public function do_upload()
{

  $keterangan = $this->input->post('keterangan');
  $nama_file1 = $_FILES['nama_file1'];
  $nama_file2 = $_FILES['nama_file2'];

//upload nama_file1
  if ($nama_file1=='') {
  }else {
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 1000;
    $config['encrypt_name']	= TRUE;

    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('nama_file1')) {
      // $error = array('error' => $this->upload->display_errors());
      // $this->load->view('upload', $error);
    }else {
      $nama_file1_up = array('upload_data' => $this->upload->data());
    }


    //upload nama_file2
    if ($nama_file2=='') {
    }else {
      $config['upload_path'] = './gambar/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = 1000;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('nama_file2')) {
        // $error = array('error' => $this->upload->display_errors());
        // $this->load->view('upload', $error);
      }else {
        $nama_file2_up = array('upload_data' => $this->upload->data());
      }

//upload data ke dataase
    $data = array(
      'keterangan'=>$this->input->post('keterangan'),
      'nama_file1'=> $nama_file1_up['upload_data']['file_name'],
      'nama_file2'=> $nama_file2_up['upload_data']['file_name']
    );

    $query = $this->db->insert('upload', $data);

    if ($query) {
      echo 'berhasil diupload';
      redirect('C_upload');
    }else {
      echo 'gagal upload';
    }


  }

  }


}

public function hapus($id_upload)
{
    $_id = $this->db->get_where('upload',['id_upload' => $id_upload])->row();
    $query = $this->db->delete('upload', ['id_upload' => $id_upload]);
    if ($query) {
      unlink('gambar/'.$_id->nama_file);
    }
    redirect('C_upload');
}

// public function index()
// {
//   $this->load->view('lihat');
// }

}
