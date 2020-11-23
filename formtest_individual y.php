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
                  <input type="number" name="ttl_amt" placeholder=<?php echo $ttl_amt; ?> value=<?php echo $ttl_amt; ?>class="form-control col-md-12" readonly>
                </div>
             </div>
             <br>
             </div>
             </div>

             </div><br>
             </div>


          </div>

         <div class="col-md-3"></div>
        </div>
       </form>
    </div>
    </div>






  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

