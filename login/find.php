<?php 
  $ff = isset($_GET["ff"])? $_GET["ff"]:"0";
  $a = isset($_GET["a"])? $_GET["a"]:"0";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때 - 아이디 / 비밀번호 찾기</title>
  <!-- 내부 -->
  <link rel="stylesheet" href="//localhost/css/login.css">
  <script type="text/javascript" src="//localhost/js/login.js"></script>
  <!-- 외부 -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body>
  <div class="wrap">
    <h1 class="logo"><a href="//localhost/index.php">여기어때</a></h1>
    <form action="findAction.php" method="post" id="login">
      <fieldset>
        <legend class="hide">아이디/비밀번호 찾기</legend>
        <div>
          <p class="guide-txt" id="guide-txt">회원가입 시 등록한 이메일 주소를 입력해주세요.</p>
        </div>
        <label for="user_id" class="hide">이메일</label>
        <input type="text" name="user_id" id="user_id" placeholder="이메일 (ex) id@naver.com)" class="inp_box id" style="margin-top:10px">
        <p class="err-txt" id="err-txt" style="margin-top: 10px;"></p>
        <div class="hidden">
          <p class="guide-txt" id="guide-txt" style="margin-top: 0">회원가입 시 등록한 전화번호를 입력해주세요.</p>
          <label for="user_tel" class="hide">이메일</label>
          <input type="text" name="user_tel" id="user_tel" placeholder="전화번호" class="inp_box pw" style="margin-top:10px">
        </div>
        <button type="button" name="find_btn" id="find_btn"class="find_btn" style="opacity:0.5">확 인</button>
      </fieldset>
    </form>
    <p class="copyright" style="margin-top: 50px;">Copyright GC COMPANY Corp. All rights reserved.</p>
  </div>
</body>
</html>