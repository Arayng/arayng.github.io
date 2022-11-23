<?php
  include "../inc/session.php";
  include "../inc/dbcon.php";

  $case = $_POST['case'];
  switch($case){
    case "nickname" :
      $new_name = $_POST["nickname"];
      $sql = "update members set u_name='$new_name' where u_id='$s_id';";
      mysqli_query($dbcon,$sql);

      echo "
        <script type=\"text/javascript\">
          alert(\"변경 되었습니다.\");
          location.href=\"mymenu.php\";
        </script>
      ";
    break;
    case "user" :
      $new_user = $_POST["user"];
      $sql = "update members set reservation='$new_user' where u_id='$s_id';";
      mysqli_query($dbcon,$sql);
    
      echo "
        <script type=\"text/javascript\">
          alert(\"변경 되었습니다.\");
          location.href=\"mymenu.php\";
        </script>
      ";
    break;
    case "tel" :
      $new_tel = $_POST["tel"];
      $sql = "update members set u_tel='$new_tel' where u_id='$s_id';";
      mysqli_query($dbcon,$sql);
    
      echo "
        <script type=\"text/javascript\">
          alert(\"변경 되었습니다.\");
          location.href=\"mymenu.php\";
        </script>
      ";
    break;
    default :
      echo "알 수 없는 오류";
    break;
  };
  mysqli_close($dbcon);
?>
