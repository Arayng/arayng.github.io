<?php
  include "../inc/session.php";  
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때</title>
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/join_com.css">
</head>
<body>
  <!-- 헤더 -->
  <header>
    <div class="header_wrap">
      <h1 class="logo"><a href="//localhost">여기어때</a></h1>
      
      <h2 class="hide">상단 메뉴</h2>
      <ul class="top_menu">
        <li><a href="search.html" class="top_menu1">내주변</a></li>
        <li><a href="event.html" class="top-menu2">이벤트</a></li>
        <li><a href="../login/logout.php" class="top_menu3 logout">로그아웃</a></li>
      </ul>
    </div>
  </header>
  <!-- 헤더 끝 -->

  <div class="wrap">
    <div class="text_box">
      <p>환영합니다. <?php echo $s_name; ?>님</p>
      <p><span class="f_color">회원 가입</span>이</p>
      <p>완료되었습니다.</p>
    </div>
    <div class="link_box">
      <a href="//localhost" class="home">홈 으로</a>
      <a href="event.html" class="benefits">혜택 알아보기</a>
    </div>
  </div>
</body>
</html>