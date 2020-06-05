<?php 
	class complaints extends DB {
		function get(){
		return $this->select("SELECT * FROM customer_details");
		}
		function insert(){
		return $this->select("INSERT INTO customer_details(cust_name, cust_email, cust_complaint, response, date_rceived, date_acknowledged, date_forwarded, date_responded) VALUES ()");
		}
		function delete(){
		return $this->select("DELETE * FROM customer_details where complaint_id=");
		}
	}
?>