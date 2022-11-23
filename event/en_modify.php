<!-- 이벤트 페이지 -->
<?php include "../inc/session.php";?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때 - 게시글 수정</title>

  <link rel="stylesheet" href="../css/mylayout.css">
  <link rel="stylesheet" href="css/event_write.css">
  <?php include "../inc/src_in.php";?>
  <script src="js/event_write.js"></script>
  <script src="../editor/summernote-lite.js"></script>
  <script src="../editor/summernote-ko-KR.js"></script>
  <link rel="stylesheet" href="../editor/summernote-lite.css">
</head>
<body>
  <!-- 헤더영역 -->
  <?php include "../inc/header_in.php";?>
  <!-- 컨텐츠 영역 -->
  <div class="box">
      <h2 class="p_title">게시글 수정</h2>
  </div>
  <div class="write_wrap">
    <?php 
      include "../inc/dbcon.php";
      $idx = $_GET["id"];
      $sql = "select * from e_notice where ew_idx='$idx';";
      $result = mysqli_query($dbcon,$sql);
      $arr = mysqli_fetch_array($result);
      $date = str_replace("-",". ",$arr["date"]);
    ?>
    <form action="event_edit.php" method="post" enctype=multipart/form-data>
      <fieldset style="display:block">
        <legend>게시글 수정</legend>
        <input type="hidden" name="action_chk" value="w_modify">
        <input type="hidden" name="idx" value="<?php echo $idx;?>">
        <div class="input_box">
          <label for="title">제 목</label>
          <input type="text" name="title" id="title" value="<?php echo $arr["title"];?>">
        </div>
        <div class="input_box">
          <span style="width: 370px;">
            <label for="link">이벤트 링크</label>
            <input type="text" name="link" id="link" value="<?php echo $arr["link"];?>">
          </span>
          <span style="width: 350px;">
            <label for="date">작성일</label>
            <input type="text" name="w_date" id="date" readonly value="<?php echo $date;?>">
          </span>
        </div>
        <div class="input_box">
          <textarea name="content" id="content" cols="30" rows="10"><?php echo $arr["content"];?></textarea>
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
        <button type="submit" class="submit_btn">수정하기</button>
      </div>
    </form>
  </div>  
</body>
</html>