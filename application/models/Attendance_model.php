
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_model extends CI_Model {


    function insert_attendance($data)
    {
        $this->db->insert("attendance",$data);
        return $this->db->insert_id();
    }

    
    function select_attendance()
    {
        $this->db->order_by('attendance.id','DESC');
        $this->db->select("attendance.*,staff_tbl.staff_name");
        $this->db->from("attendance");
        $this->db->join("staff_tbl",'staff_tbl.id=attendance.staff_name');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_attendance_byID($id)
    {
        $this->db->where('attendance.id',$id);
        $this->db->select("attendance.*,staff_tbl.staff_name");
        $this->db->from("attendance");
        $this->db->join("staff_tbl",'staff_tbl.id=attendance.staff_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    
    
    public function getTotalAttendanceDataByID($staff_id, $date_from, $date_to)
    {
      $sql = "SELECT TRUNCATE((SUM(ABS(( TIME_TO_SEC( TIMEDIFF( `signin_time`, `signout_time` ) ) )))/3600), 1) AS Hours FROM `attendance` WHERE (`attendance`.`staff_id`='$staff_id') AND (`atten_date` BETWEEN '$date_from' AND '$date_to') AND (`attendance`.`status` = 'A')";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    
    


    function delete_attendance($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("attendance");
        $this->db->affected_rows();
    }

    
    function update_attendance($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('attendance',$data);
        $this->db->affected_rows();
    }

    

    
    




    
    

    
   
    

    




}
