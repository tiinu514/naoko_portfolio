<!DOCTYPE html>
<html lang="en">
<title>Registered!</title>
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
       
        <div class="row"> 
         <div class="col-md-3"></div>
         <div class="col-md-12 form-group">
           <!-- Login -->
          <div class="col-md-12 pt-3">
            <h2 class="text-center">Welcome to Tiinu Bank<br>You are registered successfully!</h2><br>
          </div>
          
          <div class="row">
            <!-- Customer ID -->
              <div class="col-md-12">
                <div class="input-group">
                 <label class="col-md-12" for="">Your ID#</label>
                  <div name="user_id" class="form-control col-md-4 mx-auto" >xxx</div>
              </div>
              </div>
             
              
            <!-- button1 -->
            <div class="col-md-12">
            <a href='login.php' class="btn bg-success text-white col-md-4 mt-5 d-block mx-auto">Login</a>

            </div>

          </div>

         <div class="col-md-3"></div>
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
