<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>웹에디터 테스트</title>
  <?php include "inc/src.php";?>


  <script src="editor/summernote-lite.js"></script>
  <script src="editor/lang/summernote-ko-KR.js"></script>
  <link rel="stylesheet" href="editor/summernote-lite.css">
  
</head>
<body>
  <form method="post">
    <textarea id="summernote" name="editordata"></textarea>
  </form>
  <script>
    $(document).ready(function() {
      //여기 아래 부분
      $('#summernote').summernote({
          width: 1000,
          height: 200,                 // 에디터 높이
          minHeight: 200,             // 최소 높이
          maxHeight: 200,             // 최대 높이
          minWidth: 1000,
          maxWidth: 1000,
          focus: true,                  // 에디터 로딩후 포커스를 맞출지 여부
          lang: "ko-KR",					// 한글 설정
      //     toolbar: [
			//     // [groupName, [list of button]]
			//     ['fontname', ['fontname']],
			//     ['fontsize', ['fontsize']],
			//     ['style', ['bold', 'italic', 'underline','strikethrough', 'clear']],
			//     ['color', ['forecolor','color']],
			//     ['table', ['table']],
			//     ['para', ['ul', 'ol', 'paragraph']],
			//     ['height', ['height']],
			//     ['insert',['picture','link','video']],
			//     ['view', ['fullscreen', 'help']]
			//   ],
			// fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Pretendard-Regular', '맑은 고딕', '궁서', '굴림체', '굴림', '돋움체', '바탕체'],
			// fontSizes: ['8','9','10','11','12','14','16','18','20','22','24','28','30','36','50','72'],
      placeholder: '최대 2048자까지 쓸 수 있습니다',	//placeholder 설정
	});
  // $('#summernote').summernote('fontName', 'Pretendard-Regular');


});
  </script>
</body>
</html>