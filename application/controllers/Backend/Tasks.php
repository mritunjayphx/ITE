<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$data=array();
		$this->load->view('backend/include/header',$data);
		$this->load->view('backend/tasks',$data);
		$this->load->view('backend/include/footer',$data);
	}
	
	public function viewTask()
	{
		$data=array();
		$this->load->view('backend/include/header',$data);
		$this->load->view('backend/taskDetails',$data);
		$this->load->view('backend/include/footer',$data);
	}	
	
	public function addTask()
	{
		$data=array();
		$this->load->view('backend/include/header',$data);
		$this->load->view('backend/addTask',$data);
		$this->load->view('backend/include/footer',$data);
	}

}
