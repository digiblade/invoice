<?php 
defined("BASEPATH") OR exit('No direct script access allowed');
class Front extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("GlobalModel","gm");
    }
    public function index(){
        $data = $this->gm->getRoute("dashboard","");
        $this->load->view("header",$data);
        $this->load->view("dashboard");
        $this->load->view("footer");
    }
    public function createCustomer(){
        $data = $this->gm->getRoute("customer","create");
        $this->load->view("header",$data);
        $this->load->view("Customer/addCustomer");
        $this->load->view("footer");
    }
}