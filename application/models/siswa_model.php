<?php
	/**
	* 
	*/
	class Siswa_model extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}

		function tampilSiswa(){
			$sql = 'SELECT nis, nama FROM siswa where nis not in(SELECT nis from kelas_siswa)';
			$data = $this->db->query($sql);
			$index = 1;
			foreach ($data->result() as $dataSiswa) {
				$kirimData[$index] = array(
					'nis' => $dataSiswa->nis,
					'nama' => $dataSiswa->nama
					);
				$index++;
			}
			return $kirimData;
		}

		function tampil(){
			$sql = 'SELECT nis, nama, nama_kelas, no_hp_wali FROM siswa join kelas_siswa using(nis) join kelas using (id_kelas)';
			$data = $this->db->query($sql);
			$index = 1;
			if ($data->num_rows()<1) {
				$kirimData = 'kosong';
			}
			else{
				foreach ($data->result() as $dataSiswa) {
					$kirimData[$index] = array(
						'nis' => $dataSiswa->nis,
						'nama' => $dataSiswa->nama,
						'kelas' => $dataSiswa->nama_kelas,
						'no_hp' => $dataSiswa->no_hp_wali
						);
					$index++;
				}
			}
			return $kirimData;
		}

	}
	?>