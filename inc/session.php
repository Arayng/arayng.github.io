<?php
  session_start();

  $s_idx = isset($_SESSION["login_idx"])?  $_SESSION["login_idx"] : "";
  $s_id = isset($_SESSION["login_id"])? $_SESSION["login_id"] : "";
  $s_name = isset($_SESSION["login_name"])? $_SESSION["login_name"] : "";
?>