<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Template 
    {
        var $ci;
         
        function __construct() 
        {
            $this->ci =& get_instance();
        }

        function view_userlogin($view_name, $data = null) {
            $this->ci->load->view('templates/partials/header_login');
            $this->ci->load->view($view_name);
            $this->ci->load->view('templates/partials/footer');
        }

        function view_adminlogin($view_name, $data = null) {
            $this->ci->load->view('templates/includes/header_adlogin');
            $this->ci->load->view($view_name);
            $this->ci->load->view('templates/includes/footer');
        }

        function view_user_registration($view_name, $data = null) {
            $this->ci->load->view('templates/partials/header_register');
            $this->ci->load->view($view_name);
            $this->ci->load->view('templates/partials/footer');
        }

    }