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

// ************ 컨텐츠 파일 업로드 ************** //

// 파일이 업로드 되었을때 실행될 함수
let fileList;
let fileListClone = [];
let selIndex

$("#c_img").on("change",function(e){
  for(i=0;i<e.target.files.length;i++){
    $(".contList").append(`
    <p id="${e.target.files[i].lastModified}">
      ${e.target.files[i].name}
      <button type="button" class="lBtn rm_btn">X</button>
    </p>`)
  }
  const dataTransfer = new DataTransfer();
  fileList = Array.from(e.target.files);
  fileList.forEach(f => {fileListClone.push(f); })
  fileListClone.forEach(f => { dataTransfer.items.add(f); });
  fileList = fileListClone;
  document.querySelector("#c_img").files = dataTransfer.files;
})
// 파일 삭제 함수
$(".contList").on('click','.rm_btn',function(){
  const dataTransfer = new DataTransfer();
  let rmTarget = $(this).parent().index();
  fileList.splice(rmTarget, 1);
  $(this).parent().remove();
  fileList.forEach(f => { dataTransfer.items.add(f); });
  document.querySelector("#c_img").files = dataTransfer.files;
  selIndex = null;
})

// 파일 선택 함수
$(".contList").on('click','p',function(){
  if($(this).hasClass('sel')){
    $(this).removeClass('sel')
    selIndex = null;
  }else{
    $('.contList p').removeClass('sel')
    $(this).addClass('sel');
    selIndex = $('.sel').index();
  }
})

// 파일 위치 이동 함수
function selMove(action, e){
  if(e != null || e != undefined){ // selIndex가 null이거나 undefined여도 실행되는 오류
    switch(action){
      case "up" :
        if(e != 0){ // 선택한 데이터가 처음이 아닐때
          let tmp = fileList[e-1]; // 앞자리 데이터 tmp에 저장
          fileList[e-1] = fileList[e]; // 선택한 데이터 앞자리로 이동
          fileList[e] = tmp; // tmp(선택한 데이터의 앞 데이터)를 선택한 데이터 저장
          $('.contList p').eq(e).prev().before($('.contList p').eq(e))
          selIndex = $('.sel').index();
        }
      break;

      case "down" :
        if(e != fileListClone.length-1){ // 선택한 데이터가 마지막이 아닐때
          let tmp = fileList[e+1]; // 뒷자리 데이터 tmp에 저장
          fileList[e+1] = fileList[e]; // 선택한 데이터 뒷자리로 이동
          fileList[e] = tmp; // tmp(선택한 데이터의 뒷 데이터)를 선택한 데이터 저장
          $('.contList p').eq(e).next().after($('.contList p').eq(e))
          selIndex = $('.sel').index();
        }
      break;

      default :
        alert("에러");
      return false;
    }
  const dataTransfer = new DataTransfer();
  fileList.forEach(f => { dataTransfer.items.add(f); });
  document.querySelector("#c_img").files = dataTransfer.files;
  }
}
$('.up').click(function(){selMove("up", selIndex)})
$('.down').click(function(){selMove("down", selIndex)})


// ************ 컨텐츠 파일 업로드 끝 ************ //


// ************ 수정 페이지 ************ //
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
