<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_utama extends CI_Controller {

	public function index()
	{

        // $this->load->model('modelku');
        // $dataMhs = $this->modelku->getData("Mhs");
        // // $data2 = array(
		// // 	'nama' => $nama
		// // );
        
        // $data2 = array(
        //     'data' => $dataMhs
        // );
        // $this->load->view('Home', $data2);
		$this->load->model('modelku');
		$dataMhs = $this->modelku->getData("mhs");
		// $dataPeg = $this->modelku->getData("pegawai");
		$data = array(
			"dataMu" => $dataMhs
			// "dataPegawai" => $dataPeg
		);

		$this->load->View("home", $data);
        
    }

	// public function fungsi(){
	// 	// echo "Hello Dunia";
	// 	$this->load->view('Home');
	// }

	// public function param($nama){
	// 	// echo "Selamat Datang kepada ".$nama;
	// 	$data2 = array(
	// 		'nama' => $nama
	// 	);
	// 	$this->load->view('Home', $data2);
	// }
}
