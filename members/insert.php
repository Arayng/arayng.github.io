<?php
  session_start();
  include "../inc/dbcon.php";
  
  $u_id = $_POST["user_id"];
  $u_pw = $_POST["user_pw"];
  $u_name = $_POST["user_name"];
  $u_tel = $_POST["phone"];
  $reservation = $_POST["reservation"];
  $chk_privacy = isset($_POST["optprviacy_check"])? "Y" : "N";
  $chk_marketing = isset($_POST["marketing_check"])? "Y" : "N";
  $chk_location = isset($_POST["location_check"])? "Y" : "N";
  
  $sql = "insert into members(u_id, u_pw, u_name, u_tel, reservation, chk_privacy, chk_marketing, chk_location) ";
  $sql .= "values ('$u_id', '$u_pw', '$u_name', '$u_tel', '$reservation', '$chk_privacy', '$chk_marketing', '$chk_location');";
  
  // insert 쿼리전송
  mysqli_query($dbcon, $sql);
  
  // idx값 가져오기 위한 커리문;
  $sql = "select idx from members where u_id='$u_id';";
  // 쿼리 전송(2)
  $parameter = mysqli_query($dbcon, $sql);
  $result = mysqli_fetch_array($parameter);

  // 바로 로그인되게 세션 선언
  $_SESSION["login_idx"] = $result["idx"];
  $_SESSION["login_name"] = $u_name;
  // db종료
  mysqli_close($dbcon);

  // 완료페이지로 이동~
  echo"
  <script type=\"text/javascript\">
    location.href=\"join_com.php\";
  </script>
  "
?>