<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Managers extends CI_Controller {

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
		$data= array();
		$data['page_title']="Managers";
		$data['page_name']="managers";
		$this->load->view('backend/include/header',$data);
		$this->load->view('backend/managers',$data);
		$this->load->view('backend/include/footer',$data);
	}
	
	public function view_manager()
	{
		$data= array();
		$data['page_title']="managers / View-details";
		$data['page_name']="view-managers";
		$this->load->view('backend/include/header',$data);
		$this->load->view('backend/view-manager',$data);
		$this->load->view('backend/include/footer',$data);
	}	
	
	
}
