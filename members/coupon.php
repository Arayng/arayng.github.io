<?php
  include "../inc/session.php";
  include "../inc/dbcon.php";
  $sql = "select * from members where u_id='$s_id';";
  $pm = mysqli_query($dbcon,$sql);
  $mem = mysqli_fetch_array($pm);

  $sql = "select a.coupon_no, a.use_coupon, b.* from coupon AS a join coupon_info AS b ON a.coupon_id = b.coupon_id where mem_idx = '$s_idx';";
  $pm = mysqli_query($dbcon,$sql);
  $coupon = mysqli_fetch_array($pm);
  $today = date("Y-m-d");
  $exp = intval((strtotime($coupon['end_date'])-strtotime($today)) / 86400);
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
      <h2 class="p_title">내 정보</h2>
  </div>
  <div class="main-wrap">
    <section class="lnb">
      <ul>
        <li><a href="mymenu.php" class="">내 정보</a></li>
        <li><a href="coupon.php" class="on">쿠폰함</a></li>
        <li><a href="myreview.php" class="">작성 리뷰 관리</a></li>
        <li><a href="reservations.php" class="">예약 내역</a></li>
      </ul>
    </section>

    <!-- 컨텐츠 -->
    <section class="content">
      <div class="cnt">
        <h3>보유중인 쿠폰 <span id="c_count"><?php echo mysqli_num_rows($pm);?></span>장</h3>
      </div>
      <div class="c-box">
        <div class="c-left">
          <h4><?php echo $coupon['disc_title'];?><span class="c-max"> 최대 <?php echo $coupon['max_disc']?>원 할인</span></h4>
          <p class="c-comm"><?php echo $coupon['title'];?></p>
          <div class="ab">
            <p class="exp"><?php echo $exp;?>일 남음</p>
            <p class="date">사용 가능일 ~ 사용 종료일</p>
            <p class="limit">제한금액</p>
            <p class="notice">공지사항</p>
          </div>
        </div>
        <div class="c-right">
          <a href="" class="using">사용하러 가기</a>
          <a href="" class="coupon-detail">할인쿠폰 상세정보</a>
        </div>
      </div>
    </section>
  </div>
</body>
</html>