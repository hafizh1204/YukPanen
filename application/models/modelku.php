<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_Controller {
    // public function getData($tabel){
    //     $datanih = $this->db->query("SELECT * FROM ".$tabel);
    //     return $datanih->result_array();    
    //     }

    //query builder, pakek
    public function getData($tabel){
        $syai = $this->db->get($tabel);
        return $syai->result_array();
    }

    public function masukkan($tabel){
        $syai = $this->db->insert($tabel, $data);
        return $syai;
    }

    public function perbarui($tabel, $data, $where){
        $syai = $this->db->update($tabel, $data, $where);
        return $syai;
    }

    public function hapus($tabel, $where){
        $syai = $this->db->delete($tabel, $where);
        return $syai;
    }
    }

