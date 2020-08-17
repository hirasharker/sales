<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Incentive_Model extends CI_Model {

    public function get_all_incentives(){
        $this->db->select('*');
        $this->db->from('tbl_incentive');
        $this->db->order_by('tbl_incentive.time_stamp','desc');
        $result_query=$this->db->get();
        $result=$result_query->result();
        return $result;
    }

    public function get_incentive_by_id($incentive_id){
        $this->db->select('*');
        $this->db->from('tbl_incentive');
        $this->db->where('incentive_id',$incentive_id);
        $result_query=$this->db->get();
        $result=$result_query->row();
        return $result;
    }
    
    public function add_incentive($data){
        $this->db->insert('tbl_incentive',$data);
        $result=$this->db->insert_id();
        return $result;
    }
   
    public function update_incentive($data,$incentive_id){
        
        $this->db->where('incentive_id',$incentive_id);
        $this->db->update('tbl_incentive',$data);
    }
   
    public function delete_incentive($incentive_id){
        $this->db->where('incentive_id',$incentive_id);
        $this->db->delete('tbl_incentive');
    }
    // $this->db->select("CONCAT((first_name),(' '),(middle_name),(' '),(last_name)) as candidate_full_name");
    public function get_incentive_like_name_and_id($keyword){
        $this->db->select('incentive_id, incentive_name, CONCAT(incentive_id,("/"),incentive_name) as incentive_data');
        $this->db->like('incentive_id', $keyword);
        $this->db->or_like('incentive_name', $keyword);
        $query = $this->db->get('tbl_incentive');
        if($query->num_rows() > 0){
          foreach ($query->result_array() as $row){
            $row_set[] = htmlentities(stripslashes($row['incentive_data'])); //build an array
          }
          echo json_encode($row_set); //format the array into json data
        }
    }
}
?>
