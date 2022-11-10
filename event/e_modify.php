<!-- 이벤트 페이지 -->
<?php include "../inc/session.php";?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>여기어때 - 이벤트 수정</title>
    
    <link rel="stylesheet" href="../css/mylayout.css">
    <link rel="stylesheet" href="../css/event_regi.css">
    <?php include "../inc/src_in.php";?>
    <script src="../js/event_regi.js"></script>
  </head>
  <body>
    <!-- 헤더영역 -->
    <?php include "../inc/header_in.php";?>
    <!-- 컨텐츠 영역 -->
    <!-- 수정 작업을 위한 db연결 및 데이터 가져오기-->
    <?php
      include "../inc/dbcon.php";
      $idx = $_GET["id"];
      $sql = "select * from event where event_idx=$idx";
      $arr = mysqli_fetch_array(mysqli_query($dbcon,$sql));
      $s_date = str_replace("-","",$arr["start_date"]);
      $e_date = str_replace("-","",$arr["end_date"]);
    ?>
    <div class="box">
      <h2 class="p_title">이벤트 등록</h2>
  </div>
  <div class="regi_wrap">
    <form action="event_edit.php" method="post" enctype=multipart/form-data>
      <fieldset style="display:block">
        <legend>이벤트 등록</legend>
        <input type="hidden" name="action_chk" value="modify">
        <input type="hidden" name="event_idx" id="event_idx" value="<?php echo $idx;?>">
        <div class="regi_box">
          <label for="e_title">이벤트 이름</label>
          <input type="text" name="e_title" id="e_title" value="<?php echo $arr["title"];?>"required>
        </div>
        <div class="regi_box">
          <div class="label_group">
            <label for="s_date" class="ev_date">시작 날짜</label>
            <span>~</span>
            <label for="e_date" class="ev_date">종료 날짜</label>
          </div>
          <input type="text" name="s_date" id="s_date" value="<?php echo $s_date;?>" required>
          <span>~</span>
          <input type="text" name="e_date" id="e_date" value="<?php echo $e_date;?>" required>
          <p class="guide_txt">날짜는 '-'제외 숫자 8자리로 입력 (종료일자 별도 안내시 99990101입력)</p>
        </div>
        <div class="regi_box">
          <label for="e_alt">이벤트 설명</label>
          <input type="text" name="e_alt" id="e_alt" value="<?php echo $arr["alt"];?>" required>
        </div>
        <div class="regi_box">
          <?php $winning = $arr["winning"]=="Y"? "checked":"";?>
          <label for="e_winning">당첨 이벤트 여부</label>
          <input type="checkbox" name="e_winning" id="e_winning" <?php echo $winning;?>>
        </div>
        <div class="regi_box">
          <label for="e_img">이벤트 이미지 등록</label>
          <input type="file" name="e_img" id="e_img">
          <p class="guide_txt">3MB이하 'jpg', 'jpeg', 'png' 파일만 등록 가능</p>
          <button type="button" class="img_reset" id="img_reset">취소</button>
        </div>
        <div class="regi_box preview">
          <p>이미지 미리보기</p>
          <img src="banner_img/banner_<?php echo $idx;?>" alt="" id="img_preview">
        </div>
      </fieldset>
      <div class="b_group">
        <button type="button" class="delete_btn" id="delete">삭제하기</button>
        <button type="button" class="cancel_btn" onclick="history.back()">뒤로가기</button>
        <button type="submit" class="submit_btn">수정하기</button>
      </div>
    </form>
  </div>  
</body>
</html>