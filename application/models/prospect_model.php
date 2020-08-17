<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Prospect_Model extends CI_Model {

    public function get_all_prospects(){
        $this->db->select('tbl_prospect.*,tbl_zonal_head.employee_name as zonal_head,
                          tbl_head_of_sales.employee_name as head_of_sales,
                          tbl_coordinator.employee_name as coordinator');
        $this->db->from('tbl_prospect');
        $this->db->join('tbl_employee as tbl_zonal_head','tbl_prospect.zhead_id = tbl_zonal_head.employee_id','left');
        $this->db->join('tbl_employee as tbl_head_of_sales','tbl_prospect.head_of_sales_id = tbl_head_of_sales.employee_id','left');
        $this->db->join('tbl_employee as tbl_coordinator','tbl_prospect.coordinator_id = tbl_coordinator.employee_id','left');
        $this->db->order_by('time_stamp','desc');
        $result_query=$this->db->get();
        $result=$result_query->result();
        return $result;
    }

    public function get_prospect_by_id($prospect_id){
        $this->db->select('*');
        $this->db->from('tbl_prospect');
        $this->db->where('prospect_id',$prospect_id);
        $result_query=$this->db->get();
        $result=$result_query->row();
        return $result;
    }

    
    public function add_prospect($data){
        $this->db->insert('tbl_prospect',$data);
        $result=$this->db->insert_id();
        return $result;
    }
   
    public function update_prospect($data,$prospect_id){
        
        $this->db->where('prospect_id',$prospect_id);
        $this->db->update('tbl_prospect',$data);
    }
   
    public function delete_prospect($prospect_id){
        $this->db->where('prospect_id',$prospect_id);
        $this->db->delete('tbl_prospect');
    }
    // $this->db->select("CONCAT((first_name),(' '),(middle_name),(' '),(last_name)) as candidate_full_name");
    public function get_prospect_like_name_and_id($keyword){
        $this->db->select('prospect_id, prospect_name, CONCAT(prospect_id,("/"),prospect_name) as prospect_data');
        $this->db->like('prospect_id', $keyword);
        $this->db->or_like('prospect_name', $keyword);
        $query = $this->db->get('tbl_prospect');
        if($query->num_rows() > 0){
          foreach ($query->result_array() as $row){
            $row_set[] = htmlentities(stripslashes($row['prospect_data'])); //build an array
          }
          echo json_encode($row_set); //format the array into json data
        }
    }
}
?>
