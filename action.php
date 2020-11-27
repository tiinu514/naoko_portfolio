<?php
include 'Classes/Naoko_portfolip.php';
$CustomerObj = new xportfolio;

if(isset($_POST['sign_up'])){
  $full_name=$_POST['full_name'];
  $address=$_POST['address'];
  $dob=$_POST['date_of_birth'];
  $visa=$_POST['visa_validity'];
  $contact_number=$_POST['contact_number'];
  $category=$_POST['category'];
  $password=$_POST['password'];

  // echo $full_name,$address,$dob,$visa,$contact_number,$category,$password;

  $CustomerObj->addNewCustomers($full_name,$address,$dob,$visa,$contact_number,$category,$password);
}

if(isset($_POST['login'])){
  $user_id=$_POST['user_id'];
  $dob=$_POST['date_of_birth'];
  $password=md5($_POST['password']);

  // echo $user_id,$dob,$password;

  $CustomerObj->login($user_id,$dob,$password);
}

if(isset($_POST['ex_yes'])){
  $date=$_POST['date'];
  $rate=$_POST['rate'];

// echo $date,$rate;

  $CustomerObj->exUpdate($rate);
  
}

if(isset($_POST['app_draft_i'])){
  $bene_name=$_POST['bene_name'];
  $bene_add=$_POST['bene_add'];
  $bene_ac_num=$_POST['bene_ac_num'];
  $bene_bk=$_POST['bene_bk'];
  $bene_br=$_POST['bene_br'];
  $ifsc=$_POST['ifsc'];
  $purpose=$_POST['purpose'];
  $cover_payment=$_POST['cover_payment'];
  $ex_rate=$_POST['ex_rate'];
  $rmt_ccy=$_POST['rmt_ccy'];
  $rmt_amt=$_POST['rmt_amt'];
  $cover_ccy=$_POST['cover_ccy'];
  $cover_amt=$_POST['cover_amt'];
  $chg=$_POST['chg'];
  $ttl_amt=$_POST['ttl_amt'];
  $customer_id = $_SESSION['customer_id'];
  $customer_name = $_SESSION['user_name'];

  // echo $bene_name,$bene_add,$bene_ac_num,$bene_bk,$bene_br,$ifsc,$purpose,$cover_payment,$rmt_ccy,$rmt_amt,$ex_rate,$cover_ccy,$cover_amt,$chg,$ttl_amt,$customer_id,$customer_name;

  $CustomerObj->remittanceInfo($bene_name,$bene_add,$bene_ac_num,$bene_bk,$bene_br,$ifsc,$purpose,$cover_payment,$rmt_ccy,$rmt_amt,$ex_rate,$cover_ccy,$cover_amt,$chg,$ttl_amt,$customer_id,$customer_name);
  
}

if(isset($_POST['idHistorySearch'])){
  $id=$_POST['id'];
echo $id;

  // $CustomerObj->idHistorySearch($id);
}
?>