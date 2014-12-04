<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller {

    function __construct() {
        parent::__construct();        
        $this->load->database();
    }
    function index() {
        $data['title'] = "Danh sách sản phẩm";
        $data['TitleBodyContent'] = "Danh sách sản phẩm";
        $data['ListOfProduct'] = $this->items();
        $this->load->view('Manage/Product/List', $data);
    }
    function create() {
        $ValidationRules = array(
            array(
                'field' => 'ProductName',
                'label' => 'Tên sản phẩm',
                'rules' => 'required'
            ),
            array(
                'field' => 'ProductInfo',
                'label' => 'Mô tả',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($ValidationRules);
        if ($this->form_validation->run() == FALSE) {
            //print("failed");
            $this->load->model('category_model');
            $data['CategoryList'] = $this->category_model->listCategory();
            $this->load->view('Manage/Product/Create', $data);
        } else {
            //print("passed");
            //print_r($_POST);exit;
            $Product = array(
                'ProductName' => $this->input->post('ProductName'),
                'ProductInfo' => $this->input->post('ProductInfo'),
                'CategoryID' => $this->input->post('CategoryID')
            );
            //print_r($Product);exit;
            $this->load->model('product_model');
            $this->product_model->insert($Product);
            redirect('/product', 'refresh');
        }
    }
    function delete($ProductID) {
        
    }

    function edit($ProductID) {
        
    }

    function search($ProductID) {
        
    }

    function item($ProductID) {
        
    }

    function items() {
        $this->load->model('product_model');
        return $this->product_model->showAll();
    }

    function uploadImage($Image) {
        
    }

    function uploadFile($File) {
        
    }
}
