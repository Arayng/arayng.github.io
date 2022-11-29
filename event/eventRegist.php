<!-- 이벤트 페이지 -->
<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/session.php";?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때 - 이벤트 등록</title>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/src.php";?>
  <link rel="stylesheet" href="css/eventLayout.css">
  <link rel="stylesheet" href="css/eventRegist.css">
  <script type="text/script"src="js/eventRegist.js"></script>
</head>
<body>
<!-- 헤더영역 -->
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";?>
<!-- 컨텐츠 영역 -->
  <div class="box">
      <h2 class="p_title">이벤트 등록</h2>
  </div>
  <div class="regi_wrap">
    <form action="eventEdit.php" method="post" enctype="multipart/form-data">
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
          <input type="file" name="e_img" id="e_img" required>
          <p class="guide_txt">3MB이하 'jpg', 'jpeg', 'png' 파일만 등록 가능</p>
        </div>
        <div class="regi_box preview">
          <p>배너 미리보기</p>
          <img src="" alt="" id="img_preview">
        </div>
        <div class="regi_box">
          <label for="c_img">컨텐츠 이미지 등록</label>
          <input type="file" name="c_img[]" id="c_img" required multiple>
          <p class="guide_txt">3MB이하 'jpg', 'jpeg', 'png' 파일만 등록 가능</p>
          <div class="contList"></div>
          <div class="listBtn">
            <button type="button" class="lBtn all">전체 삭제</button>
            <button type="button" class="lBtn up">위로</button>
            <button type="button" class="lBtn down">아래로</button>
          </div>
        </div>
      </fieldset>
      <div class="b_group">
        <button type="button" class="cancel_btn" onclick="history.back()">뒤로가기</button>
        <button type="submit" class="submit_btn">등록하기</button>
      </div>
    </form>
  </div>
<!-- 푸터 영역 -->
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php";?>

</body>
</html>