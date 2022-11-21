<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Functions extends CI_Controller {

    public function __construct()
    { 
      parent::__construct();
      $this->load->model("models");
      $this->load->library('session');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////LOGIN

    public function Login()
    {
      $this->load->view('UI/Login');
    }


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////DASHBOARDMAHASISWA

    public function DashboardMahasiswa()
    {
      $this->load->view('UI/Mahasiswa/Dashboard');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////PEMINJAMANRUANGAN

    public function PeminjamanRuangan()
    {
      $this->load->view('UI/Mahasiswa/Form');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////PEMINJAMANRUANGAN

    public function DetailRuangan()
    {
      $this->load->view('UI/Mahasiswa/Detail');
    }
    
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////DASHBOARD

    public function Dashboard()
    {
      $this->load->view('UI/Dashboard');
    }
    
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////ADMIN

    public function Admin()
    {
      $getData["getData"] = $this->models->getadmin();
      $this->load->view('UI/Admin', $getData);

    }

    public function saveadmin()
    {
      $foto = $_FILES['foto']['name'];
      $config['upload_path'] = './assets/foto/admin/';
      $config['allowed_types'] = 'jpg|png|gif|jpeg';
      $add_filename = time()."-".str_replace(' ', '-', $_FILES['foto']['name']);
      $config['file_name'] = $add_filename;

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('foto')) {
        $foto=$this->upload->data('file_name');
      }

        $data = array (        
          'username' => $this->input->post('usernameAdmin'),
          'password' => $this->input->post('passwordAdmin'),
          'nama' => $this->input->post('namaAdmin'),
          'nohp' => $this->input->post('noTelpAdmin'),
          'email' => $this->input->post('emailAdmin'),
          'foto' => $foto,
          'status' => $this->input->post('statusAdmin'),
            );

        $insert = $this->models->saveadmin($data);
        redirect(base_url('./Functions/Admin'));
    }

    public function editadmin()
    {
      $this->models->editadmin();
      redirect(base_url('./Functions/Admin'));
    }
  

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////BARANG

    public function Barang()
    {
      $this->load->view('UI/Barang');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////JENIS RUANGAN

    public function JenisRuangan()
    {
      $getData["getData"] = $this->models->getjenisruangan();
      $this->load->view('UI/JenisRuangan', $getData);

    }

    public function savejenisruangan()
    {
        
        $data = array (        
          'namaJenisRuangan' => $this->input->post('namaJenisRuangan'),
            );

        $insert = $this->models->savejenisruangan($data);
        redirect(base_url('./Functions/JenisRuangan'));
    }

    public function editjenisruangan()
    {
      $this->models->editjenisruangan();
      redirect(base_url('./Functions/JenisRuangan'));
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////RUANGAN

    public function Ruangan()
    {
      $getData["getData"] = $this->models->getruangan();
      $getData['getDataJenisRuangan'] = $this->models->getDataJenisRuangan();
      $getData['getDataSOP'] = $this->models->getDataSOP();
      $getData['getDatausername'] = $this->models->getDatausername();
      $this->load->view('UI/Ruangan', $getData);

    }

    public function saveruangan()
    {
      $foto = $_FILES['fotoRuangan']['name'];
      $config['upload_path'] = './assets/foto/ruangan/';
      $config['allowed_types'] = 'jpg|png|gif|jpeg';
      $add_filename = time()."-".str_replace(' ', '-', $_FILES['fotoRuangan']['name']);
      $config['file_name'] = $add_filename;

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('fotoRuangan')) {
        $foto=$this->upload->data('file_name');
      }


      $data = array (        
        'idJenisRuangan' => $this->input->post('jenisRuangan'),
        'idSop' => $this->input->post('sop'),
        'username' => $this->input->post('username'),
        'namaRuangan' => $this->input->post('namaRuangan'),
        'statusPinjam' => $this->input->post('statusPinjam'),
        'kapasitas' => $this->input->post('kapasitas'),
        'foto' => $foto,
        'status' => $this->input->post('status'),
          );

      $insert = $this->models->saveruangan($data);
      redirect(base_url('./Functions/Ruangan'));
    }

    public function editruangan()
    {
      $this->models->editruangan();
      redirect(base_url('./Functions/Ruangan'));
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////SOP

public function sop()
{
  $getData["getData"] = $this->models->getsop();
  $this->load->view('UI/SOP', $getData);
}

 public function savesop()
{
    $foto = $_FILES['foto']['name'];
      $config['upload_path'] = './assets/foto/sop/';
      $config['allowed_types'] = 'jpg|png|gif|jpeg';
      $add_filename = time()."-".str_replace(' ', '-', $_FILES['foto']['name']);
      $config['file_name'] = $add_filename;

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('foto')) {
        $foto=$this->upload->data('file_name');
      }

    $data = array (        
      'idSop' => $this->input->post('idSop'),
      'deskripsi' => $this->input->post('deskripsi'),
      'foto' => $foto,
        );

    $insert = $this->models->savesop($data);
    redirect(base_url('./Functions/SOP'));
}

public function editsop()
{
  $this->models->editsop();
  redirect(base_url('./Functions/SOP'));
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////RUANGAN

  }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////SOP

  

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////ADMIN


?>