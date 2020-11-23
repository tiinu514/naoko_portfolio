<?php
include 'action.php';
?>

<!DOCTYPE html>
<html lang="en">
<title>Remittance application</title>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <?php include 'xheader.php'; ?>

</head>

<?php
// function defaultValue($bene_name){
  // defaultValue($bene_name,$bene_add,$bene_ac_num,$bene_bk,$bene_br,$ifsc,$purpose,$cover_payment,$ex_rate,$rmt_ccy,$rmt_amt,$cover_ccy,$cover_amt,$chg,$ttl_amt);
  // // 
  $bene_name="";
  $bene_add="";
  $ifsc="";
  $purpose="";
  $ex_rate="";
  $rmt_amt="";
  $cover_amt="";
  $bk="";
  $base="";
  $computeInr="";
  $base="";
  $base_amt="";
  // }

if(isset($_POST['basic_info'])){
  $purpose=$_POST['bene_relation'];
  $bk=$_POST['bank'];

  if($purpose=="self"){
    if(!empty($_SESSION['user_name'])){
    }else{
      echo "Guest";
    }
    
  }elseif($purpose=="family"){
  }else{
  }
 

  if($bk=="BOI"){//if BOI
    $bk="Bank of India";
    $chg=1500;
    }else{ //if OTHER BK
    $bk="Other";
    $chg=2000;
      }

  if(isset($_POST['basic_info'])){
        $base=$_POST['base'];
        $base_amt=$_POST['amt'];
        $standard_rate=1.4775;
        // $chg=2000;
      
        // echo "Base is ".$base.number_format($base_amt);
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
        // echo " @".number_format($ex_rate,4)."<br>";
      
          if($base=="JPY"){
          // echo "Equivalent INR is ".number_format($computeInr)."<br>";
        }else{
          // echo "Equivalent JPY is ".number_format($computeJpy)."<br>";
        }
          // echo "Commission charge is: JPY".number_format($chg)."<br>";
          // echo "Total payable amount is: JPY".number_format($ttl_amt)."<br>";
      
      }
}

?>

