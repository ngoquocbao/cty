<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Role_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function Insert($RoleInfo) {
        $UserID = rand(100000000, 999999999) + time();
        $UserName = $UserInfo['UserName'];
        $Password = md5($UserInfo['Password']);
        $RecentPassWord = $Password;
        $Email = $UserInfo['Email'];
        $AvatarImage = 'Avatar.jpg';
        $Status = 2;
        $RoleID = 2;
        $CreatedDate = time();
        $ModifiedDate = $CreatedDate;
        $CreatedBy = "System";
        $ModifiedBy = "System";
        $InsertingUser = array(
            'UserID' => $UserID,
            'UserName' => $UserName,
            'Password' => $Password,
            'RecentPassword' => $RecentPassWord,
            'Email' => $Email,
            'AvatarImage' => $AvatarImage,
            'Status' => $Status,
            'RoleID' => $RoleID,
            'CreatedDate' => $CreatedDate,
            'ModifiedDate' => $ModifiedDate,
            'CreatedBy' => $CreatedBy,
            'ModifiedBy' => $ModifiedBy
        );
        $this->db->insert('tbk_user', $InsertingUser);
    }
    
    function ListAll() {
        $this->db->select('CreatedDate');
        $Query = $this->db->get('tbk_user');
        return $Query->result_array();        
    }
}
