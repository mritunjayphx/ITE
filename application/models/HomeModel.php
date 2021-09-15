<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class HomeModel extends CI_Model {


#################################################
#
#   ADMIN DASHBOARD
#
################################################

function total_number_of_signups(){
    $res=$this->db->query('SELECT count(*) as total FROM tblusers');
    $result= $res->row_array();
    return $result['total'];
}

function total_number_of_users_paid_signups(){
    $res=$this->db->query('SELECT count(*) as total FROM tblusers where user_status=1');
    $result= $res->row_array();
    return $result['total'];
}


function total_number_of_active_users_who_have_done_one_task_in_past_x_days(){
    //$res=$this->db->query("SELECT count(*) as total FROM tblusertasks where status=1 and utask_created_date ='-30'  ");
    $res=$this->db->query("SELECT count(*) as total FROM tblusertasks ");
    $result= $res->row_array();
    return $result['total'];
}


function total_number_of_tasks_done(){ 
    $res=$this->db->query("SELECT count(*) as total FROM tblusertasks where task_status=2 ");
    $result= $res->row_array();
    return $result['total'];
}


function no_of_active_tasks(){
    $res=$this->db->query("SELECT count(*) as total FROM tbltasks where task_status=1 ");
    $result= $res->row_array();
    return $result['total'];
}


function no_of_total_tasks(){
    $res=$this->db->query("SELECT count(*) as total FROM tbltasks where task_status=1 ");
    $result= $res->row_array();
    return $result['total'];
}


function total_Payment_done_till_date(){
  $res=$this->db->query("SELECT count(*) as total FROM tbltransactions ");
  $result= $res->row_array();
  return $result['total'];
}


function payment_released_in_last_30_days(){
    $res=$this->db->query("SELECT count(*) as total FROM tbltransactions where trans_created_date = Date(trans_created_date)  and trans_description='payment released' ");
    $result= $res->row_array();
    return $result['total'];
}


function tasks_completed_in_last_30_days(){
    $res=$this->db->query("SELECT count(*) as total FROM tbltasks where task_created_date = Date('trans_created_date') ");
    $result= $res->row_array();
    return $result['total'];
}

function meetings_done_in_last_30_days(){
    $res=$this->db->query("SELECT count(*) as total FROM tblmeetings where meeting_created_date = Date('meeting_created_date') ");
    $result= $res->row_array();
    return $result['total'];
}

function new_users_added_in_last_30_days(){
    $res=$this->db->query("SELECT count(*) as total FROM tblusers where user_created_date = Date('user_created_date')-30 ");
    $result= $res->row_array();
    return $result['total'];
}

function new_signups_in_last_30_days(){
    $res=$this->db->query("SELECT count(*) as total FROM tblusers where user_created_date = Date('user_created_date')-30 ");
    $result=$res->row_array();
    return $result['total'];
  }

function no_of_managers(){
    $res=$this->db->query("SELECT count(*) as total FROM tblmanagers ");
    $result= $res->row_array();
    return $result['total'];
  }



  ###########################################################################
  #
  #                 Manager Dashboard
  #
  ###########################################################################

function total_signups(){
    $res=$this->db->query("SELECT count(*) as total FROM tblusers ");
    $result= $res->row_array();
    return $result['total'];
  }


function users_under_manager(){
    $res=$this->db->query("SELECT count(*) as total FROM tblmanagers ");
    $result= $res->row_array();
    return $result['total'];
  }


function total_complated_tasks(){
    $res=$this->db->query("SELECT count(*) as total FROM tbltasks where status=2 ");
    $result= $res->row_array();
    return $result['total'];
  }


function total_meeting_schedue_by_manager(){
    $res=$this->db->query("SELECT count(*) as total FROM tblmeetings where manager_id=2 ");
    $result= $res->row_array();
    return $result['total'];
  }


function pending_payment_requests(){
    $res=$this->db->query("SELECT count(*) as total FROM tblwithdrawal_requests where manager_id=2 ");
    $result= $res->row_array();
    return $result['total'];
  }



function review_tasks(){
    $res=$this->db->query("SELECT count(*) as total FROM tbluser_tasks where utask_status=1 and utask_manager_id=2 ");
    $result= $res->row_array();
    return $result['total'];
  }



  ###########################################################################
  #
  #                 User Dashboard
  #
  ###########################################################################


function latest_anouncement_list(){
    $res=$this->db->query("SELECT *  FROM tblannouncements where ancmnt_manager_id=2 ");
    $result= $res->result_array();
    return $result;
  }

  function total_tasks(){
    $res=$this->db->query("SELECT count(*) as total  FROM tbluser_tasks where tasks_user_id=2  ");
    $result= $res->row_array();
    return $result['total'];
  }

  function total_verified_tasks(){
    $res=$this->db->query("SELECT count(*) as total  FROM tbluser_tasks where tasks_user_id=2 and status= 1 ");
    $result= $res->row_array();
    return $result['total'];
  }


  function total_earnings(){
    $res=$this->db->query("SELECT count(*) as total  FROM tbltransactions where trans_user_id=2 and status= 1 ");
    $result= $res->row_array();
    return $result['total'];
  }

function unclaimed_earnings(){
    $res=$this->db->query("SELECT count(*) as total  FROM tbltransactions where trans_user_id=2 and status= 1 ");
    $result= $res->row_array();
    return $result['total'];
  }






}
