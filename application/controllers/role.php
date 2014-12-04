<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Role extends CI_Controller {

    function __construct() {
        parent::__construct();        
        $this->load->database();
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    function create() {
        $ValidationRules = array(
            array(
                'field' => 'Role',
                'label' => 'Vai trò người dùng',
                'rules' => 'trim|required|xss_clean'
            )
        );
        $this->form_validation->set_rules($ValidationRules);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Manage/User/Create');
        } else {
            //print_r($_POST);
            $UserInfo = array (
                'UserName' => $this->input->post('UserName'),
                'Password' => $this->input->post('Password'),
                'Email' => $this->input->post('Email')
            );
            $this->load->model('user_model');
            $this->user_model->insert($UserInfo);            
            $this->load->view('welcome_message');
        }
    }

    function checkCreate() {
        
    }

    function getList() {
        $this->load->model('user_model');
        $List = $this->user_model->listAll();
        foreach ($List as $Element) {
            print_r(date('d/m/Y H:i:s', $Element['CreatedDate'])."<br/>");
        }
    }

}
