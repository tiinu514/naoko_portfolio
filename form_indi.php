<!DOCTYPE html>
<html lang="en">
<title>Individual Form</title>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php include 'xheader.php'; ?>
</head>

<body>
  <!-- Navigation -->
 <?php include 'xNavigation.php'; ?>
 <div class="container jumbotron mt-4"> 
   <!-- <start of the form> -->
       <form action="action.php" method="post">
        <div class="row"> 
         <div class="col-md-3"></div>
         <div class="col-md-12 form-group">
           <!-- Login -->
          <div class="col-md-12 py-3">
            <h2 class="text-center">Remittance Application Form</h2>
          </div>
          
          <div class="row">
            <br>
            <div class="row card col-md-12 mx-auto"><br>
             <div class="row card col-md-12 mx-auto">
             <h5 class="card-subtitle my-2 text-muted border-dark">Payee</h5>
              <!-- Bene Name -->
                <div class="col-md-12">
                  <div class="input-group">
                  <label class="col-md-3" for="">Beneficiary Name</label>
                    <input name="bene_name" placeholder="xxx" class="form-control col-md-9" >
                  </div>
                </div>
              <!-- Bene add-->
                <div class="col-md-12">
                  <div class="input-group">
                  <label class="col-md-3" for="">Beneficiary address</label>
                    <input name="bene_add" placeholder="xxx" class="form-control col-md-9" >
                  </div>
                </div>
              <!-- Bene ac -->
                  <div class="col-md-12">
                    <div class="input-group">
                    <label class="col-md-3" for="">Beneficiary A/C#</label>
                      <input name="bene_ac_num" placeholder="xxx" class="form-control col-md-9" >
                    </div>
                  </div>
                <br>
               </div>
             
            <!-- Paying bank -->
              <div class="row card col-md-12 mx-auto">
                <h5 class="card-subtitle my-2 text-muted border-dark">Paying Bank</h5>
               <!-- Bene bank -->
                <div class="col-md-12">
                  <div class="input-group">
                  <label class="col-md-3" for="">Beneficiary Bank</label>
                    <input name="bene_bk" placeholder="xxx" class="form-control col-md-9" >
                  </div>
                </div>
               <!-- Bene branch -->
                <div class="col-md-12">
                  <div class="input-group">
                  <label class="col-md-3" for="">Beneficiary Branch</label>
                    <input name="bene_br" placeholder="xxx" class="form-control col-md-9" >
                  </div>
                </div>
               <!-- IFSC Code -->
                 <div class="col-md-12">
                    <div class="input-group">
                    <label class="col-md-3" for="">IFSC Code</label>
                      <input name="ifsc" placeholder="11 digits code" class="form-control col-md-9" >
                    </div>
                    <br>
                 </div>
                 
                </div><br>
              </div><br>
              
            <!-- Purpose -->
              <div class="col-md-12">
              <br>
                <div class="input-group">
                 <label class="col-md-3" for="">Purpose of Remittance</label>
                  <input name="purpose" placeholder="xxx" class="form-control col-md-9" >
                </div>
              </div>
            <!-- Cover_payment -->
            <div class="col-md-12">
                <div class="input-group">
                 <label class="col-md-3" for="">Cover Payment</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cover_payment" value="cash" id="">
                    <label class="form-check-label" for="">Cash&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input" type="radio" name="cover_payment" id="" value="lcoal_trf">
                    <label class="form-check-label" for="">Local Transfer&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input" type="radio" name="cover_payment" id="" value="debit_ac">
                    <label class="form-check-label" for="">Debit A/C&nbsp;&nbsp;&nbsp;</label>
                  </div>    
              </div>
              <br>
            </div>
            
            <div class="row card col-md-12 mx-auto"><br>
              <h5 class="card-subtitle my-2 text-muted border-dark">Caliculation</h5>
               <!-- Ex-rate -->
                <div class="input-group">
                 <label class="col-md-2" for="">Exchange rate @</label>
                  <input name="ex_rate" placeholder="xxx" class="form-control col-md-1" >
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
                  <td><input name="rmt_amt" placeholder="xxx" class="form-control col-md-12" ></td>
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
                  <td><input name="cover_amt" placeholder="xxx" class="form-control col-md-12" ></td>
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
                  <input name="chg" placeholder=xxx class="form-control col-md-12" >
                </div>
             </div>
             <!-- TTL-->
             <div class="col-md-12">
                <div class="input-group">
                 <label class="col-md-6" for="">Total Amount Payable</label>
                  <input type="number" name="ttl_amt" placeholder=xxx class="form-control col-md-12" readonly>
                </div>
             </div>
             <br>
             </div>
             </div>

             </div><br>
             </div>

            <!-- button1 --><!-- button2 -->
              <div class="row col-md-12">
               <div class="col-md-4"></div>
                  <button name="app_draft_i" class="btn btn-success center col-md-4 mt-5"  style="width:100%">Submit</button>
                <div class="col-md-4"></div>
              </div>

          </div>

         <div class="col-md-3"></div>
        </div>
       </form>
    </div>
    </div>





  <!-- Footer -->
  <?php include 'xFooter.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
