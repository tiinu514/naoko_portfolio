<?php
include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<title>Remittance History</title>
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
   <?php include 'xNavigation_login.php'; ?>
    <h2>Hello,
    <?php
      if(!empty($_SESSION['user_name'])){
        echo $_SESSION['user_name']."!<br>";
        // echo $_SESSION['category']."!<br>";
      }else{
        echo "Guest!<br>";
      }
      ?>
      </h2>
      <br>
  
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

         if($database_row){
          foreach($database_row as $row){
            echo "
            <tr>
             <td>".$row["date"]."</td>
             <td>".$row["transfer_id"]."</td>
             <td>".$row["bene_bank_name"]."</td>
             <td>".$row["bene_name"]."</td>
             <td>".$row["bene_ac_number"]."</td>
             <td>".number_format($row["rmt_amt"])."</td>
            </tr>";
             }
         }else{
        ?>
          <tr>
            <td colspan="6" class="text-center text-danger">No Records Found</td>
          </tr>
        <?php
         }
        
          ?>
        </tbody>
     </table>
     <br>
     <a href="form_indi_application.php"><div class="btn bg-primary text-white"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Remittance to new beneficiary</div><a>
  </div>
</body>
 

  <!-- Footer -->
  <?php include 'xFooter.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
