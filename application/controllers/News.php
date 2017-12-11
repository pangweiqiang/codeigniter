<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/4/25
 * Time: 16:28
 */
class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
    }

    public function showMsg($page = ''){

        $msg = $this->news_model->index($page);echo json_encode($msg);exit;
        $data['msg'] = $msg;
        $this->load->view('news',$data);
    }

}