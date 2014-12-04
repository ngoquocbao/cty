<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function createTag($CategoryName) {
        $SpecialLetterA = array(
            'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ',
            'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ',
            'á', 'à', 'ả', 'ã', 'ạ');
        $SpecialLetterE = array(
            'é', 'è', 'ẻ', 'ẽ', 'ẹ',
            'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ'
        );
        $SpecialLetterO = array(
            'ó', 'ò', 'ỏ', 'õ', 'ọ',
            'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ',
            'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ'
        );
        $SpecialLetterU = array(
            'ú', 'ù', 'ủ', 'ũ', 'ụ',
            'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự'
        );
        $SpecialLetterSpace = ' ';
        $ReplacementA = 'a';
        $ReplacementE = 'e';
        $ReplacementO = 'o';
        $ReplacementU = 'u';
        $ReplacementSpace = '-';
            
        $CategoryNameA = preg_replace($SpecialLetterA, $ReplacementA, $CategoryName);
        $CategoryNameE = preg_replace($SpecialLetterE, $ReplacementE, $CategoryNameA);
        $CategoryNameO = preg_replace($SpecialLetterO, $ReplacementO, $CategoryNameE);
        $CategoryNameU = preg_replace($SpecialLetterU, $ReplacementU, $CategoryNameO);
        $CategoryNameSpace = preg_replace($SpecialLetterSpace, $ReplacementSpace, $CategoryNameU);
        return $CategoryNameSpace;
    }
    
    function insert($Category) {
        //print_r($Category);exit;
        $CategoryID = rand(100000000, 999999999) + time();
        $CategoryName = $Category['CategoryName'];
        $CategoryInfo = $Category['CategoryInfo'];
        $CategoryTag = $Category['CategoryTag'];
        $CategoryImage = 'Category.png';
        $CreatedDate = time();
        $ModifiedDate = $CreatedDate;
        $CreatedBy = "Admin";
        $ModifiedBy = "Admin";
        $InsertingCategory = array(
            'CategoryID' => $CategoryID,
            'CategoryName' => $CategoryName,
            'CategoryTag' => $CategoryTag,
            'CategoryInfo' => $CategoryInfo,            
            'CategoryImage' => $CategoryImage,
            'CreatedDate' => $CreatedDate,
            'ModifiedDate' => $ModifiedDate,
            'CreatedBy' => $CreatedBy,
            'ModifiedBy' => $ModifiedBy
        );
        $this->db->insert('tbk_category', $InsertingCategory);
    }
    
    function showAll() {
        $this->db->select('*');
        $Query = $this->db->get('tbk_category');
        return $Query->result_array();        
    }
    function listCategory() {
        $Query = $this->db->query('SELECT * FROM tbk_category');
        return $Query->result_array();
        
    }
    
    function detail($CategoryID) {
        $Query = $this->db->query('SELECT * FROM tbk_category WHERE CategoryID="'.$CategoryID.'"');
        return $Query->result_array();
    }
    function edit($Category) {
        //print_r($Category);
        $CategoryID = $Category['CategoryID'];
        $CategoryName = $Category['CategoryName'];
        $CategoryTag = $Category['CategoryTag'];
        $CategoryInfo = $Category['CategoryInfo'];
        $this->db->query('UPDATE tbk_category SET CategoryName="'.$CategoryName.'",'
                . 'CategoryTag="'.$CategoryTag.'",'
                . 'CategoryInfo="'.$CategoryInfo.'"'
                . ' WHERE CategoryID="'.$CategoryID.'"');
    }
    function delete($CategoryID) {
        $this->db->query("DELETE FROM tbk_category WHERE CategoryID=$CategoryID");
    }
    function search($keyword)    {
        $this->db->like('CategoryName',$keyword);
        $this->db->or_like('CategoryInfo',$keyword);
        $this->db->or_like('CategoryTag',$keyword);
        $this->db->or_like('CreatedBy',$keyword);
        $this->db->or_like('ModifiedBy',$keyword);
        $Query  =   $this->db->get('tbk_category');
        return $Query->result_array();
    }
}
