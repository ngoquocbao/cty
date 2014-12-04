<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function index() {
        $data['title'] = "Danh sách loại sản phẩm";
        $data['TitleBodyContent'] = "Danh sách loại sản phẩm";
        $data['ListOfCategory'] = $this->items();
        $this->load->view('Manage/Category/List', $data);
    }

    function create() {
        $ValidationRules = array(
            array(
                'field' => 'CategoryName',
                'label' => 'Loại sản phẩm',
                'rules' => 'required'
            ),
            array(
                'field' => 'CategoryInfo',
                'label' => 'Mô tả',
                'rules' => 'required'
            ),
            array(
                'field' => 'CategoryTag',
                'label' => 'Thẻ thể loại (VD: Băng keo là tapes, dây đai là dais)',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($ValidationRules);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Manage/Category/Create');
        } else {
            //print_r($_POST);exit;
            $Category = array(
                'CategoryName' => $this->input->post('CategoryName'),
                'CategoryInfo' => $this->input->post('CategoryInfo'),
                'CategoryTag' => $this->input->post('CategoryTag')
            );
            //print_r($Category);exit;
            $this->load->model('category_model');
            $this->category_model->insert($Category);
            redirect('/category', 'refresh');
        }
    }

    function delete($CategoryID) {
        $ValidationRules = array(
            array(
                'field' => 'CategoryName',
                'label' => 'Loại sản phẩm',
                'rules' => 'required'
            ),
            array(
                'field' => 'CategoryInfo',
                'label' => 'Mô tả',
                'rules' => 'required'
            ),
            array(
                'field' => 'CategoryTag',
                'label' => 'Thẻ thể loại (VD: Băng keo là tapes, dây đai là dais)',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($ValidationRules);
        if ($this->form_validation->run() == FALSE) {
            $this->load->model('category_model');
            $data['category'] = $this->category_model->detail($CategoryID);
            $this->load->view('Manage/Category/Delete', $data);
        } else {
            $this->load->model('category_model');
            $this->category_model->delete($CategoryID);
            redirect('/category', 'refresh');
        }
    }

    function edit($CategoryID) {
        $ValidationRules = array(
            array(
                'field' => 'CategoryName',
                'label' => 'Loại sản phẩm',
                'rules' => 'required'
            ),
            array(
                'field' => 'CategoryInfo',
                'label' => 'Mô tả',
                'rules' => 'required'
            ),
            array(
                'field' => 'CategoryTag',
                'label' => 'Thẻ thể loại (VD: Băng keo là tapes, dây đai là dais)',
                'rules' => 'required'
            )
        );
        $flag = false;
        $this->form_validation->set_rules($ValidationRules);
        if ($this->form_validation->run() == FALSE) {
            $this->load->model('category_model');
            $data['category'] = $this->category_model->detail($CategoryID);
            $data['flag'] = $flag;
            $this->load->view('Manage/Category/Edit', $data);
        } else {
            $flag = true;            
            $Category = array(
                'CategoryID' => $CategoryID,
                'CategoryName' => $this->input->post('CategoryName'),
                'CategoryInfo' => $this->input->post('CategoryInfo'),
                'CategoryTag' => $this->input->post('CategoryTag')
            );
            //print_r($Category);exit;
            $this->load->model('category_model');
            $this->category_model->edit($Category);
            $data['category'] = $this->category_model->detail($CategoryID);
            $data['flag'] = $flag;
            $this->load->view('Manage/Category/Edit', $data);
            //redirect('/category/edit/'.$CategoryID, 'refresh');
        }
    }

    function search() {
        $data['title'] = "Kết quả tìm loại sản phẩm";
        $data['TitleBodyContent'] = "Tìm kiếm loại sản phẩm";
        $CategoryToSearch    =   $this->input->post('CategoryToSearch');
        $this->load->model('category_model');
        $data['ListOfCategory']    =   $this->category_model->search($CategoryToSearch);
        $this->load->view('Manage/Category/Search',$data);
    }

    function detail($CategoryID) {
        $this->load->model('category_model');
        $data['category'] = $this->category_model->detail($CategoryID);
        $this->load->view('Manage/Category/Detail', $data);
    }

    function items() {
        $this->load->model('category_model');
        return $this->category_model->showAll();
    }

    function uploadImage($Image) {
        
    }

    function uploadFile($File) {
        
    }

}
