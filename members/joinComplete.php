<?php
  include $_SERVER["DOCUMENT_ROOT"]."/inc/session.php";  
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때</title>
  <link rel="stylesheet" href="//localhost/css/index.css">
  <link rel="stylesheet" href="//localhost/css/joinComplete.css">
</head>
<body>
<!-- 헤더 -->
<?php
  include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";  
?>
<!-- 헤더 끝 -->
  <div class="wrap">
    <div class="text_box">
      <p>환영합니다. <?php echo $s_name;?> 님</p>
      <p><span class="f_color">회원 가입</span>이</p>
      <p>완료되었습니다.</p>
    </div>
    <div class="link_box">
      <a href="//localhost/" class="home">홈 으로</a>
      <a href="//localhost/event/event.php" class="benefits">혜택 알아보기</a>
    </div>
  </div>
</body>
</html>