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

    public function showMsg($page = 'home'){
        if(!file_exists(APPPATH.'views/'.$page.'.php')){
            show_404();
        }
        $data['title'] = ucfirst($page);
        $msg = $this->news_model->index();
        $data['msg'] = $msg;
        $this->load->view('news',$data);
    }

}