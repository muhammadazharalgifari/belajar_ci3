<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMahasiswa extends CI_Model {
    public function tampilData() {
        return $this->db->get('mahasiswa');
    }

    public function simpanMahasiswa($data = null) {
        $this->db->insert('mahasiswa', $data);
    }

    function editData($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function updateMahasiswa($where = null, $data = null) {
        $this->db->update('mahasiswa',$data, $where);
    }

    function hapusMahasiswa($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }
}