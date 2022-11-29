<?php
  $disc = $_POST['disc'];  // 할인율
// 쿠폰 제목
  $disc_title = "&span".$_POST['disc_title']." &/span";
  $disc_title .= $disc<100? $disc."% 할인 쿠폰" : number_format($disc)."원 할인 쿠폰";
  $title = $_POST['title']; // 소제목
  $max_disc = $_POST['max']; // 최대 할인 금액
  $period = $_POST['period']; // 사용 기한
  $min = $_POST['min']; // 최소 결제 금액
  $notice = $_POST['notice']; // 공지사항 기타사항 등
  include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";
  $sql = "insert into coupon_info(disc, disc_title, max_disc, title, period, min_limit, notice) values ('$disc', '$disc_title', '$max_disc', '$title', '$period', '$min', '$notice');";
  // echo $sql;
  mysqli_query($dbcon, $sql);
  mysqli_close($dbcon);
  echo "
    <script>
      location.href=\"coupon.php\";
      alert(\"쿠폰 등록이 완료되었습니다.\");
    </script>
  "
?>