<?php 


class Admin extends Controller{

	public function __construct(){

    $this->view('templates/v_nav_admin');
    $this->view('templates/v_nav_admin');
    $this->view('templates/v_nav_fotter');
  }



    public function index(){
      $data = [
        'title' => 'Laman Admin',
        'description' => 'Selamat datang admin'
      ];

      $this->view('admin/index', $data);
    }

    public function dashboard(){

    	$data = [

    		'title' => 'Dashboard'

    	];

    	$this->view('admin/dashboard', $data);
    }
}