<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Super extends CI_Controller{

    public function _construct(){

        parent::_construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('admin/index');
        }
    }

    function index()
    {
       
        $sess_Id = $this->session->userdata('session_data');
        
        

       //calling relevent admins
       
            if($sess_Id['faculty_Id'] == '1'){
            $this->template->view_super_admindashboard('administrators/super_admin_view',$sess_Id);

        }else{
            echo "Access Denied!";
        }
    }


    function logout(){
		
		$this->session->unset_userdata('session_data');
		redirect('admin/index');
	}
	
}

?>