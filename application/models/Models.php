<?php defined('BASEPATH') or exit('No direct script access allowed');

  class Models extends CI_Model
  {
///////////////////////////////////////////////TABLE
private $tableadmin = "admin";
private $tablejenisruangan ="jenis_ruangan";
private $tableruangan ="ruangan";
private $tablesop ="sop";


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////ADMIN

    public function getadmin()
    {
      $query = $this->db->query("select username, password, nama, nohp,email,foto, status  from admin");

      return $query->result();
    }

    public function saveadmin($data)
    {
      return $this->db->insert($this->tableadmin, $data);
    }

    public function editadmin()
    {
       $post = $this->input->post();
        $old_image = $this->input->post('fotoO');
        $new_image = $_FILES['fotoE']['name'];

        if ($new_image == TRUE) {
          $update_filename = time()."-".str_replace(' ', '-', $_FILES['fotoE']['name']);
          $config['upload_path'] = './assets/foto/admin/';
          $config['allowed_types'] = 'jpg|png|gif|jpeg';
          $config['file_name'] = $update_filename;

          $this->load->library('upload', $config);

          if ($this->upload->do_upload('fotoE')) {
            if (file_exists("./assets/foto/admin/".$old_image)) {
              unlink("./assets/foto/admin/".$old_image);
            }
          } 
        } else {
          $update_filename = $old_image;
        }

        $data = array (
                  'password' => $this->input->post('passwordAdminE'),
                  'nama' => $this->input->post('namaAdminE'),
                  'nohp' => $this->input->post('noTelpAdminE'),
                  'email' => $this->input->post('emailAdminE'),
                  'foto' => $update_filename,
                  'status' => $this->input->post('statusAdminE'),
              );
       
        $where = array(
          'username' => $this->input->post('usernameAdminE'),
        );

        $this->db->where($where);
        return $this->db->update($this->tableadmin, $data);
    }

    //////////////////////////////////////////////////////////////////////////////////////Jenis Ruangan
    public function getjenisruangan()
    {
      $query = $this->db->query("select idJenisRuangan, namaJenisRuangan from jenis_ruangan");

      return $query->result();
    }

    public function savejenisruangan($data)
    {
      return $this->db->insert($this->tablejenisruangan, $data);
    }

    public function editjenisruangan()
    {

        $post = $this->input->post();
        $data = array (
          'namaJenisRuangan' => $this->input->post('namaJenisRuanganE'),
              );
       
        $where = array(
          'idJenisRuangan' => $this->input->post('idJenisRuanganE'),
        );

        $this->db->where($where);
        return $this->db->update($this->tablejenisruangan, $data);
    }
/////////////////////////////////////////////////////////////////////////////
    public function getruangan()
    {
      $query = $this->db->query("select idRuangan, jra.idJenisRuangan, idSop,username, namaRuangan, statusPinjam, kapasitas,foto,status, jra.namaJenisRuangan from ruangan as ruangans inner join jenis_ruangan as jra on jra.idJenisRuangan = ruangans.idJenisRuangan");

      return $query->result();
    }

    public function getDataJenisRuangan()
    {
      $query = $this->db->query('SELECT * FROM jenis_ruangan');
      return $query->result();
    }

    public function getDataSOP()
    {
      $query = $this->db->query('SELECT * FROM SOP');
      return $query->result();
    }
    
    public function getDatausername()
    {
      $query = $this->db->query('SELECT username,nama  FROM admin  ');
      return $query->result();
    }

    public function saveruangan($data)
    {
      return $this->db->insert($this->tableruangan, $data);
    }

    public function editruangan()
    {
        $post = $this->input->post();
        $old_image = $this->input->post('fotoRuanganO');
        $new_image = $_FILES['fotoRuanganE']['name'];

        if ($new_image == TRUE) {
          $update_filename = time()."-".str_replace(' ', '-', $_FILES['fotoRuanganE']['name']);
          $config['upload_path'] = './assets/foto/ruangan/';
          $config['allowed_types'] = 'jpg|png|gif|jpeg';
          $config['file_name'] = $update_filename;

          $this->load->library('upload', $config);

          if ($this->upload->do_upload('fotoRuanganE')) {
            if (file_exists("./assets/foto/ruangan/".$old_image)) {
              unlink("./assets/foto/ruangan/".$old_image);
            }
          } 
        } else {
          $update_filename = $old_image;
        }

        $data = array (
          'idJenisRuangan' => $this->input->post('jenisRuanganE'),
          'idSop' => $this->input->post('sopE'),
          'username' => $this->input->post('picE'),
          'namaRuangan' => $this->input->post('namaRuanganE'),
          'statusPinjam' => $this->input->post('statusPinjamE'),
          'kapasitas' => $this->input->post('kapasitasE'),
          'foto' => $update_filename,
          'status' => $this->input->post('statusE')
              );
       
        $where = array(
          'idRuangan' => $this->input->post('idRuanganE'),  
        );

        $this->db->where($where);
        return $this->db->update($this->tableruangan, $data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function getsop()
{
  $query = $this->db->query("select idSop, deskripsi, foto from sop ");

  return $query->result();
}

public function savesop($data)
{
  return $this->db->insert($this->tablesop, $data);
}

public function editsop()
    {
        $post = $this->input->post();
        $old_image = $this->input->post('fotoO');
        $new_image = $_FILES['fotoE']['name'];

        if ($new_image == TRUE) {
          $update_filename = time()."-".str_replace(' ', '-', $_FILES['fotoE']['name']);
          $config['upload_path'] = './assets/foto/sop/';
          $config['allowed_types'] = 'jpg|png|gif|jpeg';
          $config['file_name'] = $update_filename;

          $this->load->library('upload', $config);

          if ($this->upload->do_upload('fotoE')) {
            if (file_exists("./assets/foto/sop/".$old_image)) {
              unlink("./assets/foto/sop/".$old_image);
            }
          } 
        } else {
          $update_filename = $old_image;
        }

        $data = array (
          'deskripsi' => $this->input->post('deskripsiE'),
          'foto' => $update_filename,
              );
       
        $where = array(
          'idSop' => $this->input->post('idsopE'),
        );

        $this->db->where($where);
        return $this->db->update($this->tablesop, $data);
    }
 
  }
  
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////Ruanga

///////////////////////////////////////////////////////////////////////////////////



?>