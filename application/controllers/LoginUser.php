<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginUser extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model("loginUserModel");
		$this->load->library('session');
    }
    
	public function index()
	{
		$this->load->view('loginUser');
	}
	
	//autentikasi
	function aksi_login()
	{
		$post = $this->input->post();
		if(isset($post["email"]) && isset($post["password"]))
		{
			//cek user
			$user = $this->loginUserModel;
			$data = $user->getByUsernamePassword();

			if($data != null)
			{
				$password = $data->password;
				$nama = $data->nama;
				$nohp = $data->nohp;
				$email = $data->email;
				$username = $data->username;

				//adding data to session
				$newdata = array(
					'password' => $password,
					'nama' => $nama,
					'nohp' => $nohp,
					'email' => $email,
					'username' => $username
					
					);
				$this->session->set_userdata($newdata);

				if($username == "11"){
					redirect(site_url('Dashboard'));
				}
				else if ($username == "mahasiswa"){
					redirect(site_url('UI/Mahasiswa/Dashboard'));
				}
				
			} else {
				echo "<script>alert('Username atau password tidak terdaftar');</script>";
				$this->load->view("UI/Login");
			}
		} else {
			$this->load->view("UI/Login");
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('LoginUser'));
	}
}