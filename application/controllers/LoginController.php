<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 23/03/2019
 * Time: 2:26
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class LoginController extends CI_Controller
{

  function __construct(){
    parent::__construct();
    $this->load->model('LoginModel');
  }

  public function index()
  {
    if ($this->session->userdata('login')==1) {
      redirect('Buku_controller/index');
    }
    $this->load->view('login');
  }

  public function register_view(){
    $this->load->view('halaman_daftar');
  }

  public function cek_login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $login = $this->LoginModel->login_user($email, $password);

    if ($login) {
      $sess_data = array(
          'logged_in' => 1,
          'nama' => $login->nama
      );
      $this->session->set_userdata($sess_data);
      redirect('Buku_controller/index');
    } else {
      echo "<script>alert('Gagal login: Cek nama, password!');</script>";
      redirect('LoginController/index');
    }
  }

  public function register()
  {
    $this->load->model('LoginModel');
    $nama = $this->input->post('nama');
    $password = $this->input->post('password');
    $email = $this->input->post('email');
    $table = 'akun';

    $data_insert = array (
			'nama' => $nama,
			'email' => $email,
      'password' => $password
      
    );

    $register = $this->LoginModel->register_user($table, $data_insert);

    if ($register) {
      $this->session->set_flashdata('alert', 'registrasi_berhasil');
      redirect('LoginController/index');
    }
  }

  public function Logout()
  {
    $this->session->sess_destroy();
    redirect('LoginController/index');
  }
}

