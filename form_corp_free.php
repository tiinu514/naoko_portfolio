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
             <div class="input-group">
          </div>
               
          <div class="row">
            <br>
            <div class="row card col-md-12 mx-auto"><br>
              <!-- <form2> -->
              <form action="#" method="post">
                <div class="row card col-md-12 mx-auto ">
                  
                  <h5 class="card-subtitle my-2 text-muted">Payee</h5>
                    <!-- Bene Name -->
                      <div class="col-md-12">
                        <div class="input-group">
                        <label class="col-md-3" for="">Beneficiary Name</label>
                       <input name="bene_name" class="form-control col-md-9">
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
                     <input name="bene_bk" type="text" class="form-control col-md-9">
                    </div>
                  </div>
                 <!-- Bene branch -->
                  <div class="col-md-12">
                    <div class="input-group">
                    <label class="col-md-3" for="">Beneficiary Branch</label>
                      <input name="bene_br" class="form-control col-md-9">
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
                  <div class="input-group">
                      <label class="col-md-3" for="">Trade settlement</label>
                       <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="cover_payment" value="cash" id="">
                         <label class="form-check-label" for="">Final Payment&nbsp;&nbsp;&nbsp;</label>
                         <input class="form-check-input" type="radio" name="cover_payment" id="" value="lcoal_trf">
                         <label class="form-check-label" for="">Part Paymemnt&nbsp;&nbsp;&nbsp;</label>
                         <input class="form-check-input" type="radio" name="cover_payment" id="" value="debit_ac">
                         <label class="form-check-label" for="">Advance Payment&nbsp;&nbsp;&nbsp;</label>
                     
                       </div>
                       <br>
                        <div class="col-md-12">
                         <div class="input-group">
                         <label class="col-md-3" for=""></label>
                           Goods&nbsp;<input name="bene_br" class="form-control col-md-9">
                           &nbsp;&nbsp;Port of Loading&nbsp;<input name="bene_br" class="form-control col-md-9">
                           &nbsp;&nbsp;Orign&nbsp;<input name="bene_br" class="form-control col-md-9">
                         </div></div><br>

                    <div class="col-md-12">
                      <div class="input-group">
                      <label class="col-md-3" for="">Others: Please specify</label>
                        <input name="bene_br" class="form-control col-md-9">
                      </div>
                      </div>

              
                 
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
                    <input class="form-check-input" type="radio" name="cover_payment" value="cash" id="">
                    <label class="form-check-label" for="">Cash&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input" type="radio" name="cover_payment" id="" value="lcoal_trf">
                    <label class="form-check-label" for="">Local Transfer&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input" type="radio" name="cover_payment" id="" value="debit_ac">
                    <label class="form-check-label" for="">Debit A/C&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input border-light" type="text" name="cover_payment" id="" Placeholder="AC#">
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
                  <input name="ex_rate" value="" class="form-control col-md-1"> &nbsp*Please insert your booked rate
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
                  <td><input name="rmt_ccy" value="<?php echo $rmt_ccy;?>" class="form-control col-md-2 mx-auto text-center" ></td>
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
                  <td><input name="cover_ccy" value="<?php echo $base;?>" class="form-control col-md-2 mx-auto text-center" ></td>
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
                  <input type="number" name="chg" class="form-control col-md-12" value="<?php echo $chg; ?>" >
                </div>
              </div>
             <!-- TTL-->
                <div class="col-md-12">
                    <div class="input-group">
                    <label class="col-md-6" for="">Total Amount Payable</label>
                      <input type="number" name="ttl_amt" value="<?php echo $ttl_amt; ?>" class="form-control col-md-12" >
                    </div>
                </div>
                <br>
              </div>
              </div>
          
             </div>
             <div class="col-md-12">
             <input class="form-check-input" type="checkbox" value="cash" id="">
             <label for="scales">We declare that the above remittance is not related directly or indirectly to the remittance restricted under the Foreign Exchange and Foreign Trade Act in respect of Iran and North Korea, and other restricted transactions.</label>
             </div>
             </div>

            <!-- button1 --><!-- button2 -->
              <div class="row col-md-12">
               <div class="col-md-4"></div>
               <a href='indexx.php' class="btn bg-success text-white col-md-4 mt-5">Go home</a>
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

