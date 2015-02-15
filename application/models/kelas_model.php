<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Kelas_model extends CI_Model {
	
		public function tampil()
		{
			$sql = 'SELECT * FROM kelas';
			$data = $this->db->query($sql);
			$index = 1;
			foreach ($data->result() as $row) {
				$dataKelas[$index] = array('id_kelas' => $row->id_kelas , 'nama_kelas' => $row->nama_kelas );
				$index++;
			}
			return $dataKelas;
		}

		public function tampilSemester()
		{
			$sql = 'SELECT * FROM tahunajaran';
			$data = $this->db->query($sql);
			$index = 1;
			foreach ($data->result() as $row) {
				$dataSemester[$index] = array('id_tahun_ajaran' =>$row->id_tahun_ajaran,
								'awal_semester' =>$row->awal_semester ,
								'akhir_semester'=> $row->akhir_semester,
								'tahun_ajaran'=>$row->tahun_ajaran,
								'jenis'=>$row->jenis,
								'nama_semester'=>$row->nama_semester );
				$index++;
			}
			return $dataSemester;
		}


		function input_kelas($kelas,$nis,$tahun)
		{
			$sql = "INSERT INTO kelas_siswa(nis,id_kelas,id_tahun_ajaran) VALUES ('$nis','$kelas','$tahun')";
			// print_r($sql);
			$this->db->query($sql);
		}

		public function tambah_semester($dataSemester)
		{
			$this->db->insert('tahunajaran', $dataSemester);
		}
	
	}
	
	/* End of file kelas_model.php */
	/* Location: ./application/models/kelas_model.php */
?>