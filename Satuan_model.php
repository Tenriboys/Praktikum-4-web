<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan_model extends CI_Model {
    public function get_all() {
        return $this->db->get('satuan')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('satuan', ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('satuan', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('satuan', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('satuan');
    }
}