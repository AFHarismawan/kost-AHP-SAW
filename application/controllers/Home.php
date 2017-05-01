<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('index');
		$this->load->view('include/footer');
	}
	public function data_kriteria_dan_bobot()
	{
		$data = $this->M_kriteria->getData();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('data_kriteria_dan_bobot', array('data' => $data));
		$this->load->view('include/footer');
	}
	public function perangkingan_enam_kriteria()
	{
		$data = $this->M_kriteria->getData6Kriteria();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('perangkingan_enam_kriteria', array('data' => $data));
		$this->load->view('include/footer');
	}
	public function perangkingan_lima_kriteria()
	{
		$data = $this->M_kriteria->getData6Kriteria();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('perangkingan_lima_kriteria', array('data' => $data));
		$this->load->view('include/footer');
	}
	public function perangkingan_empat_kriteria()
	{
		$data = $this->M_kriteria->getData6Kriteria();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('perangkingan_empat_kriteria', array('data' => $data));
		$this->load->view('include/footer');
	}
	public function perangkingan_tiga_kriteria()
	{
		$data = $this->M_kriteria->getData6Kriteria();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('perangkingan_tiga_kriteria', array('data' => $data));
		$this->load->view('include/footer');
	}
	public function perangkingan_dua_kriteria()
	{
		$data = $this->M_kriteria->getData6Kriteria();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('perangkingan_dua_kriteria', array('data' => $data));
		$this->load->view('include/footer');
	}
	public function perangkingan_satu_kriteria()
	{
		$data = $this->M_kriteria->getData6Kriteria();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('perangkingan_satu_kriteria', array('data' => $data));
		$this->load->view('include/footer');
	}
	public function perangkingan()
	{
		$data = $this->M_nilai_prefensi->getDataCampuran();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('perangkingan', array('data' => $data));
		$this->load->view('include/footer');
	}
	public function perhitungan()
	{
		$data = $this->M_Bobot->getData();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('perhitungan', array('data' => $data));
		$this->load->view('include/footer');
	}
	public function tingkat_akurasi()
	{
		$data = $this->M_Bobot->getData();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('tingkat_akurasi', array('data' => $data));
		$this->load->view('include/footer');
	}
		public function data_bobot()
	{
		$data = $this->M_Bobot->getData();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('data_bobot', array('data' => $data));
		$this->load->view('include/footer');
	}
	public function perhitungan_SAW()
	{
		$data['kriteria'] = $this->M_kriteria->getData();
		$data['bobot_prioritas'] = $this->M_Bobot_Prioritas->getData();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('perhitungan_SAW', $data);
		$this->load->view('include/footer');
	}
	public function rangking_cowok()
	{
		$data = $this->M_nilai_prefensi->getDataCowok();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('rangking_cowok', array('data' => $data));
		$this->load->view('include/footer');
	}
	public function rangking_cewek()
	{
		$data = $this->M_nilai_prefensi->getDataCewek();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('rangking_cewek', array('data' => $data));
		$this->load->view('include/footer');
	}
	public function simpanbobot()
	{
	$bobot1= $_POST['bobot_k1'];
	$bobot2= $_POST['bobot_k2'];
	$bobot3= $_POST['bobot_k3'];
	$bobot4= $_POST['bobot_k4'];
	$bobot5= $_POST['bobot_k5'];
	$bobot6= $_POST['bobot_k6'];
	$bobot7= $_POST['bobot_k7'];
	$data = array(
		'k1'=>$bobot1,
		'k2'=>$bobot2,
		'k3'=>$bobot3,
		'k4'=>$bobot4,
		'k5'=>$bobot5,
		'k6'=>$bobot6,
		'k7'=>$bobot7
		);
	$res = $this->M_Bobot->insertData('bobot_prioritas',$data);
	redirect('Home/perhitungan_SAW');


	//echo $bobot;
	}

	public function simpanPreferensi()
	{
	$arrayNama = array();
	$arrayNilai = array();
	$nama = $_POST['nama'];
	$nilai_preferensi = $_POST['nilai_preferensi'];
	$arrayNama = explode(",", $nama);
	$arrayNilai = explode(",", $nilai_preferensi);
	 for ($i=0; $i <count($arrayNama); $i++) { 
	 	$data = array(
	 		'id' => $i+1,
	  		'nama'=>$arrayNama[$i],
	 		'nilai_preferensi'=>$arrayNilai[$i]
	  	);

	  $res = $this->M_Bobot->insertData('nilai_prefensi',$data);
	 }
	  redirect('Home/perangkingan');
	 }
}
