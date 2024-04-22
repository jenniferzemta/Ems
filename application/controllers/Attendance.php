<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect(base_url().'login');
        }
    }


    public function index()
    {
        $data['staff']=$this->Staff_model->select_staff();
        $this->load->view('admin/header');
        $this->load->view('admin/add-attendance',$data);
        $this->load->view('admin/footer');
    }


    public function manage_attendance()
    {
        $data['content']=$this->Attendance_model->select_attendance();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-attendance',$data);
        $this->load->view('admin/footer');
    }
    


    
    
    public function insert()
    {
        $this->form_validation->set_rules('slcstaff', 'Staff', 'required');
        $this->form_validation->set_rules('txtdod', 'Date of day', 'required');
        $this->form_validation->set_rules('txtsit', 'Sign in time', 'required');
        $this->form_validation->set_rules('txtsot', 'Sign out time', 'required');

        $staff=$this->input->post('slcstaff');
        $dod=$this->input->post('txtdod');
        $sit=$this->input->post('txtsit');
        $sot=$this->input->post('txtsot');
       
        
       
        $data=$this->Attendance_model->insert_attendance(array('staff_name'=>$staff,'atten_date'=>$dod,'signin_time'=>$sit,'signout_time'=>$sot));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New Attendance added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New Attendance Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


    
    


    function edit($id)
    {
        $data['content']=$this->Attendance_model->select_attendance_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-attendance',$data);
        $this->load->view('admin/footer');
    }

   
    

    function delete($id)
    {
        $data=$this->Attendance_model->delete_attendance($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Attendance Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Attendance Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


}