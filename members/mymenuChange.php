<?php
  include $_SERVER["DOCUMENT_ROOT"]."/inc/session.php";
  include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";
  ini_set('display_errors', '0'); // 에러메세지 지우는 코드
  $case = $_POST['case'];
  switch($case){
    case "nickname" :
      $new_name = $_POST["nickname"];
      $sql = "update members set u_name='$new_name' where u_id='$s_id';";
      mysqli_query($dbcon,$sql);
    break;
    case "user" :
      $new_user = $_POST["user"];
      $sql = "update members set reservation='$new_user' where u_id='$s_id';";
      mysqli_query($dbcon,$sql);
    break;
    case "tel" :
      $new_tel = $_POST["tel"];
      $sql = "update members set u_tel='$new_tel' where u_id='$s_id';";
      mysqli_query($dbcon,$sql);
    break;
    default :
      echo "<strong style=\"margin:45%; width: 150px; white-space: nowrap;\">알 수 없는 오류</strong>";
    exit;
    break;
  };
  echo "
    <script type=\"text/javascript\">
      alert(\"변경 되었습니다.\");
      location.href=\"mymenu.php\";
    </script>
  ";
  mysqli_close($dbcon);
?>
