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
<<<<<<< HEAD
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
=======
>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
			$data = $this->db->query($sql);
			$index = 1;
			foreach ($data->result() as $dataSiswa) {
				$kirimData[$index] = array(
					'nis' => $dataSiswa->nis,
					'nama' => $dataSiswa->nama
					);
				$index++;
<<<<<<< HEAD
=======
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
>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
			}
			return $kirimData;
		}

<<<<<<< HEAD
		function input_kelas($kelas,$nis,$tahun)
		{
			$sql = "INSERT INTO kelas_siswa(nis,id_kelas,id_tahun_ajaran) VALUES ('$nis','$kelas','$tahun')";
			// print_r($sql);
			$this->db->query($sql);
		}
=======
>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
	}
	?>