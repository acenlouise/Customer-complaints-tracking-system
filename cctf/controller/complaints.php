<?php

// The complaints class
class Complaints extends DB {
   
   //function returns all complaints records 
  function get(){
    return $this->select("SELECT * FROM `complaints`");
  }
  
  //function returns a single complaints record
  function get_complaints($condition){
    return $this->select("SELECT * FROM `complaints` WHERE complaint_id = ?",[$condition]);
  }
  
  //function returns records of complaints with a given status
  function get_complaints_bystatus($status){
    return $this->select("SELECT * FROM `complaints` WHERE complaint_status = ?",[$status]);
  }
  
  //function adds a new complaints record
  function put_Comp($nm, $em, $tle, $cmp){
     
    $data = [
    'name' => $nm,
    'email' => $em,
    'title' => $tle,
    'complaint' => $cmp,
    ];
    
    return $this->query(
        "INSERT INTO `complaints` (cust_name, cust_email, complaint_title, cust_complaint) VALUES (:name, :email, :title,:complaint)",
        $data
        );

  }
  
  //function appends a response to a complaints record
   function submit_Response($respder, $respons, $id, $statu){
       
        $res_date = date("Y-m-d h:m:s"); //capture current timestamp
        
        if($statu == 3){            //if complaint had been forwarded
            $comp_status = 4;       //change status to "responded after forwarding"
        }else{                      //if complaint was new or on acknowledged status
            $comp_status = 2;       //change status to "responded immediately"
        }
        
        $data = [
        'responder' => $respder,
        'response' => $respons,
        'comp_id' => $id,
        'resp_date' => $res_date,
        'comp_status' => $comp_status,
       ];
    
        return $this->query(
            "UPDATE `complaints` SET responder = :responder, response = :response, complaint_status = :comp_status, date_responded = :resp_date WHERE  complaint_id = :comp_id",
            $data );
        }
    
    //function changes the status of a complaint    
    function submit_Status($status, $id){
       
        $ack_date = date("Y-m-d h:m:s");  //capture current timestamp
        
        $data = [
        'status' => $status,
        'comp_id' => $id,
        'ack_date' => $ack_date,
       ];
    
        return $this->query(
            "UPDATE `complaints` SET complaint_status = :status, date_acknowledged = :ack_date WHERE complaint_id = :comp_id",
            $data );
        }
        

    }

?>



