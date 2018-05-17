<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_buku extends CI_model{


	public function get_all()
	{
		$query = $this->db->select("*")
				 ->from('tbl_buku')
				 ->order_by('id_buku', 'DESC')
				 ->get();
		return $query->result();
	}

	public function simpan($data)
	{
		
		$query = $this->db->insert("tbl_buku", $data);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function edit($id_buku)
	{
		
		$query = $this->db->where("id_buku", $id_buku)
				->get("tbl_buku");

		if($query){
			return $query->row();
		}else{
			return false;
		}

	}

	public function update($data, $id)
	{
		
		$query = $this->db->update("tbl_buku", $data, $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function hapus($id)
	{
		
		$query = $this->db->delete("tbl_buku", $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}


}