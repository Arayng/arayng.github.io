<!-- 이벤트 페이지 -->
<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/session.php";?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때 - 게시글 등록</title>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/src.php";?>
  <link rel="stylesheet" href="css/eventLayout.css">
  <link rel="stylesheet" href="css/annWrite.css">
  <script src="js/annWrite.js"></script>
  <script src="//localhost/editor/summernote-lite.js"></script>
  <script src="//localhost/editor/summernote-ko-KR.js"></script>
  <link rel="stylesheet" href="//localhost/editor/summernote-lite.css">
</head>
<body>
  <!-- 헤더영역 -->
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header_in.php";?>
  <!-- 컨텐츠 영역 -->
  <div class="box">
      <h2 class="p_title">게시글 등록</h2>
  </div>
  <div class="write_wrap">
    <form action="eventEdit.php" method="post" enctype=multipart/form-data>
      <fieldset style="display:block">
        <legend>게시글 등록</legend>
        <input type="hidden" name="action_chk" value="write">
        <div class="input_box">
          <label for="title">제 목</label>
          <input type="text" name="title" id="title">
        </div>
        <div class="input_box">
          <span style="width: 370px;">
            <label for="link">이벤트 링크</label>
            <input type="text" name="link" id="link">
          </span>
          <span style="width: 350px;">
            <label for="date">작성일</label>
            <input type="text" name="w_date" id="date" readonly value="<?php echo date("Y. m. d");?>">
          </span>
        </div>
        <div class="input_box">
          <textarea name="content" id="content" cols="30" rows="10"></textarea>
          <!-- textarea 에디터 -->
          <script>
            $(function(){
              $("#content").summernote({
                height: 600,
                width: 900,
                lang:"ko-KR",
                toolbar: [
                  ['fontsize', ['fontsize']],
                  ['style', ['bold', 'italic', 'underline','strikethrough', 'clear']],
                  ['color', ['forecolor','color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['height', ['height']],
                  ['options', ['fullscreen', 'codeview', 'help']],
                ]
              })
            })
          </script>
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