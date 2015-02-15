<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dokumen_model extends CI_Model {

	public function insert($data)
	{
		$this->db->insert('siswa',$data);
	}

}

/* End of file import_model.php */
/* Location: ./application/models/import_model.php */
?>