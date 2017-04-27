<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/4/25
 * Time: 17:10
 */
class News_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function index(){
        $sql = 'select * from ci_news';
        $result = $this->db->query($sql);
        return $result->result_array();

    }

}