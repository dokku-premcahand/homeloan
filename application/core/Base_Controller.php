<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        
        $this->init();
    }
    
    public function init(){
        
    }
}