<?php

  session_start();

  session_unset(); //it will unset/rest all the session variables

  session_destroy();// it will destroy the session


  header("location: indexx.php");





?>