<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Sales extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('prospect_model','prospect_model',TRUE);
		$this->load->model('employee_model','employee_model',TRUE);
		
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
		echo "<h2 style='color:#f00;'> Access not Allowed!!! </h2>";
	}

	public function add_prospect()
	{
		$api_key									=	$this->input->get('api_key','',TRUE);

		if($api_key != '44181470316f29fd32eb35792a2feb8e'){
			echo "<h3 style='color:#f00;'> invalid key!!! </h3>";
		} else {
			$prospect_data								=	array();

			$prospect_data['customer_name']				=	$this->input->get('customer_name','',TRUE);
			$prospect_data['model_id']					=	$this->input->get('model_id','',TRUE);
			$prospect_data['phone_no']					=	$this->input->get('phone_no','',TRUE);
			$prospect_data['present_address']			=	$this->input->get('present_address','',TRUE);
			$prospect_data['input_address']				=	$this->input->get('input_address','',TRUE);
			$prospect_data['remarks']					=	$this->input->get('remarks','',TRUE);
			$prospect_data['employee_id']				=	$this->input->get('employee_id','',TRUE);

			$error 										=	array();

			if($prospect_data['customer_name'] == '' || !isset($prospect_data['customer_name'])){
				 $error[] 	= 			'customer name required!';
			}

			if($prospect_data['model_id'] == '' || !isset($prospect_data['model_id'])){
				 $error[] 	= 			'Model required!';
			}

			if(!is_numeric($prospect_data['model_id'])){
				 $error[] 	= 			'Model ID must be numeric!';
			}

			if(strlen((string)$prospect_data['model_id']) > 2){
				 $error[] 	= 			'Model id length Exceeded required length';
			}

			if($prospect_data['employee_id'] == '' || !isset($prospect_data['employee_id'])){
				 $error[] 	= 			'Sales Person ID required!';
			}

			if(!is_numeric($prospect_data['employee_id'])){
				 $error[] 	= 			'Sales Person ID must be numeric!';
			}

			if(strlen((string)$prospect_data['employee_id']) > 6){
				 $error[] 	= 			'employee id length Exceeded required length';
			}

			if($prospect_data['phone_no'] == '' || !isset($prospect_data['phone_no'])){
				 $error[] 	= 			'phone_no required!';
			}

			if($prospect_data['present_address'] == '' || !isset($prospect_data['present_address'])){
				 $error[] 	= 			'present_address required!';
			}

			if($prospect_data['input_address'] == '' || !isset($prospect_data['input_address'])){
				 $error[] 	= 			'input_address required!';
			}
	        
			if(empty($error)){
				$result										=	$this->prospect_model->add_prospect($prospect_data);
				echo $result;
			} else {
				// echo '<pre>';print_r($error); echo '</pre>';
				foreach ($error as $key => $value) {
					echo $value;
					echo '<br/>';
				}
			}
		} //if($api_key != '44181470316f29fd32eb35792a2feb8e'){

		
	}
}


