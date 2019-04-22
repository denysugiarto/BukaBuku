<?php


class Buku_controller extends CI_Controller
{

public function index()
{
    $this->load->view("halaman_utama");
}

public function Daftar_Keinginan() {
    $this->load->view("Daftar_Keinginan");
}

public function Product() {
    $this->load->view("Product");
}




}