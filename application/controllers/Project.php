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

    public function manage()
    {
        $data['content']=$this->Project_model->select_project();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-project',$data);
        $this->load->view('admin/footer');
    }
    

    
    

    public function insert()
    {
        $this->load->helper('form');
        $this->form_validation->set_rules('txtname', 'Name Project', 'required');
        $this->form_validation->set_rules('slcstaff', 'Staff', 'required');
        $this->form_validation->set_rules('txtdob', 'Date_deb', 'required');
        $this->form_validation->set_rules('txtdob', 'Date_fin', 'required');
        $this->form_validation->set_rules('slcstatut', 'Statut', 'required');

        
        $id=$this->input->post('txtid');
        $name=$this->input->post('txtname');
        $staff=$this->input->post('slcstaff');
        $dob=$this->input->post('txtdob');
        $dob=$this->input->post('txtdob');
        $statut=$this->input->post('slcstatut');
       
        $data=$this->Project_model->insert_project(array('project_id'=>$id,'staff_name'=>$staff,'pname'=>$name,'duedate'=>$dob,'subdate'=>$dob,'statut'=>$statut
    ));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New Project Added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New Project Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    


    
    public function update()
    {
        $id=$this->input->post('txtid');
        $department=$this->input->post('txtdepartment');
        $data=$this->Department_model->update_department(array('department_name'=>$department),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Project Updated Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, project Update Failed.");
        }
        redirect(base_url()."department/manage_project");
    }


    function edit($id)
    {
        $data['content']=$this->Project_model->select_project_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-project',$data);
        $this->load->view('admin/footer');
    }


    


    function delete($id)
    {
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


    


        
    
