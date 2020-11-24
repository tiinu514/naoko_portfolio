
<?php
  include 'Database.php';

  class xportfolio extends database{

    public function addNewCustomers($full_name,$address,$dob,$visa,$contact_number,$category,$password){

      $sql = "INSERT INTO customers(full_name, address, date_of_birth, visa_validity, contact_number, category, password) VALUES ('$full_name','$address','$dob','$visa','$contact_number','$category',md5('$password'))";
      $result =$this->conn->query($sql);

      if($result == TRUE){
        header('location: sign_up_successed.php');
      }else{
        echo "ERROR";
      }
    }

    public function login($user_id,$dob,$password){
      $sql = "SELECT * FROM customers WHERE customer_id='$user_id' AND date_of_birth='$dob' AND password='$password'";

      $result = $this->conn->query($sql);

      // echo $sql;

      if($result->num_rows==1){
        $row=$result->fetch_assoc();

        //  print_r($row);

        $_SESSION['customer_id']=$row['customer_id'];
        $_SESSION['date_of_birth']=$row['date_of_birth'];
        $_SESSION['password']=$row['password'];
        $_SESSION['user_name']=$row['full_name'];
        $_SESSION['user_address']=$row['address'];

  
        header('location: mypage.php');
        if($_SESSION['customer_id']==7){
          header('location: admin_home.php');
        }
      
      }else{
        header('location: login_error.php');
      }
    }

    // public function userDetails(){
    //   $sql = "SELECT address FROM customers WHERE customer_id=$user"
    // }
    
    public function exUpdate($ex1){
      $sql="INSERT INTO ex_rate(rate) VALUES('$ex1')";
      $result =$this->conn->query($sql);

      if($result == TRUE){
        // echo $sql;
        header('location: ex_rate_updated.php');
      }else{
        echo "ERROR";
      }
  }

  public function getRate(){
    $sql = "SELECT * FROM ex_rate ORDER BY date DESC limit 1";
    $result =$this->conn->query($sql);

    if($result->num_rows==1){
      $row=$result->fetch_assoc(); 
      $_SESSION['rate']=$row['rate'];
      // echo $_SESSION['rate'];
  }
}

 public function remittanceInfo($bene_name,$bene_add,$bene_ac_num,$bene_bk,$bene_br,$ifsc,$purpose,$cover_payment,$rmt_ccy,$rmt_amt,$ex_rate,$cover_ccy,$cover_amt,$chg,$ttl_amt,$customer_id, $customer_name){
   $sql = "INSERT INTO remittance_history(customer_id,customer_name,bene_name,bene_address,bene_ac_number,bene_bank_name,bene_branch,ifsc,purpose,cover_payment,rmt_currency,rmt_amt,ex_rate,cover_currency,cover_amt,charge,ttl_amt)VALUES('$customer_id','$customer_name','$bene_name','$bene_add','$bene_ac_num','$bene_bk','$bene_br','$ifsc','$purpose','$cover_payment','$rmt_ccy','$rmt_amt','$ex_rate','$cover_ccy','$cover_amt','$chg','$ttl_amt')";

  //  echo $sql;
   $result=$this->conn->query($sql);

   if($result == TRUE){
        // echo $sql;
        header('location: form_indi_submitted.php');
      }else{
        echo "ERROR";
      }

 }

 

public function remittanceHistory(){
    $sql="SELECT date, transfer_id, bene_name, bene_ac_number, bene_bank_name, rmt_amt FROM remittance_history JOIN customers ON remittance_history.customer_id=customers.customer_id order by remittance_history.date";
    $sql="SELECT date, transfer_id, bene_name, bene_ac_number, bene_bank_name, rmt_amt FROM remittance_history WHERE remittance_history.customer_id=customers.customer_id order by remittance_history.date";

    // echo $sql;
    
    $result=$this->conn->query($sql);

    $blankArray = array();
    if($result->num_rows > 0){
      while($database_row = $result->fetch_assoc()){
        $blankArray[]=$database_row;
      }
    
      return $blankArray;
   
    }else{
      return FALSE;
    }
}


public function exRate($ex_rate){
  $sql="SELECT date, transfer_id, bene_name, bene_ac_number, bene_bank_name, rmt_amt FROM remittance_history JOIN customers ON remittance_history.customer_id=customers.customer_id order by remittance_history.date";

  // echo $sql;
  
  $result=$this->conn->query($sql);

  $blankArray = array();
  if($result->num_rows > 0){
    while($database_row = $result->fetch_assoc()){
      $blankArray[]=$database_row;
    }
  
    return $blankArray;
 
  }else{
    return FALSE;
  }
}
  }
  ?>