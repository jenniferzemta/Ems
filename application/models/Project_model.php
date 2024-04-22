
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {


    function insert_project($data)
    {
        $this->db->insert("project",$data);
        return $this->db->insert_id();
    }

    function select_project()
    {
        $this->db->order_by('project.id','DESC');
        $this->db->select("project.*,staff_tbl.staff_name");
        $this->db->from("project");
        $this->db->join("staff_tbl",'staff_tbl.id=project.staff_name');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }
    
    function delete_project($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("project");
        $this->db->affected_rows();
    }

    
    function update_project($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('project',$data);
        $this->db->affected_rows();
    }

    

    
   
    

    




}
