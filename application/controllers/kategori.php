<?php 

class Kategori extends CI_Controller{

    public function alat_petanian()
    {
        $data['alat_petanian'] = $this->model_kategori->data_alat_petanian()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('alat_petanian', $data);
        $this->load->view('templates/footer');
    }

    public function alat_berkebunan()
    {
        $data['alat_berkebunan'] = $this->model_kategori->data_alat_berkebunan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('alat_berkebunan', $data);
        $this->load->view('templates/footer');
    }
}

?>