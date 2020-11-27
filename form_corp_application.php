<?php
include 'action.php';
?>

<!DOCTYPE html>
<html lang="en">
<title>OVS APP for Corporate</title>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <?php include 'xheader.php'; ?>

</head>

<?php
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
  $rmt_ccy="";
  // }

if(isset($_POST['basic_info'])){
  $purpose=$_POST['purpose'];
  // echo $purpose;

  if(isset($_POST['basic_info'])){
        $rmt_ccy=$_POST['rmt_ccy'];
        $base=$_POST['base'];
        $base_amt=$_POST['amt'];
        // $CustomerObj->getRate();
        // $standard_rate=$_SESSION["rate"];
        
        
        if($rmt_ccy=="INR"){
          $chg=2000;
        }else{
          $chg=5000;
        }
      }
  }


?>

<body>
  <!-- Navigation -->
  <?php include 'xNavigation_login.php'; ?>
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
                        <div class="mt-2 pl-5"><i class="fa fa-calculator" aria-hidden="true"></i> We want to remit
                        <select name="rmt_ccy" id="" required>
                            <option value="INR">INR</option>
                            <option value="USD">USD</option>
                            <option value="JPY">JPY</option>
                          </select>
                        equivalent to
                          <select name="base" id="" required>
                            <!-- <option selected disabled>Select</option> -->
                            <option value="JPY">JPY</option>
                            <option value="USD">USD</option>
                          </select>
                          amount
                          <input type="number" name="amt" value="" placeholder="100,000" required >.&nbsp;<br>
                          This payment is for
                          <select name="purpose" id="" required>
                            <option value="trade_settlement">Trade Settlement</option>
                            <option value="others">Others (*Please specify below)</option>
                            
                          </select>.
                          <button type="submit" name="basic_info" class="btn btn-success">click</button><br>
                          
                  </form>
                </div>
              </h6>

              <!-- <form2> -->
              <form action="#" method="post">
                <div class="row card col-md-12 mx-auto ">
                  
                  <h5 class="card-subtitle my-2 text-muted">Payee</h5>
                    <!-- Bene Name -->
                      <div class="col-md-12">
                        <div class="input-group">
                        <label class="col-md-3" for="">Beneficiary Name</label>
                       <input name="bene_name" class="form-control col-md-9" required>
                        </div>
                      </div>
                    <!-- Bene add-->
                      <div class="col-md-12">
                        <div class="input-group">
                        <label class="col-md-3" for="">Beneficiary address</label>
                        <input name="bene_add" class="form-control col-md-9">
                        </div>
                      </div>
                    <!-- Bene ac -->
                        <div class="col-md-12">
                          <div class="input-group">
                            <label class="col-md-3" for="">Beneficiary A/C#</label>
                            <input name="bene_ac_num" class="form-control col-md-9" type="number" required>
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
                     <input name="bene_bk" type="text" class="form-control col-md-9">
                    </div>
                  </div>
                 <!-- Bene branch -->
                  <div class="col-md-12">
                    <div class="input-group">
                    <label class="col-md-3" for="">Beneficiary Branch</label>
                      <input name="bene_br" class="form-control col-md-9" required>
                    </div>
                  </div>
                 <!-- IFSC Code -->
                  <div class="col-md-12">
                      <div class="input-group">
                      <label class="col-md-3" for="">SWIFT Code</label>
                      <input name="b_swift" placeholder="11 digits code" class="form-control col-md-9">
                      </div>
                  </div>
                    <!-- IFSC Code -->
                    <div class="col-md-12">
                      <div class="input-group">
                      <label class="col-md-3" for="">Intermediary Bank<br>(SWIFT Code)</label>
                      <input name="in_swift" placeholder="11 digits code" class="form-control col-md-9">
                      </div>
                      <br>
                  </div>
                 
              </div>


                <!-- Purpose -->
              <div class="row card col-md-12 mx-auto">
                <h5 class="card-subtitle my-2 text-muted">Purpose of Remittance</h5>
                 <!-- Trade settlement -->
                  <div class="col-md-12">
                    <?php
                    if($purpose=="trade_settlement"){
                     echo '<div class="input-group">
                      <label class="col-md-3" for="">Trade settlement</label>
                       <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="cover_payment" value="cash" id="" required>
                         <label class="form-check-label" for="">Final Payment&nbsp;&nbsp;&nbsp;</label>
                         <input class="form-check-input" type="radio" name="cover_payment" id="" value="lcoal_trf" required>
                         <label class="form-check-label" for="">Part Paymemnt&nbsp;&nbsp;&nbsp;</label>
                         <input class="form-check-input" type="radio" name="cover_payment" id="" value="debit_ac" required>
                         <label class="form-check-label" for="">Advance Payment&nbsp;&nbsp;&nbsp;</label>
                     
                       </div>
                       <br>
                        <div class="col-md-12">
                         <div class="input-group">
                         <label class="col-md-3" for=""></label>
                           Goods&nbsp;<input name="bene_br" class="form-control col-md-9" required>
                           &nbsp;&nbsp;Port of Loading&nbsp;<input name="bene_br" class="form-control col-md-9" required>
                           &nbsp;&nbsp;Orign&nbsp;<input name="bene_br" class="form-control col-md-9" required>
                         </div></div><br>';

                    }elseif($puprse="others"){
                     echo '<div class="col-md-12">
                      <div class="input-group">
                      <label class="col-md-3" for="">Others: Please specify</label>
                        <input name="bene_br" class="form-control col-md-9" required>
                      </div>';
                    }
                    
                    ?>

              
                 
              </div>
              <br>

              </div>


              </div>
           
            <!-- Cover_payment -->
            <div class="row card col-md-12 mx-auto">
                <h5 class="card-subtitle my-2 text-muted">Cover Payment</h5>
             <div class="col-md-12">
                <div class="input-group">
                 <label class="col-md-3" for="">Payment method</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cover_payment" value="cash" id="" required>
                    <label class="form-check-label" for="">Cash&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input" type="radio" name="cover_payment" id="" value="lcoal_trf" required>
                    <label class="form-check-label" for="">Local Transfer&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input" type="radio" name="cover_payment" id="" value="debit_ac" required>
                    <label class="form-check-label" for="">Debit A/C&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input border-light" type="text" name="cover_payment" id="" Placeholder="AC#" required>
                  </div>    
               </div>
               <br>
             </div>
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
                  <input name="ex_rate" value="" class="form-control col-md-1" required> &nbsp*Please insert your booked rate
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
                  <td><input name="rmt_ccy" value="<?php echo $rmt_ccy;?>" class="form-control col-md-2 mx-auto text-center" readonly></td>
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
                  <td><input name="cover_ccy" value="<?php echo $base;?>" class="form-control col-md-2 mx-auto text-center" readonly></td>
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
             <div class="col-md-12">
             <input class="form-check-input" type="checkbox" value="cash" id="" required>
             <label for="scales">We declare that the above remittance is not related directly or indirectly to the remittance restricted under the Foreign Exchange and Foreign Trade Act in respect of Iran and North Korea, and other restricted transactions.</label>
             </div>
             </div>

            <!-- button1 --><!-- button2 -->
              <div class="row col-md-12">
               <div class="col-md-4"></div>
                  <button type="" name="xxxxx" class="btn btn-danger center col-md-4 mt-5"  style="width:100%">Not available</button>
                <div class="col-md-4"></div>
              </div>

          </div>
          <div class="col-md-3"> <br> <br></div>
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

