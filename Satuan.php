<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Satuan_model');
    }

    public function index() {
        $data['satuan'] = $this->Satuan_model->get_all();
        $this->load->view('satuan/index', $data);
    }

    public function add() {
        $this->load->view('satuan/add_form');
    }

    public function save() {
        $data = [
            'name' => $this->input->post('name'),
            'deskripsi' => $this->input->post('deskripsi')
        ];
        $this->Satuan_model->insert($data);
        redirect('satuan');
    }

    public function edit($id) {
        $data['satuan'] = $this->Satuan_model->get_by_id($id);
        $this->load->view('satuan/edit_form', $data);
    }

    public function update($id) {
        $data = [
            'name' => $this->input->post('name'),
            'deskripsi' => $this->input->post('deskripsi')
        ];
        $this->Satuan_model->update($id, $data);
        redirect('satuan');
    }

    public function delete($id) {
        $this->Satuan_model->delete($id);
        redirect('satuan');
    }
}