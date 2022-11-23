<?php
  include "../inc/session.php";
  include "../inc/dbcon.php";
  $sql = "select * from members where u_id='$s_id';";
  $pm = mysqli_query($dbcon,$sql);
  $mem = mysqli_fetch_array($pm);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때 - 내 정보</title>
  <?php include "../inc/src_in.php";?>
  <link rel="stylesheet" href="../css/mylayout.css">
  <link rel="stylesheet" href="../css/coupon.css">
  <script src="../js/mymenu.js"></script>
</head>
</head>
<body>
  <!-- 헤더영역 -->
  <?php include "../inc/header_in.php";?>
  <!-- 컨텐츠 영역 -->
  <div class="box">
      <h2 class="p_title">쿠폰 등록</h2>
  </div>
  <div class="edit-wrap">
    <!-- 컨텐츠 -->
    <section class="editor">
      <form action="coupon_edit.php" method="post">
        <fieldset class="editor-fieldset">
          <legend>쿠폰 등록</legend>
          <div class="fbox">
            <label for="disc">할인율(금액)</label>
            <input type="number" name="disc" id="disc" placeholder="(%) 또는 금액(원) 입력">
          </div>
          <div class="fbox">
            <label for="disc_title">이벤트 이름</label>
            <input type="text" name="disc_title" id="disc_title" placeholder="대실 전용">
          </div>
          <div class="fbox">
            <label for="title">쿠폰 이름</label>
            <input type="text" name="title" id="title" placeholder="회원가입 감사 쿠폰">
          </div>
          <div class="fbox">
            <label for="max">최대 할인 금액</label>
            <input type="number" name="max" id="max">
          </div>
          <div class="fbox">
            <label for="period">쿠폰 사용가능 기간</label>
            <input type="number" name="period" id="period" placeholder=" 일 입력">
          </div>
          <div class="fbox">
            <label for="min">최소 결제 금액</label>
            <input type="number" name="min" id="min">
          </div>
          <div class="fbox">
            <label for="notice">공지사항 또는 조건</label>
            <input type="text" name="notice" id="notice">
          </div>
        </fieldset>
        <div class="b_group">
          <button type="button" class="cancel_btn" onclick="history.back()">뒤로가기</button>
          <button type="submit" class="submit_btn">등록하기</button>
        </div>
      </form>
    </section>
  </div>
</body>
</html>