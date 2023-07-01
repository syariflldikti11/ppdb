<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
          date_default_timezone_set('Asia/Makassar');
        $this->load->model('m_umum');
    }
    public function index()
    {
        $data['dt_tahun_ajaran'] = $this->m_umum->get_tahun_ajaran();
           $this->template->load('site/template', 'site/home',$data);
        
    }
      public function visimisi()
    {
       
           $this->template->load('site/template', 'site/visimisi');
        
    }
    public function sejarah()
    {
       
           $this->template->load('site/template', 'site/sejarah');
        
    }
     public function profil()
    {
       
           $this->template->load('site/template', 'site/profil');
        
    }
     public function persyaratan()
    {
       
           $this->template->load('site/template', 'site/persyaratan');
        
    }
     function simpan_daftar()
    {
  $kode_unik = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
           $tgl = date('d');
        $bln = date('m');
        $thn = date('Y');
        $jam = date('h');
        $menitdetik = date('is');
        $tgl = date('dmy');
        $jam = date('his');
   $no_formulir = $tgl.$jam.$kode_unik.$thn.$menitdetik.$bln;
        $this->db->set('no_formulir',$no_formulir);
        $this->form_validation->set_rules('nama_siswa', 'nama_siswa', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('agama', 'agama', 'required');
        $this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required');
 
        if ($this->form_validation->run() === FALSE) {
               $notif = "Data Tidak Lengkap";
            $this->session->set_flashdata('delete', $notif);
            redirect('site');
        }
        else {
  $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'kartu_keluarga' => $this->uploadKK(),
            'akta_kelahiran' => $this->uploadakta(),
            'foto' => $this->uploadfoto()
        );
           
         $this->m_umum->input_data($data, 'formulir');
           
            $notif = "Berhasil Melkakukan Pendaftaran, silahkan cetak bukti pendaftaran anda";
            $this->session->set_flashdata('success', $notif);
            redirect(base_url() . "site/hasil_pendaftaran/" . $no_formulir);
        }
    }
    function hasil_pendaftaran($no_formulir=false)
    {

$data['d'] = $this->m_umum->get_hasil($no_formulir);

       $this->template->load('site/template', 'site/hasil_pendaftaran',$data);
       
    }
     function hasil_kelulusan()
    {
$no_formulir=$this->input->post('no_formulir');
$data['d'] = $this->m_umum->ambil_data('formulir', 'no_formulir', $no_formulir);

       $this->template->load('site/template', 'site/hasil_kelulusan',$data);
       
    }
    function cetak_pendaftaran($no_formulir=false)
    {

$data['d'] = $this->m_umum->get_hasil($no_formulir);

       $this->load->view('site/cetak_pendaftaran',$data);
       
    }
     



public function uploadKK()
    {
        $config['upload_path'] = 'upload';
        $config['allowed_types'] = 'pdf';
        $config['overwrite'] = false;
        $config['max_size'] = 5000;


        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('kartu_keluarga')) {
            return $this->upload->data("file_name");
        }
        $error = $this->upload->display_errors();
        echo $error;
        exit;

    }
    public function uploadakta()
    {
        $config['upload_path'] = 'upload';
        $config['allowed_types'] = 'pdf';
        $config['overwrite'] = false;
        $config['max_size'] = 5000;


        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('akta_kelahiran')) {
            return $this->upload->data("file_name");
        }
        $error = $this->upload->display_errors();
        echo $error;
        exit;

    }
     public function uploadfoto()
    {
        $config['upload_path'] = 'upload';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['overwrite'] = false;
        $config['max_size'] = 5000;


        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        $error = $this->upload->display_errors();
        echo $error;
        exit;

    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}