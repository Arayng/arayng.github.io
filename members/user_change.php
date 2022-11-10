<?php
  include "../inc/session.php";
  include "../inc/dbcon.php";
  $new_user = $_POST["user"];
  $sql = "update members set reservation='$new_user' where u_id='$s_id';";
  mysqli_query($dbcon,$sql);

  echo "
    <script type=\"text/javascript\">
      alert(\"변경 되었습니다.\");
      location.href=\"mymenu.php\";
    </script>
  "
?>
