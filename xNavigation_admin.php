<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="indexx.php"> <i class="fa fa-connectdevelop" aria-hidden="true"></i>Tiinu Bank</a>

      <span class="text-white" id="view_todayE">
      <?php 
      echo "Today is " . date("Y-m-d") . "<br>";?></span>
      

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="indexx.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="xlogout.php">Logout</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>