<?php
  session_start();
// 세션 삭제
// unset(세션변수);
  unset($_SESSION["login_idx"]);
  unset($_SESSION["login_id"]);
  unset($_SESSION["login_pwd"]);
// 세션 삭제 후 인덱스로 복귀
  echo "
  <script type=\"text/javascript\">
  alert(\"로그아웃 되었습니다.\");
  location.href=\"//localhost/index.php\";
  </script>
  ";
// 세션 삭제 후 원래 있던 페이지로 돌아가기 >> 개발중
?>