<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class APIs extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getAllCategories() {
        $this->load->model('category_model');
        $return = $this->category_model->showAll();
        $return['url'] = base_url() . '/APIs/getAllCategories';
        $return['coder'] = 'Vu Huynh';
        echo json_encode($return);
    }

}
