<?php

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
          date_default_timezone_set('Asia/Makassar');
        $this->load->database();
        $this->load->model('m_umum');
        $role = $this->session->userdata('role');
     
        if( $role <>2){
            $url=base_url();
            redirect($url);
        }
    }
    function setujui($no_formulir)
    {

      $sqll = "update formulir set status=1 where no_formulir='$no_formulir'";
    $this->db->query($sqll);
          
        $notif = "Berhasil menerima siswa";
        $this->session->set_flashdata('success', $notif);
        redirect('admin/calon_siswa');

    }
    function tolak($no_formulir)
    {

      $sqll = "update formulir set status=2 where no_formulir='$no_formulir'";
    $this->db->query($sqll);
          
        $notif = "Berhasil menolak siswa";
        $this->session->set_flashdata('delete', $notif);
        redirect('admin/calon_siswa');

    }
      function index()
    {
       
           $this->template->load('admin/template', 'admin/home');
        
    }
     function calon_siswa()
    {
        $data = array(
            'judul' => 'Data Calon Siswa',
            
            'dt_calon_siswa' => $this->m_umum->get_pendaftaran(),
        );
        $this->template->load('admin/template', 'admin/calon_siswa', $data);
    }
    function siswa_diterima()
    {
        $data = array(
            'judul' => 'Data Siswa Diterima',
            
            'dt_calon_siswa' => $this->m_umum->get_diterima(),
        );
        $this->template->load('admin/template', 'admin/siswa_diterima', $data);
    }
    function siswa_ditolak()
    {
        $data = array(
            'judul' => 'Data Calon Siswa',
            
            'dt_calon_siswa' => $this->m_umum->get_ditolak(),
        );
        $this->template->load('admin/template', 'admin/siswa_ditolak', $data);
    }
     function guru()
    {
        $data = array(
            'judul' => 'Data Guru',
            
            'dt_guru' => $this->m_umum->get_data('guru'),
        );
        $this->template->load('admin/template', 'admin/guru', $data);
    }
function simpan_guru()
    {

        $this->form_validation->set_rules('nama_guru', 'nama_guru', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('admin/guru');
        else {

            $this->m_umum->set_data("guru");
            $notif = "Tambah Guru Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('admin/guru');
        }
    }
     function update_guru()
    {

        $this->form_validation->set_rules('id_guru', 'id_guru', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('admin/guru');
        else {
            $this->m_umum->update_data("guru");
            $notif = " Update Guru Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('admin/guru');
        }
    }
      function delete_guru($id)
    {

        $this->m_umum->hapus('guru', 'id_guru', $id);
        $notif = "Guru Berhasil dihapuskan";
        $this->session->set_flashdata('delete', $notif);
        redirect('admin/guru');
    }

    function tahun_ajaran()
    {
        $data = array(
            'judul' => 'Data Tahun Ajaran',
            
            'dt_tahun_ajaran' => $this->m_umum->get_tahun_ajaran(),
        );
        $this->template->load('admin/template', 'admin/tahun_ajaran', $data);
    }
function simpan_tahun_ajaran()
    {
    $this->db->set('id_tahun_ajaran', 'UUID()', FALSE);
        $this->form_validation->set_rules('tahun_ajaran', 'tahun_ajaran', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('admin/tahun_ajaran');
        else {

            $this->m_umum->set_data("tahun_ajaran");
            $notif = "Tambah tahun_ajaran Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('admin/tahun_ajaran');
        }
    }
     function update_tahun_ajaran()
    {

        $this->form_validation->set_rules('id_tahun_ajaran', 'id_tahun_ajaran', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('admin/tahun_ajaran');
        else {
            $this->m_umum->update_data("tahun_ajaran");
            $notif = " Update tahun_ajaran Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('admin/tahun_ajaran');
        }
    }
      function delete_tahun_ajaran($id)
    {

        $this->m_umum->hapus('tahun_ajaran', 'id_tahun_ajaran', $id);
        $notif = "tahun_ajaran Berhasil dihapuskan";
        $this->session->set_flashdata('delete', $notif);
        redirect('admin/tahun_ajaran');
    }


}