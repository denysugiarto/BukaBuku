<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 23/03/2019
 * Time: 2:37
 */

class LoginModel extends CI_Model
{
  public function login_user($email, $password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);

    $result = $this->db->get('akun');
    if($result->num_rows()==1){
        return $result->row(0);
    }else{
        return false;
    }
  }

  public function register_user($table,$data){
    $insert = $this->db->insert($table, $data);
    if ($insert){
      return TRUE;
    }else{
      return FALSE;
    }
  }
}
