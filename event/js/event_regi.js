$(function(){
  $("#e_img").change(function(e){
    var file = e.target.files[0]; // 파일 체크를 위한 변수 생성
    // file의 name을. "."기준으로 자르고(split). 마지막 요소를 반환(pop). 소문자로 변환함(toLowerCase()
    var ext = file.name.split(".").pop().toLowerCase();
    var maxSize = 3 * 1024 * 1024;
    let imgChk = ($.inArray(ext,["jpg","png","jpeg"]) === -1)? false : true;
    let sizeChk = (file.size < maxSize)? true : false;
    if(imgChk == false){
      //파일 확장자 체크
      alert("3mb이하 'jpg', 'jpeg', 'png' 파일만 등록 가능합니다.");
      $("#e_img").val("");
    }else if(sizeChk == false){
      alert("3mb이하 'jpg', 'jpeg', 'png' 파일만 등록 가능합니다.");
      $("#e_img").val("");
    }else{
      // filereader 메소드를 이용 > 업로드된 파일의 url을 가져와서 미리보기할 영역에 삽입
      var reader = new FileReader();
      reader.readAsDataURL(file); // var file의 url을 가져옴
      reader.onload = function(e){
        $("#img_preview").attr("src", e.target.result);
      };
    };
  });
  // 이미지 초기화
  var reset = $("#img_preview").attr('src')
  $("#img_reset").click(function(){
    $("#e_img").val("");
    $("#img_preview").attr('src',reset);
  })
  // 삭제하기
  $("#delete").click(function(){
    var chk = confirm("정말로 삭제하시겠습니까?");
    if(chk){
      var idx = $("#event_idx").val();
      location.href=`event_edit.php?action=delete&id=${idx}`;
    }
  });
  

})
