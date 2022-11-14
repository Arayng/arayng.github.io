<!-- 이벤트 페이지 -->
<?php
  include "../inc/session.php";
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
  <link rel="stylesheet" href="../css/mylayout.css">
  <link rel="stylesheet" href="css/event.css">
  <?php include "../inc/src_in.php";?>
  <script src="js/event_winner.js"></script>
</head>
<body>
  <!-- 헤더영역 -->
  <?php include "../inc/header_in.php";?>
  <!-- 컨텐츠 영역 -->
  <div class="box">
      <h2 class="p_title">이벤트</h2>
  </div>
  <div class="wrap">
    <section class="tap-menu">
      <ul>
        <li><a href="event.php">진행중인 이벤트</a></li>
        <li><a href="event_end.php">종료된 이벤트</a></li>
        <li><a href="event_winner.php" class="on">당첨자 발표</a></li> 
      </ul>
      <?php if($s_id == 'admin@admin'){?>
        <a href="e_write.php" class="e_regi">게시글 등록하기</a>
      <?php };?>
      </section>
      <section class="board-wrap">
        <ul>
          <?php
        $sql = "select * from e_notice where del=0;";
        $paging_sql = "select * from e_notice where del=0 order by ew_idx desc";
        include "../inc/pager.php";
        while($arr = mysqli_fetch_array($paging_sql_result)){
          ?>
        <li class="board">
          <a href="#" class="list_que">
            <h3 class="board-title"><?php echo $arr["title"];?></h3>
            <p class="board-date"><?php echo $arr["date"];?></p>
            <img src="../img/drop.jpg" class="drop_btn" alt="열기">
          </a>
          <div class="board_content">
            <?php echo $arr["content"];?>
          </div>
          <?php if($s_id == 'admin@admin'){?>
            <div class="b_group">
              <input type="hidden" name="idx" id="ew_idx" value="<?php echo $arr["ew_idx"];?>">
              <a href="#" class="mgr_btn del_btn">삭제</a>
              <a href="en_modify.php?id=<?php echo $arr["ew_idx"];?>" class="mgr_btn mod_btn">수정</a>
            </div>
          <?php };?>
        </li>
        <?php }?>
      </ul>
      <div class="pager_list">
        <?php include "../inc/pager_list.php";?>
      </div>
    </section>
  </div>  
</body>
</html>