<?php

/*
 * @author: Alysson Ajackson
 * @date: Wed Apr 10 22:10:15 BRT 2013
 * */
class Ajax_sample extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    /*
     * show list as a table, get data from "test_model"
     * */
    function get_list_view(){

        $this->load->model('test_model');

        $data = array();

        $data['title'] = 'Lorem ipsum';
        $data['list'] = $this->test_model->get_data();

        $this->load->view('sample_table', $data);

    }

    function index(){
        $this->load->view('test_page');
    }

}
