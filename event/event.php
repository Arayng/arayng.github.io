<!-- 이벤트 페이지 -->
<?php
  include $_SERVER["DOCUMENT_ROOT"]."/inc/session.php";
  include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";
  $today = date("Y-m-d");
  $date_chk = "select * from event where end_date < '$today';";
  $date_chk_result = mysqli_query($dbcon,$date_chk);
  while($return_chk = mysqli_fetch_array($date_chk_result)){
    $end_chk = "update event set end_cnt=1 where event_idx={$return_chk["event_idx"]};";
    mysqli_query($dbcon,$end_chk);
  };
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
  <link rel="stylesheet" href="css/eventLayout.css">
  <link rel="stylesheet" href="css/event.css">
</head>
<body>
<!-- 헤더영역 -->
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";?>
<!-- 컨텐츠 영역 -->
  <div class="box">
      <h2 class="p_title">이벤트</h2>
  </div>
  <div class="wrap">
    <section class="tap-menu">
      <ul>
        <li><a href="event.php" class="on">진행중인 이벤트</a></li>
        <li><a href="finishEvent.php">종료된 이벤트</a></li>
        <li><a href="annEvent.php">당첨자 발표</a></li>
      </ul>
      <?php if($s_id == 'admin@admin'){?>
        <a href="eventRegist.php" class="e_regi">이벤트 등록하기</a>
      <?php };?>
    </section>
    <section class="event-wrap">
      <ul>
        <?php
          $sql = "select * from event where end_cnt=0;";
          $paging_sql = "select * from event where end_cnt=0 order by event_idx desc";
          include $_SERVER["DOCUMENT_ROOT"]."/inc/pager.php";
          while($arr = mysqli_fetch_array($paging_sql_result)){
            $s_explode = explode("-", $arr["start_date"]);
            $s_date = $s_explode[0].'. '.$s_explode[1].'. '.$s_explode[2].'. ';
            $e_explode = explode("-", $arr["end_date"]);
            $e_explode[0] >= 9999 ? $e_date = '별도 안내시 까지': $e_date = $e_explode[0].'. '.$e_explode[1].'. '.$e_explode[2].'. ';
        ?>
        <li>
          <h3 class="event-title"><?php echo $arr["title"]?></h3>
          <p class="event-period">기간 : <?php echo $s_date;?> ~ <?php echo $e_date;?></p>
          <?php if($s_id == 'admin@admin'){?>
            <a href="eventModify.php?id=<?php echo $arr["event_idx"];?>" class="e_modify">수정하기</a>
          <?php };?>
          <a href="viewPage/<?php echo $arr["event_idx"];?>/" class="event-img">
            <img src="banner_img/banner_<?php echo $arr["event_idx"].".".$arr["banner_type"];?>" alt="<?php echo $arr["alt"];?>">
          </a>
        </li>
        <?php };?>        
      </ul>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/pager_list.php";?>
    </section>
  </div>
<!-- 푸터 영역 -->
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php";?>
</body>
</html>