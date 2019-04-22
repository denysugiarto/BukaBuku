<?php


class Buku_controller extends CI_Controller
{

public function index(){
$this->load->view("halaman_utama");

}

public function login(){
    $this->load->view("halaman_login");
}

public function daftar(){
    $this->load->view("halaman_daftar");
}

public function keranjang() {
    $this->load->view("halaman_keranjang");
}

public function keranjang_isi() {
    $this->load->view("halaman_keranjang_isi");
}

public function pencarian() {
    $this->load->view("halaman_pencarian");
}
}