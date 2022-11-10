<?php 
  $lf = isset($_GET["lf"])? $_GET["lf"]:"0";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때 - 로그인</title>
  <link rel="stylesheet" href="../css/login.css">
  <script type="text/javascript" src="../js/login.js"></script>
</head>
<body>
  <div class="wrap">
    <h1 class="logo"><a href="../index.php">여기어때</a></h1>
    <form action="lg.php" method="post" id="login">
      <fieldset>
        <legend class="hide">로그인</legend>
        <div>
          <input type="hidden" name="lf" id="lf" value="<?php echo $lf;?>">
          <p class="err-txt" id="err_txt"></p>
        </div>
        <label for="user_id" class="hide">아이디(이메일)</label>
        <input type="text" name="user_id" id="user_id" placeholder="아이디 (이메일)" class="inp_box id">
        <label for="user_pw" class="hide">비밀번호</label>
        <input type="password" name="user_pw" id="user_pw" placeholder="비밀번호" class="inp_box pw">
        <input type="submit" name="lg_btn" id="lg_btn" title="로그인" class="lg_btn"></input>
      </fieldset>
    </form>
      <div class="box">
        <a href="#" class="left_btn">아이디 / 비밀번호 찾기</a>
        <a href="../members/join.php" class="right_btn">회원가입</a>
      </div>
      <div class="sns_box">
        <h2 class="sns">SNS 로그인</h2>
        <a href="https://www.naver.com" class="naver">네이버</a>
        <a href="https://www.kakao.com" class="kakao">카카오톡</a>
        <a href="https://www.facebook.com" class="facebook">페이스북</a>
      </div>
      <p class="copyright">Copyright GC COMPANY Corp. All rights reserved.</p>
  </div>
</body>
</html>