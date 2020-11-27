<?php
include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<title>Customer Remittance History</title>
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
   <?php include 'xNavigation_admin.php'; ?>
    <h2>Customer Remittance Record </h2>
      <br>
    <div class="">
      <form action="" method="post">
      <lable>Search by ID#</lable>
      <input type="number" value="id" name="id">
      <button type="submit" class="btn-success" name="idHistorySearch">Click</button>
      </form>
   
    </div>
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
         $database_row = $CustomerObj->remittanceHistoryAll();

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
     <a href="admin_home.php"><div class="btn bg-primary text-white">&nbsp;Go to Admin Home</div><a>
  </div>
</body>
 

  <!-- Footer -->
  <?php include 'xFooter.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
