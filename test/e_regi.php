<!-- 이벤트 페이지 -->
<?php include "../inc/session.php";?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때 - 이벤트 등록</title>

  <link rel="stylesheet" href="../css/mylayout.css">
  <link rel="stylesheet" href="css/event_regi.css">
  <?php include "../inc/src_in.php";?>
  <style>
    .u_prev{height: 30px;}
    .sel{background:#5694f0;}
  </style>
  <script src="js/event_regi.js"></script>
  
</head>
<body>
  <!-- 헤더영역 -->
  <?php include "../inc/header_in.php";?>
  <!-- 컨텐츠 영역 -->
  <div class="box">
      <h2 class="p_title">이벤트 등록</h2>
  </div>
  <div class="regi_wrap">
    <form action="event_edit.php" method="post" enctype=multipart/form-data>
      <fieldset style="display:block">
        <legend>이벤트 등록</legend>
        <input type="hidden" name="action_chk" value="edit">
        <div class="regi_box">
          <label for="e_title">이벤트 이름</label>
          <input type="text" name="e_title" id="e_title" required>
        </div>
        <div class="regi_box">
          <div class="label_group">
            <label for="s_date" class="ev_date">시작 날짜</label>
            <span>~</span>
            <label for="e_date" class="ev_date">종료 날짜</label>
          </div>
          <input type="text" name="s_date" id="s_date" required>
          <span>~</span>
          <input type="text" name="e_date" id="e_date" required>
          <p class="guide_txt">날짜는 '-'제외 숫자 8자리로 입력 (종료일자 별도 안내시 99990101입력)</p>
        </div>
        <div class="regi_box">
          <label for="e_alt">이벤트 설명</label>
          <input type="text" name="e_alt" id="e_alt" required>
        </div>
        <div class="regi_box">
          <label for="e_winning">당첨 이벤트 여부</label>
          <input type="checkbox" name="e_winning" id="e_winning">
        </div>
        <div class="regi_box">
          <label for="e_img">배너 이미지 등록</label>
          <input type="file" name="e_img[]" id="e_img" required multiple>
          <p class="guide_txt">3MB이하 'jpg', 'jpeg', 'png' 파일만 등록 가능</p>
          <div class="u_prevBox" style="width: 500px;">
            
          </div>
        </div>
        <button type="button" class="idx_change">위로</button>
        <button type="button" class="subm">현재 상태 저장하기</button>
        <div class="regi_box preview">
          <p>이미지 미리보기</p>
          <img src="" alt="" id="img_preview">
        </div>
      </fieldset>
      <div class="b_group">
        <button type="button" class="cancel_btn" onclick="history.back()">뒤로가기</button>
        <button type="submit" class="submit_btn">등록하기</button>
      </div>
    </form>
  </div>  
</body>
</html>