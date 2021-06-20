<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Template 
    {
        var $ci;
         
        function __construct() 
        {
            $this->ci =& get_instance();
        }

        /** adding Main layouts */

        // User Login, registration , admin login

        function layout_simple($view_name, $data = null) {

            $data['cssfile_name'] = 'assests/css/'.$view_name.'.css';
            $data['jsfile_name'] = 'assests/js/'.$view_name.'.js';

            $this->ci->load->view('templates/simple_header',$data);
            $this->ci->load->view($view_name);
            $this->ci->load->view('templates/simple_footer');
        }

        // User dashbbord 
        function layout_student($view_name, $data = null) {

            $data['cssfile_name'] = 'assests/css/'.$view_name.'.css';

            $this->ci->load->view('templates/student_header',$data);
            $this->ci->load->view('templates/student_navbar');
            $this->ci->load->view($view_name);
            $this->ci->load->view('templates/student_footer');
        }

        //admin dashbord
        function layout_admin($view_name, $data = null) {

            $data['cssfile_name'] = 'assests/css/'.$view_name.'.css';
            $data['jsfile_name'] = 'assests/js/'.$view_name.'.js';

            $this->ci->load->view('templates/admin_header',$data);
            $this->ci->load->view('templates/admin_navbar');
            $this->ci->load->view($view_name);
            $this->ci->load->view('templates/admin_footer');
        }

    }