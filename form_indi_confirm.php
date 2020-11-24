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
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Remittance Confirmation</title>
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
   <form action="action.php" method="post">
    <div class="col-md-12 pt-3">
        <h2 class="text-center">Do you confirm?</h2><br>
    </div>
    <div class="row col-md-12">
    <div class="col-4"></div>
    <div class>
      <table class="">
          <tr>
            <th class="text-right">Beneficiary Name:&nbsp;</th>
            <td>
              <input class="border border-0 text-left bg-transparent" name="bene_name" value="<?php echo $bene_name; ?>" readonly>
          </td>
          </tr>
          <tr>
            <th class="text-right">Beneficiary address:&nbsp;</th>
            <td class="text-center">
              <input class="border border-0 text-left bg-transparent" name="bene_add" value="<?php echo $bene_add; ?>" readonly>
            </td>
          </tr>
          <tr>
            <th class="text-right">Beneficiary A/C#:&nbsp;</th>
            <td class="text-center">
              <input class="border border-0 text-left bg-transparent" name="bene_ac_num" value="<?php echo $bene_ac_num; ?>" readonly>
            </td>
          </tr>
          <tr>
            <th class="text-right">Beneficiary Bank:&nbsp;</th>
            <td class="text-center">
              <input class="border border-0 text-left bg-transparent" name="bene_bk" value="<?php echo $bene_bk; ?>" readonly>
            </td>
          </tr>
          <tr>
            <th class="text-right">Beneficiary Branch :&nbsp;</th>
            <td class="text-center">
              <input class="border border-0 text-left bg-transparent" name="bene_br" value="<?php echo $bene_br; ?>" readonly>
            </td>
          </tr>
          <tr>
            <th class="text-right">IFSC Code:&nbsp;</th>
            <td class="text-center">
              <input class="border border-0 text-left bg-transparent" name="ifsc" value="<?php echo $ifsc; ?>" readonly>
            </td>
          </tr>
          <tr>
            <th class="text-right">Purpose of Remittance:&nbsp;</th>
            <td class="text-center">
              <input class="border border-0 text-left bg-transparent help-block" name="purpose" value="<?php echo $purpose; ?>" readonly>
            </td>
          </tr>
          <tr>
            <th class="text-right">Cover Payment:&nbsp;</th>
            <td class="text-center">
              <input class="border border-0 text-left bg-transparent" name="cover_payment" value="<?php echo $cover_payment; ?>" readonly>
            </td>
          </tr>
          <tr>
            <th class="text-right">Exchange rate @:&nbsp;</th>
            <td class="text-center">
            <?php echo number_format($ex_rate,4); ?>
              <input type="hidden" class="border border-0 text-left bg-transparent" name="ex_rate" value="<?php echo $ex_rate; ?>" readonly>
            </td>
          </tr>
          <tr>
            <th class="text-right">Remittance Currency:&nbsp;</th>
            <td class="text-center">
              <input class="border border-0 text-left bg-transparent" name="rmt_ccy" value="<?php echo $rmt_ccy; ?>" readonly>
            </td>
          </tr>
          <tr>
            <th class="text-right">Remittance Amount:&nbsp;</th>
            <td class="text-center">
              <?php echo number_format($rmt_amt); ?>
              <input type="hidden" class="border border-0 text-left bg-transparent" name="rmt_amt" value="<?php echo $rmt_amt; ?>" readonly>
            </td>
          </tr>
          <tr>
            <th class="text-right">Cover Currency:&nbsp;</th>
            <td class="text-center">
              <input class="border border-0 text-left bg-transparent" name="cover_ccy" value="<?php echo $cover_ccy; ?>" readonly>
            </td>
          </tr>
          <tr>
            <th class="text-right">Cover Amount:&nbsp;</th>
            <td class="text-center">
            <?php echo number_format($cover_amt); ?>
              <input type="hidden" class="border border-0 text-left bg-transparent" name="cover_amt" value="<?php echo $cover_amt; ?>" readonly>
            </td>
          </tr>
          <tr>
            <th class="text-right">Charge (JPY):&nbsp;</th>
            <td class="text-center">
            <?php echo number_format($chg); ?>
              <input type="hidden" class="border border-0 text-left bg-transparent" name="chg" value="<?php echo $chg; ?>" readonly>
              </td>
          </tr>
          <tr>
            <th class="text-right">Total Payable Amount (JPY):&nbsp;</th>
            <td class="text-center">
            <?php echo number_format($ttl_amt); ?>
              <input type="hidden" class="border border-0 text-left bg-transparent" name="ttl_amt" value="<?php echo $ttl_amt; ?>" readonly>
              </td>
          </tr>
          
        </table>
    </div>
    <!-- <div class="col-2 border border-dark"></div> -->
    </div>
    <br>

    <div class="row col-md-12">
      <button type="submit" name="app_draft_i" class="btn btn-success col-md-2 d-block mx-auto">Yes</button>
    </form>
    <a href="form_indi_application.php" class="btn btn-danger col-md-2 d-block mx-auto">No</a>
    </div>

    

   

 </div>
  <!-- Footer -->
  <?php include 'xFooter.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>


</html>