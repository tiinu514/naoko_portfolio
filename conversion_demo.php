

<!doctype html>
<html lang="en">
  <head>
    <title>Conversion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
         <!-- Navigation -->
 <?php include 'xNavigation.php'; ?>
 <?php include 'action.php'; ?>

 <!-- main -->
  <div class="container jumbotron mt-4"> 
  <div class="container text-center">
  <div class="col-md-12 pt-3">
        <h2 class="text-center">-Conversion Demonstration-</h2><br>
        

        <form action="" method="post">
         Bank is: <select name="bank" id="">
          <option value="BOI">BOI</option>
          <option value="Other">Other BK</option>
        </select><br>
        I want to remit INR based on
        <select name="base" id="">
          <option value="INR">INR</option>
          <option value="JPY">JPY</option>
        </select>.
        <br>
        Amount is <input type="number" name="amt" required>.<br>
        <br>
        <button type="submit" name="submit" class=" btn btn-success">Caliculate</button><br>
        </form>

        <br>
        <!-- Rate is <?php echo "$bk"; ?><br>
        Charge: <?php echo "$bk"; ?><br>
        Total amount is <?php echo number_format($base_amt); ?><br>
        -->
        <div></div>
        <div></div>
        <div></div>


        </div>

          

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 

    <?php
if(isset($_POST['submit'])){
  $bk=$_POST['bank'];
  $base=$_POST['base'];
  $base_amt=$_POST['amt'];

  $CustomerObj->getRate();
  $standard_rate=$_SESSION["rate"];
  
  echo $bk."<br>";
  echo "Base is ".$base.number_format($base_amt);


  if($bk=="BOI"){//if BOI & base is INR
    $chg=1500;
    if($base=="INR"){
      $computeJpy=floor($base_amt*$standard_rate);
      if($computeJpy<500000){
        $ex_rate=$standard_rate;
      }elseif($computeJpy>=1000000){
        $ex_rate=$standard_rate-0.0075;
      }else{
        $ex_rate=$standard_rate-0.0025;
        }
      $computeJpy=floor($base_amt*$ex_rate);
      $ttl_amt=$computeJpy+$chg;
    }else{  //if BOI & base is JPY
        if($base_amt<500000){
          $ex_rate=$standard_rate;
       }elseif($base_amt>=1000000){
        $ex_rate=$standard_rate-0.0075;
       }else{
        $ex_rate=$standard_rate-0.0025;
       }
       $computeInr=floor($base_amt/$standard_rate);
       $ttl_amt =$base_amt+$chg;
      }
    }else{ //if OTHER BK & base is INR
      $chg=2000;
      if($base=="INR"){
        $computeJpy=floor($base_amt*$standard_rate);
        if($computeJpy<500000){
          $ex_rate=$standard_rate;
        }elseif($computeJpy>=1000000){
          $ex_rate=$standard_rate-0.0075;
        }else{
          $ex_rate=$standard_rate-0.0025;
          }
          $computeJpy=floor($base_amt*$ex_rate);
          $ttl_amt=$computeJpy+$chg;
      }else{  //if OTHER BK& base is JPY
          if($base_amt<500000){
            $ex_rate=$standard_rate;
         }elseif($base_amt>=1000000){
          $ex_rate=$standard_rate-0.0075;
         }else{
          $ex_rate=$standard_rate-0.0025;
         }
         $computeInr=floor($base_amt/$standard_rate);
         $ttl_amt =$base_amt+$chg;
        }
      }
    echo " @".number_format($ex_rate,4)."<br>";

    if($base=="JPY"){
    echo "Equivalent INR: ".number_format($computeInr)."<br>";
  }else{
    echo "Equivalent JPY becomes ".number_format($computeJpy)."<br>";
  }

    echo "Commission charge: JPY".number_format($chg)."<br>";
    echo "Total payable amount: JPY".number_format($ttl_amt)."<br>";


    }

?>

<br>
<a href="indexx.php"><div class="update btn btn-primary">Go home</div></a>
</div>
</div>


<!-- Footer -->
<?php include 'xFooter.php'; ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>


<br>
<br>
<br>
