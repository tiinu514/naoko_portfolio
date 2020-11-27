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
   <?php include 'xNavigation_login.php'; ?>
    <h2>Hello,
    <?php
      if(!empty($_SESSION['user_name'])){
        echo $_SESSION['user_name']."!<br>";
        // echo $_SESSION['category']."!<br>";
      }else{
        echo "Guest!/<br>";
      }
      ?>
      </h2>
      <br>
   
     <br>
     <a href="mypage_history.php"><div class="btn bg-success text-white"><i class="fa fa-search" aria-hidden="true"></i> View my remittance history</div></a>
     <?php
      if(!empty($_SESSION['category'])){
        $category=$_SESSION['category'];
        // echo $category;
        if($category=="corporate"){
         echo '<a href="form_corp_application.php"><div class="btn bg-primary text-white"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Remittance to new beneficiary</div><a>';
        }else{
        echo '<a href="form_indi_application.php"><div class="btn bg-primary text-white"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Remittance to new beneficiary</div><a>';
      }
    }
      ?>
     
  </div>
</body>
 

  <!-- Footer -->
  <?php include 'xFooter.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
