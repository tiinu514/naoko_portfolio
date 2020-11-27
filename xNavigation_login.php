<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="indexx.php"> <i class="fa fa-connectdevelop" aria-hidden="true"></i>Tiinu Bank</a>

      <span class="text-white" id="view_todayE"></span>
      <script type="text/javascript">
      document.getElementById("view_todayE").innerHTML = getTodayE();

      function getTodayE() {
        var now = new Date();
        var year = now.getFullYear();
        var mon = now.getMonth(); //１足さない
        var day = now.getDate();
        var you = now.getDay(); //曜日(0～6=日～土)

        //曜日の選択肢
        var youbi = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
        //月名の選択肢
        var month = new Array("January","February","March","April","May","June","July","August","September","October","November","December");

        //出力用
        var s = month[mon] + " " + day + ", " + year + " (" +youbi[you] + ")";
        return s;
      }
      </script>




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
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="xlogout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>