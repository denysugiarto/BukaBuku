<?php


class Buku_controller extends CI_Controller

{
	function __construct(){
		parent::__construct();
		$this->load->model('Buku');
	  }
    public function index()
    {
		$table = 'data__buku';
		$hasil =$this->Buku->get_buku($table);
		$data['data']= $hasil;
        $this->load->view("halaman_utama",$data);
    }

    public function Daftar_Keinginan() {
        $this->load->view("Daftar_Keinginan");
    }

    public function login(){
        $this->load->view("halaman_login");
    }

    public function daftar(){
        $this->load->view("halaman_daftar");
    }
    public function Product($No) {
		$item['problems'] = $this->Buku->Detail_buku($No);	
		$data = array(
				'No' => $No,
				'title' => 'Data buku',
				'buku' => $item['problems']
				);    
        $this->load->view("Product",$data);
    }

    public function keranjang() {
        $this->load->view("halaman_keranjang");
    }

    public function keranjang_isi() {
        $this->load->view("halaman_keranjang_isi");
    }

    public function tambahbuku() {
        $this->load->view("halaman_tambahbuku");
	}

	// fungsi menambahkan buku
	public function tbhbuku(){
		$Judul_Buku = $this->input->post('judul');
        $Bentuk_Cover = $this->input->post('cover');
        $Sinopsis = $this->input->post('sinopsis');
        $Pengarang = $this->input->post('pengarang');
        $Harga = $this->input->post('harga');
        $Penerbit = $this->input->post('penerbit');
        $ISBN = $this->input->post('isbn');
        $Halaman = $this->input->post('halaman');
        $Dimensi = $this->input->post('dimensi');
		$Bahasa = $this->input->post('bahasa');

		$data = array (
			'Judul_Buku' => $Judul_Buku,
			'Bentuk_Cover' => $Bentuk_Cover,
			'Sinopsis' => $Sinopsis,
			'Pengarang' => $Pengarang,			
			'Harga' => $Harga,
			'Penerbit' => $Penerbit,
			'ISBN' => $ISBN,
			'Halaman' => $Halaman,
			'Dimensi' => $Dimensi,
			'Bahasa' => $Bahasa
		  );
		  $table = "data__buku";
	  
		  $insert = $this->Buku->input_data_buku($table,$data);
	  
		  if($insert){
			$this->session->set_flashdata('alert', 'sukses_insert');
			redirect(site_url('Buku_controller/tambahbuku'));
		  }else{
			echo "<script>alert('Gagal Menambahkan Data');</script>";
		  }
	}

  public function delete_buku($No){
    $table = 'data__buku';
    $this->Buku->delete_bukuu($table,$No);
    $this->session->set_flashdata('alert', 'sukses_delete');
    redirect(site_url('Buku_controller/index'));
  }
    public function edit($No){
		$item['problems'] = $this->Buku->Detail_buku($No);	
		$data = array(
				'No' => $No,
				'title' => 'Data buku',
				'buku' => $item['problems']
				);    
        $this->load->view("halaman_edit",$data);

	}	
	public function edit_data($No){
		$table = 'data__buku';
		$Judul_Buku = $this->input->post('judul');
        $Bentuk_Cover = $this->input->post('cover');
        $Sinopsis = $this->input->post('sinopsis');
        $Pengarang = $this->input->post('pengarang');
        $Harga = $this->input->post('harga');
        $Penerbit = $this->input->post('penerbit');
        $ISBN = $this->input->post('isbn');
        $Halaman = $this->input->post('halaman');
        $Dimensi = $this->input->post('dimensi');
		$Bahasa = $this->input->post('bahasa');

		$data = array (
			'Judul_Buku' => $Judul_Buku,
			'Bentuk_Cover' => $Bentuk_Cover,
			'Sinopsis' => $Sinopsis,
			'Pengarang' => $Pengarang,			
			'Harga' => $Harga,
			'Penerbit' => $Penerbit,
			'ISBN' => $ISBN,
			'Halaman' => $Halaman,
			'Dimensi' => $Dimensi,
			'Bahasa' => $Bahasa
		  );
	$update = $this->Buku->update_buku($table,$No,$data);
	if($update){
		$this->session->set_flashdata('alert', 'sukses_update');
		redirect(site_url('Buku_controller/index'));
	}else{
		echo "<script>alert('Gagal mengupdate Data');</script>";
	}
	}
}
