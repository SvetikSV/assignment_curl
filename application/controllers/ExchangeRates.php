<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExchangeRates extends CI_Controller {

	public function index(){
	$this->output->cache(10);
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5',
		CURLOPT_USERAGENT => 'Codular Sample cURL Request'
	));
	
	$resp = curl_exec($curl);
	curl_close($curl);
	$data["exchange_rates"]=json_decode($resp);
	$this->load->model('exchange_rates_model');
	$this->exchange_rates_model->insertExchangeRates($data);
	$this->load->view('exchange_rates',$data);
	}
	
	function history(){
	$this->load->library('table');
	$query = $this->db->query("SELECT * FROM exchange_rates");
	echo $this->table->generate($query);
	$this->load->view('history',$query);
	}
}
