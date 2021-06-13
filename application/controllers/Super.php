<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Super extends CI_Controller{

    public function _construct(){

        parent::_construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('Admin/index');
        }
    }

    function index()
    {
       
        $sess_Id = $this->session->userdata('session_data');
        
        

       //calling relevent admins
       
            if($sess_Id['faculty_Id'] == '1'){
            $this->load->view('administrators/super_admin_view');

        }else{
            echo "Access Denied!";
        }
    }
}

?>