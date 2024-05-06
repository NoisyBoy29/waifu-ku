<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_welcome','model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($kode = FALSE)
	{
        if ($kode === FALSE){
            $data['hasil'] = $this->model->read();
		    $this->load->view('table', $data);
        }else{
            $data['waifu'] = $this->model->read($kode);
		    $this->load->view('view', $data);
        }
	}

	public function create() 
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required');
    $this->form_validation->set_rules('stock', 'Stock', 'required');
	$this->form_validation->set_rules('jenis', 'Jenis', 'required');
	$this->form_validation->set_rules('asal', 'asal', 'required');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('create');
    } else {
		$nama = $this->input->post('nama');
        $config['upload_path'] = './asset/images';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '1000000';
        $config['file_ext_tolower'] = TRUE;
        $config['file_name'] = str_replace('.','_',$nama);

        $this->load->library('upload', $config);

		if  (!$this->upload->do_upload('image')){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			$this->load->view('create');
		}else{
			$filename = $this->upload->data('file_name');
			$this->model->create($filename);
			redirect();
		}
    }
}

	public function update($kode)
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required');
    $this->form_validation->set_rules('stock', 'Stock', 'required');
	$this->form_validation->set_rules('jenis', 'Jenis', 'required');
	$this->form_validation->set_rules('asal', 'asal', 'required');

    if ($this->form_validation->run() == FALSE) {
        $data['waifu'] = $this->model->read($kode);
        $this->load->view('update', $data);
    } else {
        if (!empty($_FILES['image']['name'])) { 
            $post = $this->model->read($kode);
            $config['upload_path'] = './asset/images'; 
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '1000000';
            $config['file_ext_tolower'] = TRUE;
            $config['overwrite'] = TRUE; 
            $config['file_name'] = $post->gambar;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                echo '<script>console.log("eror");</script>';
            } else {
                $this->model->update($kode);
				echo '<script>console.log("Upload successful");</script>';
                redirect();
            }
        } else {
            $this->model->update($kode);
			echo '<script>console.log("No image uploaded");</script>';
            redirect();
        }
    }
}

	public function delete($kode = FALSE){
		$post = $this->model->read($kode);
		$this->model->delete($kode);

		unlink('./asset/images/'. $post->gambar);
		redirect();
	}
}
