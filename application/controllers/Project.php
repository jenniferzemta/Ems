<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

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
        $this->load->view('admin/add-project',$data);
        $this->load->view('admin/footer');
    }


    public function manage_project()
    {
        $data['content']=$this->Project_model->select_project();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-project',$data);
        $this->load->view('admin/footer');
    }
    

    public function insert()
    {
        
        
        $this->form_validation->set_rules('slcstaff', 'Staff', 'required');
        $this->form_validation->set_rules('txtname', 'Name Project', 'required');
        $this->form_validation->set_rules('txtdob', 'Date_deb', 'required');
        $this->form_validation->set_rules('txtdof', 'Date_fin', 'required');
        $this->form_validation->set_rules('slcstatut', 'Statut', 'required');

        $pname=$this->input->post('txtname');
        $staff=$this->input->post('slcstaff');
        $dd=$this->input->post('txtdob');
        $sd=$this->input->post('txtdof');
        
        $statut=$this->input->post('slcstatut');
       
        
       
        $data=$this->Project_model->insert_project(array('staff_name'=>$staff,'pname'=>$pname,'duedate'=>$dd,'subdate'=>$sd,'status'=>$statut));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New Project added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New Project Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


    
    function delete($id)
    {
        $this->Home_model->delete_login_byID($id);
        $data=$this->Project_model->delete_project($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Project Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Project Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


}  
    