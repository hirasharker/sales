<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Tiv_Model extends CI_Model {

    public function get_all_tivs(){
        $this->db->select('*');
        $this->db->from('tbl_tiv');
        $this->db->order_by('tbl_tiv.time_stamp','desc');
        $result_query=$this->db->get();
        $result=$result_query->result();
        return $result;
    }

    public function get_all_tivs_by_date($tiv_month, $end_date){
        $this->db->select('tbl_zone.*, tbl_sub_tiv.tiv_month, tbl_sub_tiv.tiv_volume, tbl_sub_tiv.incentive_amount, count(tbl_customer.customer_id) as market_share');
        $this->db->from('tbl_zone');
        
        $this->db->join('(select * from tbl_tiv where tbl_tiv.tiv_month = "'.$tiv_month.'") as tbl_sub_tiv','tbl_zone.zone_id = tbl_sub_tiv.zone_id','left',NULL);
        $this->db->join('tbl_customer','tbl_zone.zone_id = tbl_customer.zone_id','left');

        $this->db->where('tbl_customer.status >= ',8);
        $this->db->where('tbl_customer.status <= ',9);

        $this->db->where('STR_TO_DATE(tbl_customer.do_update_time, "%Y-%m-%d") >=',$tiv_month);
        $this->db->where('STR_TO_DATE(tbl_customer.do_update_time, "%Y-%m-%d") <=',$end_date);
        
        $this->db->group_by('tbl_customer.zone_id');
        $result_query=$this->db->get();
        $result=$result_query->result();
        return $result;
    }

    public function get_tiv_by_zone_and_month($zone_id, $tiv_month){
        $this->db->select('*');
        $this->db->from('tbl_tiv');
        $this->db->where('zone_id',$zone_id);
        $this->db->where('tiv_month',$tiv_month);
        $result_query=$this->db->get();
        $result=$result_query->row();
        return $result;
    }


    public function get_tiv_by_id($tiv_id){
        $this->db->select('*');
        $this->db->from('tbl_tiv');
        $this->db->where('tiv_id',$tiv_id);
        $result_query=$this->db->get();
        $result=$result_query->row();
        return $result;
    }


    

    public function add_tiv($data){
        $this->db->insert('tbl_tiv',$data);
        $result=$this->db->insert_id();
        return $result;
    }
   
    public function update_tiv($zone_id, $tiv_month, $tiv_data){
        
        $this->db->where('zone_id',$zone_id);
        $this->db->where('tiv_month',$tiv_month);
        $this->db->update('tbl_tiv',$tiv_data);

    }


    public function delete_tiv($tiv_id){
        $this->db->where('tiv_id',$tiv_id);
        $this->db->delete('tbl_tiv');
        $result = $this->db->affected_rows();
        return $result;
    }
    // $this->db->select("CONCAT((first_name),(' '),(middle_name),(' '),(last_name)) as candidate_full_name");
    public function get_tiv_like_name_and_id($keyword){
        $this->db->select('tiv_id, tiv_name, CONCAT(tiv_id,("/"),tiv_name) as tiv_data');
        $this->db->like('tiv_id', $keyword);
        $this->db->or_like('tiv_name', $keyword);
        $query = $this->db->get('tbl_tiv');
        if($query->num_rows() > 0){
          foreach ($query->result_array() as $row){
            $row_set[] = htmlentities(stripslashes($row['tiv_data'])); //build an array
          }
          echo json_encode($row_set); //format the array into json data
        }
    }
}
?>
