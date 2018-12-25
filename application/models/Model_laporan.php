<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_laporan extends CI_model{


	public function get_all()
	{
		$query = $this->db->select("*")
				 ->from('anggota')
				 ->order_by('nadep', 'DESC')
				 ->get();
		return $query->result();
	}

	public function buku()
	{
		$query = $this->db->select("*")
				 ->from('buku')
				 ->order_by('jd_buku', 'DESC')
				 ->get();
		return $query->result();
	}

	public function member()
	{
		$query = $this->db->select("*")
				 ->from('member')
				 ->order_by('nadep', 'DESC')
				 ->get();
		return $query->result();
	}

	public function pinjam()
	{
		$query = $this->db->select("*")
				 ->from('pinjam')
				 ->order_by('tgl_pinjam', 'DESC')
				 ->get();
		return $query->result();
	}

	public function simpan_anggota($data)
	{
		$query = $this->db->insert("anggota", $data);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function simpan_buku($data)
	{
		$query = $this->db->insert("buku", $data);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function edit_anggota($noid)
	{
		$query = $this->db->where("noid", $noid)
				->get("anggota");
		if($query){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update($data, $id)
	{
		
		$query = $this->db->update("anggota", $data, $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function hapus($id)
	{
		
		$query = $this->db->delete("laporan", $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function hapus_member($id)
	{
		
		$query = $this->db->delete("member", $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function terima_member($noid)
	{

		$this->db->select('nadep,nabel,email,notelpn');
		$this->db->where('noid',$noid);
		$sql = $this->db->get('member')->result();
		foreach ($sql as $a) {
			$query=$this->db->insert('anggota',$a);
		}
		if($query){
			$query=$this->db->where('noid',$noid)
							->delete('member');
		}else{
			return false;
		}
	}

	// public function terima_member($id)
	// {

	// 	$query = $this->db->insert("anggota", $id);
	// 			 $this->db->where("id,$id");
		
	// 	if($query){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}

	// }

	public function regis($data)
	{
		
		$query = $this->db->insert("member", $data);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function cek_login($email, $password)
	{
           $this->db->select('*');
           $this->db->from('user');
           $this->db->where('email', $email);
           $this->db->where('password',$password);

           return $this->db->get()->num_rows(); 
    }

    function SaveForm($form_data)
  	{
    $this->db->insert('user', $form_data);
 
    if ($this->db->affected_rows() == '1')
    {
      return TRUE;
    }
 
    return FALSE;
  	}

}