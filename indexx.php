<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include 'xheader.php'; ?>
  <?php include 'action.php'; ?>

</head>

<body>

  <!-- Navigation -->
 <?php include 'xNavigation.php'; ?>

  <!-- Header -->
  <header class="">
  <img src="welcome_banner.png" class="mb-5" alt="Responsive image" width="100%">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <!-- <div class="col-lg-12">
          <h1 class="display-4 dark mt-5 mb-2">Business Name or Tagline</h1>
          <p class="lead mb-5 text-dark-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non possimus ab labore provident mollitia. Id assumenda voluptate earum corporis facere quibusdam quisquam iste ipsa cumque unde nisi, totam quas ipsam.</p>
        </div> -->
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>What We Do</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
        <a class="btn btn-primary btn-lg" href="#">Read more &raquo;</a>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Contact Us</h2>
        <hr>
        <i class="fa fa-map-marker" aria-hidden="true"></i>&lt;HQ&gt;<br>
           &nbsp;&nbsp;4 Chome-2-8 Shibakoen,<br>
           &nbsp;&nbsp;Minato City,<br>
           &nbsp;&nbsp;Tokyo 105-0011<br><br>
            
           <i class="fa fa-clock-o" aria-hidden="true"></i>&lt;OPEN HOUR&gt;<br>
           &nbsp;&nbsp;Weekdays: 9AM-3PM<br><br>

           <i class="fa fa-phone" aria-hidden="true"></i>&lt;TEL&gt;<br>
           &nbsp;&nbsp;000-0000-000&nbsp;*Weekdays: 9AM-5PM<br><br>

           <i class="fa fa-envelope-o" aria-hidden="true"></i>&lt;E-mail&gt;<br>
           &nbsp;&nbsp;xxxx@xxxx.xxx&nbsp;<br>
      </div>
    </div>

    <!-- /.row -->
    <!-- card.1 ex-rate -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="https://placehold.it/300x200" alt="">
          <div class="card-body">
          <h4 class="card-title"><i class="fa fa-exchange" aria-hidden="true"></i>Today's exchange rate for 1INR to JPY(TTS)</h4>
            <ul>
              <?php
              $CustomerObj->getRate();
              $dailyrate=$_SESSION["rate"];
              $dailyrate2=$dailyrate-0.0025;
              $dailyrate3=$dailyrate-0.0075;

              echo "<li>Standard rate:".$dailyrate."</li>";
              echo "<li>More than JPY0.5M:".number_format($dailyrate2,4)."</li>";
              echo "<li>More than JPY1.0M:".number_format($dailyrate3,4)."</li>";
              ?>
            </ul>
            <!-- <h4 class="card-title"><i class="fa fa-exchange" aria-hidden="true"></i>Today's exchange rate for INR(TTS)</h4>
            <ul>
            <li>Standard rate:</li>
            <li>More than JPY0.5M:</li>
            <li>More than JPY1.0M:</li>
            </ul> -->
          </div>
          <div class="card-footer">
            <a href="conversion_demo.php" class="btn btn-primary">Try Conversion caliculation!</a>
          </div>
        </div>
      </div>
      <!-- card.2 application -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="https://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Application Form</h4>
            <i class="fa fa-user" aria-hidden="true"></i><a href="form_indi_free.php"> #1 Individual</a>&nbsp;&nbsp;
            <i class="fa fa-building" aria-hidden="true"></i><a href="form_corp_free.php"> #2 Corporate</a>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
      <!-- card.3 notice -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="https://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="login.php" class="btn btn-primary">Login now!</a>
          </div>
        </div>
      </div>
    
    <!-- card.4 news -->
    <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="https://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title"><i class="fa fa-user-plus" aria-hidden="true"></i>Sign up</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="sign_up.php" class="btn btn-primary">Sign up now!</a>
          </div>
        </div>
      </div>
   
    <!-- card.5 access -->
    <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="https://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title"><i class="fa fa-map-marker" aria-hidden="true"></i>Access</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="access.php" class="btn btn-primary">Check the map!</a>
          </div>
        </div>
      </div>
    <!-- card.6 xxxx -->
    <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="https://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title"><i class="fa fa-plus" aria-hidden="true"></i>News</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Check updates!</a>
          </div>
        </div>
      </div>
    
    <!-- /.row -->
    </div>
  </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include 'xFooter.php'; ?>
  <!-- <footer class="py-5 bg-dark">
    <div class="row">
      <p class="m-0 text-center text-white col">Copyright &copy; Your Website 2020</p>
      <p class="m-0 text-center text-white col">Copyright &copy; Your Website 2020</p>
      <p class="m-0 text-center text-white col">Copyright &copy; Your Website 2020</p>
    </div>
  </footer> -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