<body>
  <!-- Navigation -->
  <?php include 'xNavigation.php'; ?>
 <div class="container jumbotron mt-4"> 
   
      
        <div class="row"> 
         <div class="col-md-3"></div>
         <div class="col-md-12 form-group">
           <!-- Login -->
          <div class="col-md-12 py-3">
            <h2 class="text-center">Remittance Application Form</h2>
          </div>
          
          
           
          <div class="col-md-12">
             <div class="input-group"> </div>
               
          <div class="row">
            <br>
            <div class="row card col-md-12 mx-auto"><br>

            <!--Basic information-->
            <!-- <form1> -->
            <h5 class="card-subtitle my-2 text-muted border-dark">Basic information</h5>
              <h6> 
                <div class="container row border border-light rounded bg-light mx-auto">
                  <!-- <form> -->
                  <form action="" method="post">
                        <div class="mt-2 pl-5"><i class="fa fa-user" aria-hidden="true"></i> I am sending to &nbsp;
                          <select class="border-dark" name="bene_relation" id="" required>
                          <!-- <option selected disabled>Select</option> -->
                          <option value="self" class="" required>myself</option>
                          <option value="family" class="" required>my family</option>
                          <option value="other" class="" required>others</option>
                          </select>
                          Beneficiary bank is 
                          <select name="bank" id="" required>
                            <!-- <option selected disabled>Select</option> -->
                            <option value="BOI" class="">Bank of India</option>
                            <option value="Other">Other Banks</option>
                          </select>&nbsp;
                        </div>
                    
                        <div class="mt-2 pl-5"><i class="fa fa-calculator" aria-hidden="true"></i> I want to remit INR based on &nbsp;
                          <select name="base" id="" required>
                            <!-- <option selected disabled>Select</option> -->
                            <option value="INR">INR</option>
                            <option value="JPY">JPY</option>
                          </select>
                          Amount is 
                          <input type="number" name="amt" value="" required >&nbsp;
                          <button type="submit" name="basic_info" class="btn btn-success">click</button><br>
                  </form>
                </div>
              </h6>

              <!-- <form2> -->
              <form action="form_indi_confirm.php" method="post">
                <div class="row card col-md-12 mx-auto ">
                  
                  <h5 class="card-subtitle my-2 text-muted">Payee</h5>
                    <!-- Bene Name -->
                      <div class="col-md-12">
                        <div class="input-group">
                        <label class="col-md-3" for="">Beneficiary Name</label>
                        <?php
                        if($purpose=="self"){
                          echo "<input name='bene_name' value='".$_SESSION['user_name']."' class='form-control col-md-9' readonly required>";
                        }else{
                          echo  '<input name="bene_name" class="form-control col-md-9" required>';
                        }
                        ?>
                        </div>
                      </div>
                    <!-- Bene add-->
                      <div class="col-md-12">
                        <div class="input-group">
                        <label class="col-md-3" for="">Beneficiary address</label>
                        <?php
                        if($purpose=="self"){
                          echo "<input name='bene_add' value='".$_SESSION['user_address']."' class='form-control col-md-9' readonly>";
                        }else{
                          echo  '<input name="bene_add" placeholder="city name" class="form-control col-md-9">';
                        }
                        ?>
                        
                        </div>
                      </div>
                    <!-- Bene ac -->
                        <div class="col-md-12">
                          <div class="input-group">
                            <label class="col-md-3" for="">Beneficiary A/C#</label>
                            <input name="bene_ac_num" class="form-control col-md-9" type="number">
                          </div>
                        </div>
                      <br>

                </div>
             
            <!-- Paying bank -->
              <div class="row card col-md-12 mx-auto">
                <h5 class="card-subtitle my-2 text-muted">Paying Bank</h5>
                 <!-- Bene bank -->
                  <div class="col-md-12">
                    <div class="input-group">
                    <label class="col-md-3" for="">Beneficiary Bank</label>
                      <?php
                      if($bk=="Bank of India"){
                        echo '<input name="bene_bk" value="Bank of India" class="form-control col-md-9" readonly>';
                      }else{
                        echo '<input name="bene_bk" type="text" class="form-control col-md-9">';
                      }
                    ?>
                    </div>
                  </div>
                 <!-- Bene branch -->
                  <div class="col-md-12">
                    <div class="input-group">
                    <label class="col-md-3" for="">Beneficiary Branch</label>
                      <input name="bene_br" class="form-control col-md-9" >
                    </div>
                  </div>
                 <!-- IFSC Code -->
                  <div class="col-md-12">
                      <div class="input-group">
                      <label class="col-md-3" for="">IFSC Code</label>
                        <?php
                        if($bk=="Bank of India"){
                          echo '<input name="ifsc" placeholder="Not required" value="Null" class="form-control col-md-9" readonly>';
                        }else{
                          echo '<input name="ifsc" placeholder="11 digits code" class="form-control col-md-9">';
                        }
                      ?>
                      
                      </div>
                      <br>
                  </div>
                 
              </div><br>
              
            <!-- Purpose -->
              <div class="col-md-12">
              <br>
                <div class="input-group">
                 <label class="col-md-3" for="">Purpose of Remittance</label>
                 <?php
                    if($purpose=="self"){
                      echo '<input name="purpose" value="Savings/ Transfer to own A/C" class="form-control col-md-9" readonly>';
                    }elseif($purpose=="family"){
                      echo '<input name="purpose" value="Family support" class="form-control col-md-9" readonly>';
                    }else{
                      echo '<input name="purpose" placeholder="Please specify" class="form-control col-md-9" >';
                    }
                   ?>
                </div>
              </div>
            <!-- Cover_payment -->
             <div class="col-md-12">
                <div class="input-group">
                 <label class="col-md-3" for="">Cover Payment</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cover_payment" value="cash" id="" required>
                    <label class="form-check-label" for="">Cash&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input" type="radio" name="cover_payment" id="" value="lcoal_trf" required>
                    <label class="form-check-label" for="">Local Transfer&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input" type="radio" name="cover_payment" id="" value="debit_ac" required>
                    <label class="form-check-label" for="">Debit A/C&nbsp;&nbsp;&nbsp;</label>
                  </div>    
               </div>
               <br>
             </div>

            <!-- Caliculation -->
                <div class="row card col-md-12 mx-auto"><br>
                  <h5 class="card-subtitle my-2 text-muted">Caliculation</h5>
                  <h6> 
                      <div class="container row border border-light rounded bg-light mx-auto">
                      </div>
                  </h6>
                 
                  <!-- Ex-rate -->
                    <div class="input-group">
                    <label class="col-md-2" for="">Exchange rate @</label>
                  <input name="ex_rate" value="<?php echo $ex_rate; ?>" readonly class="form-control col-md-1" >
                </div>
             
              <table class="table text-center table-sm">
                <tbody>
                <tr class=>
                  <th rowspan="2">Remittance</th>
                  <td></td>
                  <td>CCY</td>
                  <td>AMT</td>
                </tr>
                <tr>
                  <td></td>
                  <td><input name="rmt_ccy" value="INR" class="form-control col-md-2 mx-auto text-center" readonly></td>
                  <td>
                    <?php
                    if($base=="INR"){
                    echo "<input name='rmt_amt' value='$base_amt' class='form-control col-md-12'>";
                    }else{
                    echo "<input name='rmt_amt' value='$computeInr' class='form-control col-md-12'>";
                    }
                    ?>
                  </td>
                </tr>
                <tr>
                  <th rowspan="2">Cover</th>
                  <td></td>
                  <td>CCY</td>
                  <td>AMT</td>
                </tr>
                <tr>
                  <td></td>
                  <td><input name="cover_ccy" value="JPY" class="form-control col-md-2 mx-auto text-center" readonly></td>
                  <td>
                  <?php
                    if($base=="INR"){
                    echo "<input name='cover_amt' value='$computeJpy' class='form-control col-md-12'>";
                    }else{
                    echo "<input name='cover_amt' value='$base_amt' class='form-control col-md-12' >";
                    }
                    ?>
                  
                  
                </td>
                </tr>
                </tbody>
              </table>
            
             <div class="row col-md-12">
             <div class="col-md-6">
            
             </div>
             <div class="col-md-6">
            
             <!-- Charge-->
              <div class="col-md-12">
                <div class="input-group">
                 <label class="col-md-6" for="">Commission</label>
                  <input type="number" name="chg" class="form-control col-md-12" value="<?php echo $chg; ?>" readonly>
                </div>
              </div>
             <!-- TTL-->
                <div class="col-md-12">
                    <div class="input-group">
                    <label class="col-md-6" for="">Total Amount Payable</label>
                      <input type="number" name="ttl_amt" value="<?php echo $ttl_amt; ?>" class="form-control col-md-12" readonly>
                    </div>
                </div>
                <br>
              </div>
              </div>
          
             </div>
             <?php 
         
                    
              // echo "Base is ".$base.number_format($base_amt);
              // echo $bk."<br>";
              
            
              // if($base=="INR"){
              //   $computeJpy=floor($base_amt*$standard_rate);
              //   if($computeJpy<500000){
              //     $ex_rate=$standard_rate;
              //   }elseif($computeJpy>=1000000){
              //     $ex_rate=$standard_rate-0.0075;
              //   }else{
              //     $ex_rate=$standard_rate-0.0025;
              //     }
              //   $computeJpy=floor($base_amt*$ex_rate);
              //   $ttl_amt=$computeJpy+$chg;
              // }else{
              //   if($base_amt<500000){
              //     $ex_rate=$standard_rate;
              //   }elseif($base_amt>=1000000){
              //   $ex_rate=$standard_rate-0.0075;
              //   }else{
              //   $ex_rate=$standard_rate-0.0025;
              //   }
              //   $computeInr=floor($base_amt/$standard_rate);
              //   $ttl_amt =$base_amt+$chg;
              // }
              // echo " @".number_format($ex_rate,4)."<br>";
            
              //   if($base=="JPY"){
              //   echo "Equivalent INR is ".number_format($computeInr)."<br>";
              // }else{
              //   echo "Equivalent JPY is ".number_format($computeJpy)."<br>";
              // }
              //   echo "Commission charge is: JPY".number_format($chg)."<br>";
              //   echo "Total payable amount is: JPY".number_format($ttl_amt)."<br>"; 
              //   ?>
             </div>

            <!-- button1 --><!-- button2 -->
              <div class="row col-md-12">
               <div class="col-md-4"></div>
                  <button type="" name="app_draft_i" class="btn btn-success center col-md-4 mt-5"  style="width:100%">Submit</button>
                <div class="col-md-4"></div>
              </div>

          </div>

        </div>
       </form>
    </div>
    </div>
    </div>





  <!-- Footer -->
  <?php include 'xFooter.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
                     
</html>

<?php
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

              echo 
              $bene_name,$bene_add,$bene_ac_num,$bene_bk,$bene_br,$ifsc,$purpose,$cover_payment,$ex_rate,$rmt_ccy,$rmt_amt,$cover_ccy,$cover_amt,$chg,$ttl_amt;
              
              }
  ?>

