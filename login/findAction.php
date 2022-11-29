<?php
  include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";
    $id = $_POST['user_id'];
    $tel = $_POST['user_tel'];
    $sql = "select count(*) as chk from members where u_id='$id' and u_tel='$tel';";
    $result = mysqli_query($dbcon,$sql);
    $array = mysqli_fetch_array($result);
    mysqli_close($dbcon);
    if($array['chk'] == 1){
      echo "
      <script>
        alert(\"가입된 이메일로 비밀번호 변경 메일을 발송하였습니다.\")
        location.href=\"login.php\";
      </script>
      ";
    }else{
      echo "
      <script>
        alert(\"일치하는 정보가 없습니다.\")
        location.href=\"history.back()\";
      </script>
      ";
    };
?>
