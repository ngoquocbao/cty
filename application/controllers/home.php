<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Home extends CI_Controller {



    function __construct() {

        parent::__construct();        

        $this->load->database();

    }

    

    function contact() {

        $this->load->view('Home/Contact');

    }

    function index() {

        $this->load->view('Home/Index');

    }

    function category() {

        $this->load->view('Home/Category');

    }

    function product() {
        $this->load->model('product_model');
        $data['tapes'] = $this->product_model->showType('tapes');
        $data['dais'] = $this->product_model->showType('dais');
        $this->load->view('Home/Products', $data);

    }

    function services() {

        $this->load->view('Home/Services');

    }

    function introduction() {

        $this->load->view('Home/Introduction');

    }

}