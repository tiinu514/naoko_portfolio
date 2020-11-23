<?php
// if(isset($_POST['app_draft_i'])){
//   $bene_name=$_POST['bene_name'];
//   $bene_add=$_POST['bene_add'];
//   $bene_ac_num=$_POST['bene_ac_num'];
//   $bene_bk=$_POST['bene_bk'];
//   $bene_br=$_POST['bene_br'];
//   //$ifsc=$_POST['ifsc'];
//   // $purpose=$_POST['purpose'];
//   // $cover_payment=$_POST['cover_payment'];
//   // $ex_rate=$_POST['ex_rate'];
//   // $rmt_ccy=$_POST['rmt_ccy'];
//   // $rmt_amt=$_POST['rmt_amt'];
//   // $cover_ccy=$_POST['cover_ccy'];
//   // $cover_amt=$_POST['cover_amt'];
//   $chg=$_POST['chg'];
//   // $ttl_amt=$_POST['ttl_amt'];

//    echo $bene_name,$bene_add,$bene_ac_num,$bene_bk,$chg;
//   //$bene_br,$ifsc,$purpose,$cover_payment,$rmt_ccy,$rmt_amt,$ex_rate,$cover_ccy,$cover_amt,
  

//   // $CustomerObj->ttremitance($bene_name,$bene_add,$bene_ac_num,$bene_bk,$bene_br,$ifsc,$purpose,$cover_payment,$rmt_ccy,$rmt_amt,$ex_rate,$cover_ccy,$cover_amt,$chg);
  
 
// }


if(isset($_POST['basic_info'])){
  $base=$_POST['base'];
  $base_amt=$_POST['amt'];
  $standard_rate=1.4775;
  $chg=2000;

  echo "Base is ".$base.number_format($base_amt);
  // echo $bk."<br>";
  
  

  if($base=="INR"){
    $computeJpy=floor($base_amt*$standard_rate);
    if($computeJpy<500000){
      $ex_rate=$standard_rate;
    }elseif($computeJpy>=1000000){
      $ex_rate=$standard_rate-0.0075;
    }else{
      $ex_rate=$standard_rate-0.0025;
      }
    $computeJpy=floor($base_amt*$ex_rate);
    $ttl_amt=$computeJpy+$chg;
  }else{
    if($base_amt<500000){
      $ex_rate=$standard_rate;
    }elseif($base_amt>=1000000){
    $ex_rate=$standard_rate-0.0075;
    }else{
    $ex_rate=$standard_rate-0.0025;
    }
    $computeInr=floor($base_amt/$standard_rate);
    $ttl_amt =$base_amt+$chg;
  }
  echo " @".number_format($ex_rate,4)."<br>";

    if($base=="JPY"){
    echo "Equivalent INR is ".number_format($computeInr)."<br>";
  }else{
    echo "Equivalent JPY is ".number_format($computeJpy)."<br>";
  }
    echo "Commission charge is: JPY".number_format($chg)."<br>";
    echo "Total payable amount is: JPY".number_format($ttl_amt)."<br>";

}

?>
