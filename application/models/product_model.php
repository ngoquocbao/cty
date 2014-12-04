<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function createTag($ProductName) {
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
            
        $ProductNameA = preg_replace($SpecialLetterA, $ReplacementA, $ProductName);
        $ProductNameE = preg_replace($SpecialLetterE, $ReplacementE, $ProductNameA);
        $ProductNameO = preg_replace($SpecialLetterO, $ReplacementO, $ProductNameE);
        $ProductNameU = preg_replace($SpecialLetterU, $ReplacementU, $ProductNameO);
        $ProductNameSpace = preg_replace($SpecialLetterSpace, $ReplacementSpace, $ProductNameU);
        return $ProductNameSpace;
    }
    
    function insert($Product) {
        //print_r($Product);exit;
        $ProductID = rand(10000, 99999) + time();
        $CategoryID = $Product['CategoryID'];
        $ProductName = $Product['ProductName'];
        $ProductInfo = $Product['ProductInfo'];
        $ProductTag = 'tag';
        $ProductImage = 'Product.png';
        $CreatedDate = time();
        $ModifiedDate = $CreatedDate;
        $CreatedBy = "Admin";
        $ModifiedBy = "Admin";
        $InsertingProduct = array(
            'ProductID' => $ProductID,
            'CategoryID' => $CategoryID,
            'ProductName' => $ProductName,
            'ProductTag' => $ProductTag,
            'ProductInfo' => $ProductInfo,            
            'ProductImage' => $ProductImage,
            'CreatedDate' => $CreatedDate,
            'ModifiedDate' => $ModifiedDate,
            'CreatedBy' => $CreatedBy,
            'ModifiedBy' => $ModifiedBy
        );
        $this->db->insert('tbk_product', $InsertingProduct);
    }
    
    function showAll() {
        $this->db->select('*');
        $Query = $this->db->get('tbk_product');
        return $Query->result_array();        
    }
    function showType($tag) {
        $Query = $this->db->query('SELECT p.ProductID, p.ProductName,'
                . ' p.CategoryID, p.ProductTag, p.ProductInfo, p.ProductImage,'
                . ' p.CreatedBy, p.ModifiedBy, p.CreatedDate, p.ModifiedDate'
                . ' FROM tbk_category AS c, tbk_product AS p'
                . ' WHERE c.CategoryID=p.CategoryID'
                . ' AND c.CategoryTag ='."'$tag'"
                . ' GROUP BY p.ProductID');
        return $Query->result_array();
    }
}
