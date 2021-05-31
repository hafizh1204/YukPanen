<?php

class Model_kategori extends CI_Model{

    public function data_alat_petanian(){
        return $this->db->get_where("tb_barang",array('kategori' => 'alat petanian'));
    }

    public function data_alat_berkebunan(){
        return $this->db->get_where("tb_barang",array('kategori' => 'alat berkebunan'));
    }
}
?>