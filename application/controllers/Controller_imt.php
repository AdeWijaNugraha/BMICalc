<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_imt extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$this->load->model('Model_imt');
	}

	public function hitung(){
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$usia = $this->input->post('usia');
		$tbCm = $this->input->post('tb');
		$tb = $tbCm/100;
		$bb = $this->input->post('bb');
		$kondisi = $this->input->post('kondisi');
		// $imt = 0;
		// $bbi = 0;
		// $interpretasi = "";
		// $saran = 0;
		// $sarans = "";

		if ($usia < 18) {
			$param = array(
				'keterangan'	=> "dibawahUmur"
			);
			$this->load->view('imt', $param);
		} else {
			if ($kondisi ==! null) {
				$param = array(
					'keterangan'=> "kondisiTdkBerlaku"
				);
				$this->load->view('imt', $param);
			} else {
				$hasilImt = $bb/($tb*$tb);
				
				$imt = number_format($hasilImt,2);
				if ($imt < 16.00) {
					$interpretasi = "Severe thinness";
					$saran = 1;
				} elseif ($imt < 16.99) {
					$interpretasi = "Moderate thinness";
					$saran = 1;
				} elseif ($imt < 18.49) {
					$interpretasi = "Mild thinness";
					$saran = 1;
				} elseif ($imt < 25.99) {
					$interpretasi = "Normal Range";
					$saran = 2;
				} elseif ($imt < 29.99) {
					$interpretasi = "Pre Obese";
					$saran = 3;
				} elseif ($imt < 34.99) {
					$interpretasi = "Obese Class I";
					$saran = 3;
				} elseif ($imt < 39.99) {
					$interpretasi = "Obese Class II";
					$saran = 3;
				} elseif ($imt > 40.00) {
					$interpretasi = "Obese Class III";
					$saran = 3;
				}

				if ($jk == "L" && $tbCm < 160 || $jk == "P" && $tbCm < 150) {
					$bbi = ($tbCm - 100);
				} else {
					$bbi = ($tbCm - 100) - (10/100*($tbCm - 100));
				}
			}
		}

		

		if ($usia < 18) {
		} else {
			if ($kondisi ==! null) {
			} else {
				$data = array(
					'nama'			=> $nama,
					'jenis_kelamin'	=> $jk,
					'usia'			=> $usia,
					'tinggi'		=> $tb,
					'berat'			=> $bb,
					'imt'			=> $imt,
					'bbi'			=> $bbi,
					'interpretasi'	=> $interpretasi,
					'saran'			=> $saran,
				);
				$this->Model_imt->simpanData($data, "user");

				if ($saran == 1) {
					$sarans = "Indeks massa tubuh Anda bernilai ".$imt.", IMT tersebut tergolong dalam kelas ".$interpretasi." dan termasuk dalam kategori kurus. Makan secara teratur dengan gizi seimbang dan lebih banyak dari biasanya. Tidak lupa olahraga yang teratur. Berat badan ideal Anda adalah ".$bbi.".";
				} elseif ($saran == 2) {
					$sarans = "Indeks massa tubuh Anda bernilai ".$imt.", IMT tersebut tergolong dalam kelas ".$interpretasi." dan termasuk dalam kategori normal. Pertahankan kebiasaan makan sehari-hari dengan susunan menu gizi seimbang, pertahankan kebiasaan olahraga yang teratur dan tetap melakukan kebiasaan fisik setiap hari. Berat badan ideal Anda adalah ".$bbi.".";
				} elseif ($saran == 3) {
					$sarans = "Indeks massa tubuh Anda bernilai ".$imt.", IMT tersebut tergolong dalam kelas ".$interpretasi." dan termasuk dalam kategori gemuk. Makan secara teratur dengan gizi seimbang dan jumlahnya kurang dari biasanya. Tidak lupa olahraga yang teratur juga. Berat badan ideal Anda adalah ".$bbi.".";
				}

				$param = array(
					'keterangan'	=> $sarans
				);
				$this->load->view('imt', $param);
			}
		}
	}

	public function about(){
		$this->load->view('about');
	}

	public function statistik(){
		$data = $this->Model_imt->ambilInterpretasi();
		$jumlah = $this->Model_imt->jumlahData();
		$param = array(
			'result' 	=> $data,
			'jumlah'	=> $jumlah,
		);
		$this->load->view('statistik', $param);
	}
}