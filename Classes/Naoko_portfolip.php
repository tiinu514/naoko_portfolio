
<?php
  include 'Database.php';

  class xportfolio extends database{

    public function addNewCustomers($full_name,$address,$dob,$visa,$contact_number,$category,$password){

      $sql = "INSERT INTO customers(full_name, address, date_of_birth, visa_validity, contact_number, category, password) VALUES ('$full_name','$address','$dob','$visa','$contact_number','$category',md5('$password'))";
      $result =$this->conn->query($sql);

      if($result == TRUE){
        header('location: login.php');
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
      
      }else{
        header('location: login_error.php');
      }
    }

    // public function userDetails(){
    //   $sql = "SELECT address FROM customers WHERE customer_id=$user"
    // }
    
    public function exUpdate($date,$ex1){
      $sql="INSERT INTO ex_rate(date,rate) VALUES('$date','$ex1')";
      $result =$this->conn->query($sql);

      if($result == TRUE){
        // echo $sql;
        header('location: ex_rate_updated.php');
      }else{
        echo "ERROR";
      }
  }

    // public function updateRate($date){
    //   $sql = "UPDATE ex_rate SET date='$date'";
    //   $result = $this->conn->query($sql);

    //   if($result == TRUE){
    //     header('location:indexx.php');
    //   }else{
    //     return False;
    //   }
    // }
    
//  public function defaultValue($bene_name
// //  ,$bene_add,$bene_ac_num,$bene_bk,$bene_br,$ifsc,$purpose,$cover_payment,$ex_rate,$rmt_ccy,$rmt_amt,$cover_ccy,$cover_amt,$chg,$ttl_amt
//  ){
//   $bene_name="";
//   // $bene_add="";
//   // $bene_ac_num="";
//   // $bene_bk="";
//   // $bene_br="";
//   // $ifsc="";
//   $purpose="";
//   // $cover_payment="";
//   // $ex_rate="";
//   // $rmt_ccy="";
//   // $rmt_amt="";
//   // $cover_ccy="";
//   // $cover_amt="";
//   $chg="";
//   // $ttl_amt="";

//   // header('location: form_indi_new_beneficiary.php');
 
//  }




 public function remittanceInfo($bene_name,$bene_add,$bene_ac_num,$bene_bk,$bene_br,$ifsc,$purpose,$cover_payment,$rmt_ccy,$rmt_amt,$ex_rate,$cover_ccy,$cover_amt,$chg,$ttl_amt){
   $sql = "INSERT INTO remittance_history(bene_name,bene_address,bene_ac_number,bene_bank_name,bene_branch,ifsc,purpose,cover_payment,rmt_currency,rmt_amt,ex_rate,cover_currency,cover_amt,charge,ttl_amt)VALUES('$bene_name','$bene_add','$bene_ac_num','$bene_bk','$bene_br','$ifsc','$purpose','$cover_payment','$rmt_ccy','$rmt_amt','$ex_rate','$cover_ccy','$cover_amt','$chg','$ttl_amt')";

   $result=$this->conn->query($sql);

   if($result == TRUE){
        // echo $sql;
        header('location: form_indi_submitted.php');
      }else{
        echo "ERROR";
      }

 }

 

public function remittanceHistory(){
    $sql="SELECT date, transfer_id, bene_name, bene_ac_number, bene_bank_name, rmt_amt FROM remittance_history JOIN customers ON(remittance history.customer_id=customers.customer_id) order by  remittance history.date";
    
    $result=$this->conn->query($sql);

    if($result->num_rows>0){
$blankArray = array();
while($database_row = $result->fetch_assoc()){
  $balankArray[]=$database_row;
}
    return $blankArray;
   
  }else{
    return FALSE;
  }
}
}
  ?>