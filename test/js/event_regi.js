$(function(){
  
  var e_img = new Array;
  $('#e_img').change(function(e){
    $('.u_prevBox').empty();
    for(i=0;i<e.target.files.length;i++){
      $('.u_prevBox').append(`<input type="text" class="u_prev" readonly></input>`);
    }
    e_img = [];
    for(i=0;i<e.target.files.length;i++){
      e_img.push(e.target.files[i]);
      $('.u_prev').eq(i).val(e_img[i].name);
    };
  })

  // 배열 순서 바꾸기
  var file_idx;

  $('.u_prevBox').on("click",".u_prev",function(){
    if($(this).hasClass('sel')){
      $(this).removeClass('sel')
      file_idx = null;
    }else{
      $('.u_prev').removeClass('sel')
      $(this).addClass('sel');
      file_idx = $('.sel').index();
    }
  })

  function change_up(pm){
    if(pm != 0){ // 선택한 데이터가 가장 위가 아닐때
      $('.u_prev').eq(pm).removeClass('sel');
      $('.u_prev').eq(pm-1).addClass('sel');
      file_idx = $('.sel').index();
      var tmp = e_img[pm-1]; //tmp에 있는 들어갈 데이터는 선택한 데이터의 앞(-1)데이터
      e_img[pm-1] = e_img[pm]; // 선택한 데이터의 앞 데이터에는 현재 선택한 데이터가 들어가야함
      $('.u_prev').eq(pm-1).val(e_img[pm].name); // 선택한 데이터의 앞 데이터에는 현재 선택한 데이터가 들어가야함
      for(i=pm;i<e_img.length;i++){ //반복문은 선택한 데이터부터 마지막까지만 반복되게
        if(i+1 < e_img.length){
          e_img[i] = e_img[i+1];// 선택한 데이터 이후 데이터들을 한칸씩 땡기기
        }
        $('.u_prev').eq(i).val(e_img[i].name);
      };
      e_img[e_img.length-1] = tmp; // 마지막 칸에는 선택한 데이터 앞 데이터를 넣어주기
      $('.u_prev').eq(e_img.length-1).val(tmp.name); // 마지막 칸에는 선택한 데이터 앞 데이터를 넣어주기
    }
  }
  
  $('.idx_change').click(function(){
    change_up(file_idx);
  })
//e_img[0] = e_img[0+1] >> 









  // $("#e_img").change(function(e){
  //   var file = e.target.files[0]; // 파일 체크를 위한 변수 생성
  //   // file의 name을. "."기준으로 자르고(split). 마지막 요소를 반환(pop). 소문자로 변환함(toLowerCase()
  //   var ext = file.name.split(".").pop().toLowerCase();
  //   var maxSize = 3 * 1024 * 1024;
  //   let imgChk = ($.inArray(ext,["jpg","png","jpeg"]) === -1)? false : true;
  //   let sizeChk = (file.size < maxSize)? true : false;
  //   if(imgChk == false){
  //     //파일 확장자 체크
  //     alert("3mb이하 'jpg', 'jpeg', 'png' 파일만 등록 가능합니다.");
  //     $("#e_img").val("");
  //   }else if(sizeChk == false){
  //     alert("3mb이하 'jpg', 'jpeg', 'png' 파일만 등록 가능합니다.");
  //     $("#e_img").val("");
  //   }else{
  //     // filereader 메소드를 이용 > 업로드된 파일의 url을 가져와서 미리보기할 영역에 삽입
  //     var reader = new FileReader();
  //     reader.readAsDataURL(file); // var file의 url을 가져옴
  //     reader.onload = function(e){
  //       $("#img_preview").attr("src", e.target.result);
  //     };
  //   };
  // });
  // // 이미지 초기화
  // var reset = $("#img_preview").attr('src')
  // $("#img_reset").click(function(){
  //   $("#e_img").val("");
  //   $("#img_preview").attr('src',reset);
  // })
  // // 삭제하기
  // $("#delete").click(function(){
  //   var chk = confirm("정말로 삭제하시겠습니까?");
  //   if(chk){
  //     var idx = $("#event_idx").val();
  //     location.href=`event_edit.php?action=delete&id=${idx}`;
  //   }
  // });
  

})
