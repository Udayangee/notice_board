<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_login_model extends CI_Model{

    function check_user($username,$password){
        $this->db->select('*');
        $this->db->from('no_user');
        $this->db->where('user_email',$username);
        $this->db->where('user_password',md5($password));
        

        $query = $this->db->get();
        return $query;
    }
}

?>