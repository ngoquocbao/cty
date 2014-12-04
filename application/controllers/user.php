<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

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
                'field' => 'UserName',
                'label' => 'Tên người dùng',
                'rules' => 'trim|required|min_length[6]|max_length[30]|is_unique[tbk_user.UserName]|xss_clean'
            ),
            array(
                'field' => 'Password',
                'label' => 'Mật khẩu',
                'rules' => 'trim|required|min_length[6]|max_length[30]|matches[RetypePassword]'
            ),
            array(
                'field' => 'RetypePassword',
                'label' => 'Mật khẩu (nhập lại)',
                'rules' => 'required'
            ),
            array(
                'field' => 'Email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|is_unique[tbk_user.Email]'
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
