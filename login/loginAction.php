<?php
  session_start();
// 데이터 받기
  $u_id = $_POST["user_id"];
  $u_pw = $_POST["user_pw"];
// 쿼리 접속
  include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";
// 쿼리 생성 및 전송
  $sql = "select * from members where u_id='$u_id';";
  $pm = mysqli_query($dbcon, $sql); // pm = parameter
  $result = mysqli_fetch_array($pm);
  mysqli_close($dbcon);
// 입력한 id가 있는지 확인하기;
  if(!$result){
    echo "
      <script type=\"text/javascript\">
        location.href=\"login.php?lf=1\";
      </script>
    ";
    exit;
  }else{
    if($result["u_pw"] == $u_pw){
      $_SESSION["login_idx"] = $result["idx"];
      $_SESSION["login_id"] = "$u_id";
      $_SESSION["login_name"] = $result["u_name"];
      echo "
        <script type=\"text/javascript\">
          location.href=\"//localhost/index.php\";
        </script>
      ";
    }else{
      echo "
        <script type=\"text/javascript\">
          location.href=\"login.php?lf=1\";
        </script>
      ";
    };
  };
?>
