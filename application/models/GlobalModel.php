<?php
defined("BASEPATH") OR exit('No direct script access allowed');
class GlobalModel extends CI_Model{
    public function __construct(){
        parent::__construct();

    }
    public function getRoute($route, $sub){
      
        $data['main'] = $route;
        $data['sub'] = $sub;
        return $data;
     
    }
}