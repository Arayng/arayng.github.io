<?php
      include "../inc/dbcon.php";

      $id = $_GET['id'];
      $sql = "select count(*) as chk from members where u_id='$id';";
      $result = mysqli_query($dbcon,$sql);
      $array = mysqli_fetch_array($result);
      echo $array['chk'];

      mysqli_close($dbcon);
?>