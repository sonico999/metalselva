<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class welcome extends CI_Controller {
    
    //cargar librerias
    public function __construct() {
        parent::__construct();
        //cargamos el modelo usersModel
        $this->load->model('usersModel');
    }
    
    public function index() {
        //enviamos datos
        $data['nombre']='ever';
        $data['twitter']='ever_vasquez06';
        $this->load->view('welcome_message',$data);
        //$this->load->view('welcome_message');
    }

}
