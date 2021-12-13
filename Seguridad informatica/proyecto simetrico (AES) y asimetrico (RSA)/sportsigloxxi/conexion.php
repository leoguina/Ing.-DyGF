<?php
  $link = mysqli_connect("localhost", "root", "");

  mysqli_select_db($link, "sportsigloxx");
  $link->set_charset("UTF8");
?>