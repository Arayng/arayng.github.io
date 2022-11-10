var vali_auth = 0;
var tel_test = new RegExp("^[0-9]{10,11}$"); // 34, 149번에서 활용
var auth_test = new RegExp("^[0-9]{6,6}$");
var id_test = new RegExp("^[a-zA-Z0-9+-\_.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$");
var pw_test = new RegExp("(?=.*[0-9])(?=.*[~`!@#$%\^&*()-+=])(?=.*[A-Za-z]).{8,12}$")
$(function(){

  // 폼액션
  $(".profile-change-btn").click(function(){
    var change_form = $(this).parent().next();
    change_form.stop().slideToggle(300);
    setTimeout(function(){
      $(change_form.find("input")).focus()
    },400)
  });
  $(".change-cancel-btn").click(function(){
    var cancel_input = $(this).closest("form").find("input");
    cancel_input.val("");
  });

  // 전화번호 유효성 검사 / 인증번호 입력창 생성
  $(".auth_box").slideUp(300);
  $("#tel_change .check-btn").click(function(){
    if(tel_test.test($("#tel").val())){
      $(".auth_box").slideToggle(300)
      $("#tel").attr("readonly",true)
      $("#auth").removeAttr("readonly")
      $("#auth").focus();
      alert("인증번호를 전송하였습니다.");
        return tel_chk = 1;
    }else{
      $("#tel_change .telerr").text("전화번호를 확인해주세요. (\"-\"없이 숫자만 입력해주세요)");
      return false;
    };
  })
  // 인증번호 입려하면 버튼 배경 변경
  $("#auth").keyup(function(){
    $(this).val($(this).val().replace(/[^0-9]/g,""));
    if(auth_test.test($("#auth").val())){
      $("#auth_chk_btn").css('background-color','#5694f0').css('color','#fff');
    }else{
      $("#auth_chk_btn").css('background-color','#fff').css('color','#5694f0');
    };
  });
  // 인증번호 확이버튼 액션(유효성 검사)
  $("#auth_chk_btn").click(function(){
    if(auth_test.test($("#auth").val())){
      alert("인증이 완료되었습니다.");
      $("#auth").attr("readonly",true);
      return vali_auth = 1;
    }else{
      alert("인증번호를 확인해주세요.");
      return false;
    };
  })
});



function name_update(){
  var err_txt = document.querySelectorAll("p.err-txt");
    // 예약자 부분 유효성 검사
    var name_test = new RegExp("(?=.*[가-힣]).{3,6}$");
    var user_name = document.getElementById("nickname");
    if(!user_name.value){
      err_txt[0].textContent = "별명을 입력해주세요";
      user_name.focus();
      return false;
    }else{err_txt[0].textContent = "";};
    if(!name_test.test(user_name.value)){
      err_txt[0].textContent = "별명은 3 ~ 6자리의 한글만 가능합니다";
      user_name.focus();
      return false;
    }else{err_txt[0].textContent = "";};
}

function user_update(){
  var err_txt = document.querySelectorAll("p.err-txt");
    // 예약자 부분 유효성 검사
    var name_test = new RegExp("(?=.*[가-힣]).{3,6}$");
    var reservation = document.getElementById("user");
    if(!reservation.value){
      err_txt[1].textContent = "예약자 이름을 입력해주세요";
      reservation.focus();
      return false;
    }else{err_txt[1].textContent = "";};
    if(!name_test.test(reservation.value)){
      err_txt[1].textContent = "예약자 이름을 확인해주세요";
      reservation.focus();
      return false;
    }else{err_txt[1].textContent = "";};
}

function tel_update(){
  if(vali_auth == 0 || !vali_auth){
    alert("전화번호 인증을 해주세요")
    return false;
  }
}
