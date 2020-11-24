<?php
  include 'action.php';
?>

<h4 class="card-title"><i class="fa fa-exchange" aria-hidden="true"></i>Today's exchange rate for INR(TTS)</h4>
            <ul>
            <li>Standard rate:
              <?php
              $CustomerObj->getRate();
              echo $_SESSION["rate"];
              ?>
            </li>
            <li>More than JPY0.5M:</li>
            <li>More than JPY1.0M:</li>
            </ul>