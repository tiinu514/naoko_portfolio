<?php
include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<title>My page</title>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <?php include 'xheader.php'; ?>

</head>

<body>
   <!-- Navigation -->
 
<div class="container jumbotron mt-4"> 
   <?php include 'xNavigation.php'; ?>
    Hello!
    <?php
      if(!empty($_SESSION['user_name'])){
        echo $_SESSION['user_name'];
      }else{
        echo "Guest";
      }
      ?>
   <!-- Search -->
     <div class="col-md-12 pt-3">Search</div>
     <div class="col-md-12 pt-3">Remittance History</div>
     <table class="table table-striped table-hover">
       <thead class="">
         <tr>
          <th>Date</th>
          <th scope="col">Transfer#</th>
          <th scope="col">Beneficiary Bank</th>
          <th scope="col">Beneficiary Name</th>
          <th scope="col">Beneficiary A/C#</th>
          <th scope="col">Amount(INR)</th>
         </tr>
       </thead>
       <tbody>
         <?php
         $database_row = $CustomerObj->remittanceHistory();
         foreach($database_row as $row){
         echo "
         <tr>
          <td>".$row["date"]."</td>
          <td>".$row["transfer_id"]."</td>
          <td>".$row["bene_bank_name"]."</td>
          <td>".$row["bene_name"]."</td>
          <td>".$row["bene_ac_number"]."</td>
          <td>".$row["rmt_amt"]."</td>
         </tr>";
          }
          ?>
        </tbody>
     </table>
     <div class="btn bg-success">Remittance to my own Account</div>
     <div class="btn bg-warning">Select from the past history</div>
     <a href="form_indi_application.php"><div class="btn bg-primary">Remittance to new beneficiary</div><a>
  </div>
</body>
 

  <!-- Footer -->
  <?php include 'xFooter.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
