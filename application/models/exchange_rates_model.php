<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exchange_rates_model extends CI_Model {
	
	function insertExchangeRates($data) {
		$sql="";
		foreach($data["exchange_rates"] as $rates){
		$sql.="INSERT INTO exchange_rates (currency, base_currency, buy, sale)
				VALUES ('".$rates->ccy."','".$rates->base_ccy."','".$rates->buy."','".$rates->sale."');";
		}
		mysqli_multi_query($this->db->conn_id, $sql);	
	}
}