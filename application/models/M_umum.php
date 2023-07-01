<?php
	
class M_umum extends CI_model{
	
function get_data($tabel)
	{
		$query = $this->db->get($tabel);
		return $query->result();		
	}
	function get_pendaftaran()
	{		
	   
		$this->db->select('*');
	   $this->db->from('formulir a');
		$this->db->join('tahun_ajaran b','a.id_tahun_ajaran=b.id_tahun_ajaran','left');
		$this->db->where('b.status="Aktif"');
		$this->db->where('a.status',0);

	   $query = $this->db->get();
	   return $query->result();
	}
	function get_diterima()
	{		
	   
		$this->db->select('*');
	   $this->db->from('formulir a');
		$this->db->join('tahun_ajaran b','a.id_tahun_ajaran=b.id_tahun_ajaran','left');
		$this->db->where('a.status',1);

	   $query = $this->db->get();
	   return $query->result();
	}
	function laporan_siswa_diterima($tahun_ajaran)
	{		
	   
		$this->db->select('*');
	   $this->db->from('formulir a');
		$this->db->join('tahun_ajaran b','a.id_tahun_ajaran=b.id_tahun_ajaran','left');
		$this->db->where('a.status',1);
		$this->db->where('a.id_tahun_ajaran',$tahun_ajaran);

	   $query = $this->db->get();
	   return $query->result();
	}
	function get_hasil($no_formulir)
	{		
	   
		$this->db->select('*');
	   $this->db->from('formulir a');
		$this->db->join('tahun_ajaran b','a.id_tahun_ajaran=b.id_tahun_ajaran','left');
$this->db->where('a.no_formulir',$no_formulir);
	   $query = $this->db->get();
	   return $query->row();
	}
	function get_ditolak()
	{		
	   
		$this->db->select('*');
	   $this->db->from('formulir a');
		$this->db->join('tahun_ajaran b','a.id_tahun_ajaran=b.id_tahun_ajaran','left');
		$this->db->where('a.status',2);

	   $query = $this->db->get();
	   return $query->result();
	}
	function get_tahun_ajaran()
	{		
	   
		$this->db->select('*');
	   $this->db->from('tahun_ajaran a');
		$this->db->where('a.status="Aktif"');

	   $query = $this->db->get();
	   return $query->result();
	}
function ambil_data($tabel, $kolom = FALSE, $id = FALSE)		
	{
		if($id === FALSE)
		{
			$q = $this->db->get($tabel);	//ambil seluruh data tabel
			return $q->result();		//kembalikan
		}
		$q = $this->db->get_where($tabel,array($kolom=>$id)); //ambil satu baris data dengan $kolom=$id
		return $q->row();				//kembalikan
	}
	function hapus($tabel,$kolom,$id)
	{
		$this->db->delete($tabel,array($kolom => $id));
	}
	function set_data($tabel)
	{
		$data=$this->input->post(null,TRUE);
		array_pop($data);
		return $this->db->insert($tabel, $data);
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 function UpdateData($tabelName, $data, $where){
		$res = $this->db->update($tabelName, $data, $where);
		return $res;
	}
	function update_data($tabel)
	{
		$data=$this->input->post(null,TRUE);  
		$primary=array_slice($data,0,1);	
		array_shift($data);		
		array_pop($data);		
	    $this->db->where($primary);
	    $this->db->update($tabel, $data);	
	}
	
}