<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Target_Model extends CI_Model {

    public function get_all_targets(){
        $this->db->select('*');
        $this->db->from('tbl_sales_target');
        $this->db->order_by('tbl_sales_target.time_stamp','desc');
        $result_query=$this->db->get();
        $result=$result_query->result();
        return $result;
    }

    public function get_all_targets_by_date($target_month, $end_date){
        $this->db->select('tbl_employee.*, tbl_sales_target.');
        $this->db->from('tbl_zone');
        
        $this->db->join('(select * from tbl_sales_target where tbl_sales_target.target_month = "'.$target_month.'") as tbl_sub_target','tbl_zone.zone_id = tbl_sub_target.zone_id','left',NULL);
        $this->db->join('tbl_customer','tbl_zone.zone_id = tbl_customer.zone_id','left');

        $this->db->where('tbl_customer.status >= ',8);
        $this->db->where('tbl_customer.status <= ',9);

        $this->db->where('STR_TO_DATE(tbl_customer.do_update_time, "%Y-%m-%d") >=',$target_month);
        $this->db->where('STR_TO_DATE(tbl_customer.do_update_time, "%Y-%m-%d") <=',$end_date);
        
        $this->db->group_by('tbl_customer.zone_id');
        $result_query=$this->db->get();
        $result=$result_query->result();
        return $result;
    }


    public function get_all_targets_by_date($target_month, $end_date){
        $this->db->select('tbl_zone.*, tbl_sub_target.target_month, tbl_sub_target.target_volume, tbl_sub_target.incentargete_amount, count(tbl_customer.customer_id) as market_share');
        $this->db->from('tbl_zone');
        
        $this->db->join('(select * from tbl_sales_target where tbl_sales_target.target_month = "'.$target_month.'") as tbl_sub_target','tbl_zone.zone_id = tbl_sub_target.zone_id','left',NULL);
        $this->db->join('tbl_customer','tbl_zone.zone_id = tbl_customer.zone_id','left');

        $this->db->where('tbl_customer.status >= ',8);
        $this->db->where('tbl_customer.status <= ',9);

        $this->db->where('STR_TO_DATE(tbl_customer.do_update_time, "%Y-%m-%d") >=',$target_month);
        $this->db->where('STR_TO_DATE(tbl_customer.do_update_time, "%Y-%m-%d") <=',$end_date);
        
        $this->db->group_by('tbl_customer.zone_id');
        $result_query=$this->db->get();
        $result=$result_query->result();
        return $result;
    }

    public function get_target_by_zone_and_month($zone_id, $target_month){
        $this->db->select('*');
        $this->db->from('tbl_sales_target');
        $this->db->where('zone_id',$zone_id);
        $this->db->where('target_month',$target_month);
        $result_query=$this->db->get();
        $result=$result_query->row();
        return $result;
    }


    public function get_target_by_id($target_id){
        $this->db->select('*');
        $this->db->from('tbl_sales_target');
        $this->db->where('target_id',$target_id);
        $result_query=$this->db->get();
        $result=$result_query->row();
        return $result;
    }


    

    public function add_target($data){
        $this->db->insert('tbl_sales_target',$data);
        $result=$this->db->insert_id();
        return $result;
    }
   
    public function update_target($zone_id, $target_month, $target_data){
        
        $this->db->where('zone_id',$zone_id);
        $this->db->where('target_month',$target_month);
        $this->db->update('tbl_sales_target',$target_data);

    }


    public function delete_target($target_id){
        $this->db->where('target_id',$target_id);
        $this->db->delete('tbl_sales_target');
        $result = $this->db->affected_rows();
        return $result;
    }
    // $this->db->select("CONCAT((first_name),(' '),(middle_name),(' '),(last_name)) as candidate_full_name");
    public function get_target_like_name_and_id($keyword){
        $this->db->select('target_id, target_name, CONCAT(target_id,("/"),target_name) as target_data');
        $this->db->like('target_id', $keyword);
        $this->db->or_like('target_name', $keyword);
        $query = $this->db->get('tbl_sales_target');
        if($query->num_rows() > 0){
          foreach ($query->result_array() as $row){
            $row_set[] = htmlentities(stripslashes($row['target_data'])); //build an array
          }
          echo json_encode($row_set); //format the array into json data
        }
    }
}
?>
