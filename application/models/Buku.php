<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 23/03/2019
 * Time: 3:02
 */

class Buku extends CI_Model
{
  public function input_data_buku($table,$data){
    $insert = $this->db->insert($table, $data);

    if ($insert){
      return TRUE;
    }else{
      return FALSE;
    }
	}
	public function Detail_buku($No)
	{
		$this->db->select('*');
        $this->db->from('data__buku');
        $this->db->where('No', $No);
        $query = $this->db->get();
        return $query;
	}

  public function get_buku($table){
    $hasil = $this->db->get($table);
    return $hasil->result_array();
  }

  public function delete_bukuu($table,$No){
    $this->db->where('No', $No);
    $delete = $this->db->delete($table);

    if ($delete){
      return TRUE;
    }else{
      return FALSE;
    }
  }


  public function update_buku($table,$No,$data){
    $this->db->where('No', $No);
    $update = $this->db->update($table,$data);

    if ($update){
      return TRUE;
    }else{
      return FALSE;
    }
  }
}
