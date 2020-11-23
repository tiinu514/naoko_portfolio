<!DOCTYPE html>
<html lang="en">

<title>Ex-rate</title>

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
    <form action="ex_rate_confirm.php" method="post">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-12 form-group">
          <!-- Login -->
          <div class="col-md-12 pt-3">
            <h2 class="text-center">Daily Rate Update</h2><br>
          </div>


          <div class="row">
            <!-- Date-->
            <div class="col-md-12">
              <div class="text-center">
                <?php
                echo "Today is " . date("Y/m/d") . "<br>";
                ?>
              </div>
              <br>
            </div>

            <!-- standard -->
            <div class="col-md-12">
              <div class="input-group">
                <label class="col-md-6 text-right" for="">Standard</label>
                <input type="number" step="any" name="rate1" class="form-control col-md-2" required>
              </div>
              　　
            </div>
            　
            <!-- username -->
            <!-- 　　　 <div class="col-md-12">
            <div class="input-group">
      　　　　       <div class="input-group-prepend">
       　　　           <span class="input-group-text">@</span>
       　　　　      </div>
      　　　　       <input class="form-control col-md-2" type="text"   disabled>
     　　　      </div> -->
            <div class="row" style="position:relative; left:39.5%">
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      Entered by
                    </span>
                  </div>
                  <input type="text" class="form-control col-md-7 bg-transparent" value="" readonly>
                </div>
              </div>
            </div>

          </div>
          <!-- button -->
          <div class="col-md-12 mt-5">
            <button name="ex_update" class="btn btn-success col-md-4 d-block mx-auto">Update</button>
          </div>
    </form>

  </div>

  <div class="col-md-3"></div>
  </div>

  </div>
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

<!-- <?php
      // if(isset($_POST['ex_update'])){
      //   $date=$_POST['date'];
      //   $rate=$_POST['rate1'];

      //   $computeRate1=$rate-0.0025;
      //   $computeRate2=$rate-0.0050;

      //   echo $date."<br>";
      //   echo "More than JPY0.5M: ".$computeRate1."<br>";
      //   echo "More than JPY1M: " .$computeRate2."<br>";
      // }
      ?> -->