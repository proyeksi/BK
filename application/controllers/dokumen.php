<?php

class Dokumen extends CI_Controller {

	function download()
	{
		$this->load->helper('download');
		$data = file_get_contents('./download/berkas.rar');
		force_download('berkas.rar', $data);
		redirect(base_url().'import');
	}

	public function import_csv()
	{
		$this->load->library('csvimport');
		$this->load->model('dokumen_model');
		$config['upload_path'] = './upload_data_siswa_csv/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '100000';

        $this->load->library('upload', $config);

		if (!$this->upload->do_upload()) {
			$data_error['error'] = $this->upload->display_errors();
			$this->load->view('import', $data_error);
		}
		else{
			$file_data = $this->upload->data();
			$file_path = './upload_data_siswa_csv/'.$file_data['file_name'];
			if ($this->csvimport->get_array($file_path)) {
				$csv_array = $this->csvimport->get_array($file_path);
				foreach ($csv_array as $row) {
					if (isset($row['nis'])) {
						$insert_data = array(
							'nis'=> $row['nis'],
							'nama' => $row['nama'],
							'nama_wali' => $row['nama_wali'],
							'no_hp_wali' => $row['no_hp_wali']
							);
						$this->dokumen_model->insert($insert_data);
					}
				}
			}
		}
	}
}

?>