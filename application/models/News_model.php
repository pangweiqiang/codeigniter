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

    public function index($page){
        //$this->db->cache_delete('news','showmsg');
        //$this->db->cache_delete_all();exit;
        $sql = 'select * from ci_news where id = ?';
        $this->db->cache_on();
        $result = $this->db->query($sql,$page);
        $this->db->cache_off();
        return $result->result_array();

    }
    public function test1(){

    }

}