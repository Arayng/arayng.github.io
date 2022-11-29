<!-- 이벤트 상세 페이지 -->
<?php
  include $_SERVER["DOCUMENT_ROOT"]."/inc/session.php";
  include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";
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
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/src.php";?>
<!-- viewPage -->
<link rel="stylesheet" href="//localhost/event/css/eventView.css">
<link rel="stylesheet" href="//localhost/event/css/eventLayout.css">
</head>
<body>
<!-- 헤더영역 -->
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";?>
<!-- 컨텐츠 영역 -->
  <div class="p_box">
      <h2 class="p_title">이벤트 상세</h2>
  </div>
  <?php
    $event_idx = basename(getcwd()); // 폴더명 가져오기;
    $sql = "select * from event where event_idx = '$event_idx';";
    $result = mysqli_query($dbcon,$sql);
    $arr = mysqli_fetch_array($result);
    $s_explode = explode("-", $arr["start_date"]);
    $s_date = $s_explode[0].'. '.$s_explode[1].'. '.$s_explode[2].'. ';
    $e_explode = explode("-", $arr["end_date"]);
    $e_explode[0] >= 9999 ? $e_date = '별도 안내시 까지': $e_date = $e_explode[0].'. '.$e_explode[1].'. '.$e_explode[2].'. ';
  ?>
  <div class="wrap">
    <section class="event-title">
      <h3><?php echo $arr['title']?></h3>
      <p><?php echo $s_date." ~ ".$e_date;?></p>
      <a href="//localhost/event/event.php" class="lBtn">목록</a>
    </section>
    <section class="event-wrap">
      <?php
        $img_cnt = $arr["img_cnt"];
        $ext = explode("/",$arr["img_type"]);
        for($i=0;$i<$img_cnt;$i++){
      ?>
        <img src="<?php echo ($i+1).".".$ext[$i];?>" alt="이벤트 이미지">
      <?php };?>
    </section>
  </div>
<!-- 헤더영역 -->
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php";?>
</body>
</html>