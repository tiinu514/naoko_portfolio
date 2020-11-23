<!DOCTYPE html>
<html lang="en">
<title>Login</title>
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
       <div class="container text-center">
       <form action="action.php" method="post"><!-- <start of the form> -->
        <div class="row"> 
         <div class="col-md-3"></div>
         <div class="col-md-12 form-group">
           <!-- Login -->
          <div class="col-md-12 pt-3">
            <h2 class="text-center">Login</h2><br>
          </div>
          
          <div class="row">
            <!-- Customer ID -->
              <div class="col-md-12">
                <div class="input-group">
                 <label class="col-md-12" for="">Your ID#</label>
                  <input name="user_id" placeholder="Customer ID" class="form-control col-md-4 mx-auto" >
              </div>
              </div>
             
              <!-- date of birth-->
              <div class="col-md-12 p-3">
                <div class="input-group">
                <label class="col-md-12" for="">Your Birthday</label>
                  <input name="date_of_birth" type="date" placeholder="yyyy-mm-dd" class="form-control col-md-4 mx-auto">
                </div>
              </div>
            <!-- password -->
              <div class="col-md-12 pb-3">
                <div class="input-group">
                <label class="col-md-12" for="">Password</label>
                  <input name="password" type="password" placeholder="Password" class="form-control col-md-4  mx-auto">
                </div>
              </div>
            <!-- button1 -->
              <div class="col-md-12">
                  <button name="login" class="btn btn-success center col-md-4 mt-5">Login</button>
              </div>

          </div>

         <div class="col-md-3"></div>
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
