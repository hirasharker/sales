<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Incentive extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		if($this->session->userdata('employee_id')==NULL){
			redirect('login','refresh');
		}
		if($this->session->userdata('role')!=15){
			redirect('dashboard','refresh');
		}
		$this->load->model('zone_model','zone_model',TRUE);
		$this->load->model('incentive_model','incentive_model',TRUE);
		$this->load->model('employee_model','employee_model',TRUE);
		$this->load->model('model_model','model_model',TRUE);
		$this->load->model('tiv_model','tiv_model',TRUE);
		$this->load->model('sales_target_model','ta_model',TRUE);

		$this->load->library('datelib');
		
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data               				=   array();
		$incentive_data 					=	array();
		
		$incentive_data['zone_list']		=	$this->zone_model->get_all_zones();
		// $incentive_data['incentive_list']	=	$this->incentive_model->get_all_incentives();
		$incentive_data['employee_list']	=	$this->employee_model->get_all_employees();
		$incentive_data['model_list']		=	$this->model_model->get_all_models();

		

        $data['navigation'] =   $this->load->view('template/navigation','',TRUE);
        $data['content']    =   $this->load->view('pages/incentive/incentive',$incentive_data,TRUE);
        $data['footer']     =   $this->load->view('template/footer','',TRUE);
		$this->load->view('template/main_template',$data);
	}

	public function add_incentive()
	{
		$incentive_data						=	array();

		$incentive_data['user_id']			=	$this->session->userdata('employee_id');
		$incentive_data['user_name']		=	$this->session->userdata('email_id');
		$incentive_data['rm_id']			=	$this->input->post('rm_id','',TRUE);
		$incentive_data['incentive_name']	=	$this->input->post('incentive_name','',TRUE);
		$incentive_data['incentive_code']	=	$this->input->post('incentive_code','',TRUE);
		$incentive_data['zone_id']			=	$this->input->post('zone_id','',TRUE);

		$result								=	$this->incentive_model->add_incentive($incentive_data);

		redirect('incentive/index','refresh');
	}

	public function update_model_wise_incentive()
	{
		$incentive_data						=	array();

		$model_id 							=	$this->input->post('model_id','',TRUE);

		$incentive_data['incentive_credit']	=	$this->input->post('incentive_credit',0,TRUE);

		$incentive_data['incentive_semicash']	=	$this->input->post('incentive_semicash',0,TRUE);

		$incentive_data['incentive_cash']	=	$this->input->post('incentive_cash',0,TRUE);

		$result								=	$this->model_model->update_model($incentive_data,$model_id);

		redirect('incentive/index','refresh');
	}



	public function generate_tiv(){
		$report_data										=	array();
		$tiv_data											=	array();

		$tiv_date											=	$this->input->post('tiv_date');

		$tiv_month 											=	$this->datelib->first_day_of_the_month($tiv_date);

		$end_date 											=	$this->datelib->last_day_of_the_month($tiv_date);

		
		$tiv_data['tiv_list']								=	$this->tiv_model->get_all_tivs_by_date($tiv_month, $end_date);

		$tiv_data['tiv_month']								=	$tiv_month;
		
        $report_data['content']								=	$this->load->view('pages/incentive/tiv_table',$tiv_data,TRUE);
		
		echo json_encode($report_data['content']);
		// echo json_encode($start_date);
			// a die here helps ensure a clean ajax call
			die();
	}


	public function ajax_update_tiv(){
		$report_data										=	array();
		$tiv_data											=	array();
		$output_data 										=	array();

		$tiv_data['user_id']								=	$this->session->userdata('employee_id');

		$zone_id											=	$this->input->post('zone_id');

		$tiv_month											=	$this->input->post('tiv_month');

		

		$tiv_data['tiv_volume']								=	$this->input->post('tiv_volume');

		$tiv_data['incentive_amount']						=	$this->input->post('incentive_amount');

		$found_tiv											=	$this->tiv_model->get_tiv_by_zone_and_month($zone_id, $tiv_month);

		if($found_tiv){
		
			$result												=	$this->tiv_model->update_tiv($zone_id, $tiv_month, $tiv_data);
		
		}else {

			$tiv_data['zone_id']								=	$zone_id;

			$tiv_data['tiv_month']								=	$tiv_month;

			$result												=	$this->tiv_model->add_tiv($tiv_data);
		} 

		

		
		echo json_encode($tiv_data);
		// echo json_encode($start_date);
			// a die here helps ensure a clean ajax call
			die();
	}





	public function generate_ta(){
		$report_data										=	array();
		$ta_data											=	array();

		$ta_date											=	$this->input->post('ta_date');

		$ta_month 											=	$this->datelib->first_day_of_the_month($ta_date);

		$end_date 											=	$this->datelib->last_day_of_the_month($ta_date);

		$ta_data['ta_list']									=	$this->ta_model->get_all_ta_by_date($ta_month, $end_date);

		$ta_data['ta_month']								=	$ta_month;
		
        $report_data['content']								=	$this->load->view('pages/incentive/ta_table',$ta_data,TRUE);
		
		echo json_encode($report_data['content']);
		// echo json_encode($start_date);
			// a die here helps ensure a clean ajax call
			die();
	}


	public function ajax_update_ta(){
		$report_data										=	array();
		$tiv_data											=	array();
		$output_data 										=	array();

		$tiv_data['user_id']								=	$this->session->userdata('employee_id');

		$zone_id											=	$this->input->post('zone_id');

		$tiv_month											=	$this->input->post('tiv_month');

		

		$tiv_data['tiv_volume']								=	$this->input->post('tiv_volume');

		$tiv_data['incentive_amount']						=	$this->input->post('incentive_amount');

		$found_tiv											=	$this->tiv_model->get_tiv_by_zone_and_month($zone_id, $tiv_month);

		if($found_tiv){
		
			$result												=	$this->tiv_model->update_tiv($zone_id, $tiv_month, $tiv_data);
		
		}else {

			$tiv_data['zone_id']								=	$zone_id;

			$tiv_data['tiv_month']								=	$tiv_month;

			$result												=	$this->tiv_model->add_tiv($tiv_data);
		} 

		

		
		echo json_encode($tiv_data);
		// echo json_encode($start_date);
			// a die here helps ensure a clean ajax call
			die();
	}







	public function delete_tiv($tiv_id)
	{
		$result					=	$this->tiv_model->delete_tiv($tiv_id);
		return $result;
	}


}
