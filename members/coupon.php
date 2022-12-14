<?php
  include $_SERVER["DOCUMENT_ROOT"]."/inc/session.php";
  include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";
  include $_SERVER["DOCUMENT_ROOT"]."/inc/loginChk.php";
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
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/src.php";?>
  <link rel="stylesheet" href="//localhost/css/mylayout.css">
  <link rel="stylesheet" href="//localhost/css/coupon.css">
  <script src="//localhost/js/mymenu.js"></script>
</head>
</head>
<body>
<!-- 헤더영역 -->
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";?>
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
      <?php 
        $sql = "select a.coupon_no, a.use_coupon, a.start_date, b.* from coupon AS a join coupon_info AS b ON a.coupon_id = b.coupon_id where mem_idx = '$s_idx';";
        $pm = mysqli_query($dbcon,$sql);
        $today = date("Y-m-d");
      ?>
      <div class="cnt">
        <h3>보유중인 쿠폰 <span id="c_count"><?php echo mysqli_num_rows($pm);?></span>장</h3>
      </div>
      <?php
        if($s_id == 'admin@admin'){
      ?>
          <a href="couponRegist" class="admin-btn">쿠폰 등록하기</a>
      <?php 
        };
        while($coupon = mysqli_fetch_array($pm)){
          $disc_title = str_replace("&span","<span class=\"c-title\">",$coupon['disc_title']);
          $disc_title = str_replace("&/span",'</span>',$disc_title);
        // 시작일 + 쿠폰별 기한 = 종료일
          $strtoed =intval(strtotime($coupon['start_date'])+($coupon['period'] * 86400));
          $ed = date('Y. m. d',$strtoed);
          $exp = intval(($strtoed-strtotime($today)) / 86400);
      ?>
      <div class="c-box">
        <div class="c-left">
          <h4><?php echo $disc_title;?><span class="c-max">최대 <?php echo number_format($coupon['max_disc'])?>원 할인</span></h4>
          <p class="c-comm"><?php echo $coupon['title'];?></p>
          <div class="ab">
            <p class="exp"><?php echo $exp;?>일 남음</p>
            <p class="date"><?php echo $coupon['start_date'];?> ~ <?php echo $ed;?></p>
            <p class="limit"><?php echo number_format($coupon['min_limit']);?>원 이상 결제시 사용 가능</p>
            <p class="notice"><?php echo $coupon['notice'];?></p>
          </div>
        </div>
        <div class="c-right">
          <a href="#" class="using">사용하러 가기</a>
          <a href="#" class="coupon-detail">할인쿠폰 상세정보</a>
        </div>
      </div>
      <?php
        };
        mysqli_close($dbcon);
      ?>
    </section>
  </div>
<!-- 푸터영역 -->
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php";?>
</body>
</html>