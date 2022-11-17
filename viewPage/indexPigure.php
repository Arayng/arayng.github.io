<!-- 이벤트 상세 페이지 -->
<?php
  include "../../inc/session.php";
  include "../../inc/dbcon.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때 - 이벤트</title>
  <meta http-equiv="Expires" content="Mon, 06 Jan 1990 00:00:01 GMT">
  <meta http-equiv="Expires" content="-1">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <!-- 공용 src -->
  <link rel="stylesheet" href="http://localhost/css/mylayout.css">
  <link rel="stylesheet" href="http://localhost/css/search_bar.css">
  <link rel="stylesheet" href="http://localhost/css/index.css">
  <link rel="stylesheet" href="http://localhost/css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/css/daterangepicker.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="http://localhost/js/daterangepicker.js"></script>
  <script type="text/javascript" src="http://localhost/js/index.js"></script>
  <script type="text/javascript" src="http://localhost/js/search_bar.js"></script>
  <script type="text/javascript" src="http://localhost/js/jquery.magnific-popup.js"></script>
  <script type="text/javascript" src="http://localhost/js/jquery.magnific-popup-setting.js"></script>
  <!-- viewPage -->
  <link rel="stylesheet" href="../../css/view.css">
</head>
<body>
  <!-- 헤더영역 -->
  <?php include "../../inc/header_absolute.php";?>
  <!-- 컨텐츠 영역 -->
  <div class="box">
      <h2 class="p_title">이벤트 상세</h2>
  </div>
  <div class="wrap">
    <section class="event-title">
      <h3>DB에서 이벤트 제목 가져오기</h3>
      <p>DB에서 기간 가져오기</p>
      <a href="http://localhost/event/event.php" class="lBtn">목록</a>
    </section>
    <section class="event-wrap">
      <?php
        $event_idx = basename(getcwd());
        $sql = "select img_cnt from event where event_idx = '$event_idx';";
        $result = mysqli_query($dbcon,$sql);
        $img_cnt = mysqli_fetch_array($result)["img_cnt"];
        for($i=0;$i<$img_cnt;$i++){
      ?>
        <img src="<?php echo $i+1;?>" alt="이벤트 이미지">
      <?php };?>
    </section>
  </div>  
</body>
</html>