<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        //$this->load->model('login_model');

    }

public function index(){

	$this->_layout('index');
}

public function _layout(){

	$this->load->view("layout/header");

	$this->load->view("home");

	$this->load->view("layout/footer");
}

	}