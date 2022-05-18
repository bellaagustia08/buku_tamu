<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}
 
	public function index(){
		echo "ini method index pada controller belajar";
	}
 
	public function halo(){
        //parsing data ke view CI
        // $data['nama_web'] = "malasngoding.com";

        // atau bisa juga
        $data = array(
            'judul' => "Cara Membuat View Pada CodeIgniter",
            'tutorial' => "CodeIgniter"
        );

        // echo "ini method halo pada controller belajar";
        $this->load->view('ngoding/view_belajar', $data);
	}
 
}