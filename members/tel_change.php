<?php
  include "../inc/session.php";
  include "../inc/dbcon.php";
  $new_tel = $_POST["tel"];
  $sql = "update members set u_tel='$new_tel' where u_id='$s_id';";
  mysqli_query($dbcon,$sql);

  echo "
    <script type=\"text/javascript\">
      alert(\"변경 되었습니다.\");
      location.href=\"mymenu.php\";
    </script>
  "
?>
