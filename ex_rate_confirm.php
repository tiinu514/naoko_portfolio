<?php

if(isset($_POST['ex_update'])){
  // $date=$_POST['date'];
  $rate=$_POST['rate1'];

  $computeRate1=$rate-0.0025;
  $computeRate2=$rate-0.0050;
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Rate Confirmation</title>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <?php include 'xheader.php'; ?>

</head>

<body>
  <!-- Navigation -->
  <?php include 'xNavigation_admin.php'; ?>
 <div class="container jumbotron mt-4"> 
   <form action="action.php" method="post">
    <div class="col-md-12 pt-3">
        <h2 class="text-center">Do you confirm?</h2><br>
    </div>
    <div class="row col-md-12">
    <div class="col-4"></div>
    <div class="col">
      <table class="">
          <!-- <tr>
            <th class="text-right">Date:&nbsp; </th>
            <td class="text-center">
              <input class="border border-0 text-center bg-transparent" name="date" value="" readonly>
            </td>
             <td class="text-center" name="$date"></td> -->
          <!-- </tr> --> 
          <tr>
            <th class="text-right">Standard rate:&nbsp;</th>
            <td class="text-center">
              <input class="border border-0 text-center bg-transparent" name="rate" value="<?php echo number_format($rate,4); ?>" readonly>
            </td>
            <!-- <td class="text-center" name="$rate"></td> -->
          </tr>
          <tr>
            <th class="text-right">More than JPY0.5M:&nbsp;</th>
            <td class="text-center "><?php echo number_format($computeRate1,4); ?></td>
          </tr>
          <tr>
            <th class="text-right">More than JPY1.0M:&nbsp;</th>
            <td class="text-center"><?php echo number_format($computeRate2,4); ?></td>
          </tr>
        </table>
    </div>
    <div class="col-2 "></div>
    </div>
    <br>

    <div class="row col-md-12">
      <button type="submit" name="ex_yes" class="btn btn-success col-md-2 d-block mx-auto">Yes</button>
    </form>
    <a href="ex_rate.php" class="btn btn-danger col-md-2 d-block mx-auto">No</a>
    </div>

    

   

 </div>
  <!-- Footer -->
  <?php include 'xFooter.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>


</html>
