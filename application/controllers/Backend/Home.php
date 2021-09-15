<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function dashboard()
	{

		$data['total_Number_of_Signups']=$this->HomeModel->total_number_of_signups();
		$data['total_number_of_users_paid_signups']=$this->HomeModel->total_number_of_users_paid_signups();
		$data['total_number_of_active_users_who_have_done_one_task_in_past_x_days']=$this->HomeModel->total_number_of_active_users_who_have_done_one_task_in_past_x_days();
		$data['total_number_of_tasks_done']=$this->HomeModel->total_number_of_tasks_done();
		$data['no_of_active_tasks']=$this->HomeModel->no_of_active_tasks();
		$data['no_of_total_tasks']=$this->HomeModel->no_of_total_tasks();
		$data['total_Payment_done_till_date']=$this->HomeModel->total_Payment_done_till_date();
		$data['payment_released_in_last_30_days']=$this->HomeModel->payment_released_in_last_30_days();
		$data['tasks_completed_in_last_30_days']=$this->HomeModel->tasks_completed_in_last_30_days();
		$data['meetings_done_in_last_30_days']=$this->HomeModel->meetings_done_in_last_30_days();
		$data['new_users_added_in_last_30_days']=$this->HomeModel->new_users_added_in_last_30_days();
		$data['new_signups_in_last_30_days']=$this->HomeModel->new_signups_in_last_30_days();
		$data['no_of_managers']=$this->HomeModel->no_of_managers();


		$this->load->view('backend/include/header',$data);
		$this->load->view('backend/index',$data);
		$this->load->view('backend/include/footer',$data);
	}




}
