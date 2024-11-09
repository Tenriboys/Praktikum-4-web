<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kustomer extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
        $this->load->model("Kustomer_model");
        $this->load->library("form_validation");
    }
    public function index()
    {
        $data= array(
            'title'=> 'View Data Kustomer',
            'userlog'=> infoLogin(),
            'kustomer'=> $this->Kustomer_model->getAll(),
			'content'=> 'kustomer/index'// huruf k harus sesusuai $Kustomer
		);
		$this->load->view('template/main',$data);
	}
    public function add()
    {
        $data= array(
            'title'=> 'Tambah Data Kustomer',
			'content'=> 'Kustomer/add_form'
		);
		$this->load->view('template/main',$data);
	}
    public function laporan()
    {
        $data= array(
            'title'=> 'Tambah Laporan Data Kustomer',
			'content'=> 'kustomer/laporan'
		);
		$this->load->view('template/main',$data);
    }
    public function save()
    {
        $this->Kustomer_model->Save();
        if ($this->db->affected_rows()>0){
            $this->session->set_flashdata("success","Data user Berhasil Disimpan");
        }
        redirect('kustomer');
	}
    public function getedit($id)
    {
        $data= array(
            'title'=> 'Update Data Kategori',
            'kategori'=> $this->Kategori_model->getByid($id),
			'content'=> 'kategori/edit_form'
		);
		$this->load->view('template/main',$data);
	}
    public function edit()
    {
        $this->Kategori_model->editData();
        if ($this->db->affected_rows()>0){
            $this->session->set_flashdata("success","Data user Berhasil update");
        }
        redirect('kategori');
	}

    function delete($id)
    {
        // Menghapus data user berdasarkan ID
        $this->Kategori_model->delete($id);
        redirect('kategori');
    }
}