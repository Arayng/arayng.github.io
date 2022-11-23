// 전역 변수 선언
var vali_chk = 0; // 약관동의 확인
var tel_chk = 0; //전화번호 입력 여부 확인
var vali_auth = 0; //인증번호 인증 여부 확인

// test 전역변수 처리 ㅎㅎ..
// var tel_test = /^[0-9]{10,11}$/g; // 이게문제..
var tel_test = new RegExp("^[0-9]{10,11}$"); // 34, 149번에서 활용
var auth_test = new RegExp("^[0-9]{6,6}$");
var args
// var id_test = new RegExp("^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i");
var id_test = new RegExp("^[a-zA-Z0-9+-\_.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$");
var pw_test = new RegExp("(?=.*[0-9])(?=.*[~`!@#$%\^&*()-+=])(?=.*[A-Za-z]).{8,12}$")
var name_test = new RegExp("(?=.*[가-힣]).{2,6}$")

window.onload = function(){
    // 약관동의 전체 선택
    var allCheck = document.getElementById("all_check");
    var accept = document.querySelectorAll(".inbox");
    allCheck.addEventListener("change",function(e){
      if(e.target.checked){
        for(k=0;k<accept.length;k++){
          accept[k].children[0].checked = true
        }
      }else{
        for(k=0;k<accept.length;k++){
          accept[k].children[0].checked = false
        }
      }
    })

  // 전화번호 작성 확인 후 인증번호 전송
  var tel_chk_btn = document.getElementById("tel_chk_btn");
  var auth_num = document.getElementById("authnum")
  var user_tel = document.getElementById("phone")
  tel_chk_btn.addEventListener("click",function(){
      if(tel_test.test(user_tel.value)){
        alert("인증번호를 전송하였습니다.");
        user_tel.setAttribute("readonly","readonly")
        auth_num.removeAttribute("readonly")
        auth_num.focus();
        return tel_chk = 1;
      }else{
        alert("전화번호를 확인해주세요.");
        return false;
      };
    });
    
};

function user_join(){
  // 에러메세지 입력 구간
  var err_txt = document.querySelectorAll("p.err_txt");
  // 아이디 부분
  var user_id = document.getElementById("user_id");
  // 약관동의 체크안하면 submit 안되게
  if(vali_chk == 0){
    alert("약관에 동의 해주세요");
    return false;
  }
  // 핸드폰 인증 안하면 submit 안되게
  if(vali_auth == 0){
    alert("핸드폰 인증을 해주세요");
    return false;
  }
  if(!user_id.value){
    err_txt[0].textContent = "이메일을 입력해주세요.";
    user_id.focus();
    return false;
  }else{err_txt[0].textContent = "";};

  // 패스워드 부분
  var user_pw = document.getElementById("user_pw");
  if(!user_pw.value){
    document.querySelector(".pw_guide").classList.add("hide");
    err_txt[1].textContent = "비밀번호를 입력해주세요"
    user_pw.focus();
    return false;
  }else{err_txt[1].textContent = "";};
  // user_pw.value.length < 8 || user_pw.value.length > 12
  if(!pw_test.test(user_pw.value)){
    document.querySelector(".pw_guide").classList.add("hide");
    err_txt[1].textContent = "영문, 숫자, 특수문자가 모두 포함된 8~12자만 입력 할 수 있습니다.";
    user_pw.focus();
    return false;
  }else{err_txt[1].textContent = "";};
  
  // 패스워드 확인 부분
  var user_pwChk = document.getElementById("user_pw_check");
  if(!user_pwChk.value){
    err_txt[2].textContent = "비밀번호를 다시 한번 입력해주세요";
    user_pwChk.focus();
    return false;
  }else{err_txt[2].textContent = "";};
  if(user_pwChk.value != user_pw.value){
    err_txt[2].textContent = "비밀번호를 확인해주세요";
    user_pwChk.focus();
    return false;
  }else{err_txt[2].textContent = "";};
  
  // 예약자 정보
  var reservation = document.getElementById("reservation");
  if(!reservation.value){
    err_txt[3].textContent = "예약자 정보를 입력해주세요";
    reservation.focus();
    return false;
  }else{err_txt[3].textContent = "";};
  if(!name_test.test(reservation.value)){
    err_txt[3].textContent = "예약자 정보를 확인해주세요";
    reservation.focus();
    return false;
  }else{err_txt[3].textContent = "";};

  // 닉네임 부분
  var user_name = document.getElementById("user_name");
  // var name_chk = new RegExp("^[가-힣|a-z|A-Z|0-9|]+${3,6}");
  if(!user_name.value){
    document.querySelector(".name_guide").classList.add("hide");
    err_txt[4].textContent = "별명을 입력해주세요";
    user_name.focus();
    return false;
  }else{err_txt[4].textContent = "";};
  if(!name_test.test(user_name.value)){
    document.querySelector(".name_guide").classList.add("hide");
    err_txt[4].textContent = "별명은 3 ~ 6자리의 한글만 가능";
    user_name.focus();
    return false;
  }else{err_txt[4].textContent = "";};
 
};

// 제이쿼리
$(function(){
  // 약관동의 다음 버튼 자동활성화
  var chk_interval = setInterval(function(){
  if($("#tos_check").prop("checked") === true && $("#age_check").prop("checked") === true && $("#privacy_check").prop("checked") === true){
    vali_chk = 1;
    $("#tos_next").animate({opacity:1},1);
  }else{
    vali_chk = 0;
    $("#tos_next").animate({opacity:0.5},1);
  }
},100)

  // 이용약관 다음 버튼 누르면 필수동의사항 체크 여부 확인
  $("#tos_next").click(function(){
    
    if(vali_chk == 0){
      alert("약관에 동의해주세요");
      return false;
    }else{
      $("section").removeClass("onboard")
      $("#list li").removeClass("on")
      $("#list li").eq($(this).parent().next().index()).addClass("on")
      $(this).parent().next().addClass("onboard")
    };
    // 다음 버튼 활성화 
    clearInterval(chk_interval);
  })


  // 전화번호 입력 여부 확인 후 버튼 불들어오게
  $("#phone").keyup(function(e){ 
    $(this).val($(this).val().replace(/[^0-9]/g,"")); //숫자만 입력 가능하게
    if(tel_test.test($(this).val())){
      $("#tel_chk_btn").animate({opacity:1},1);
    }else{
      $("#tel_chk_btn").animate({opacity:0.5},1);
    };
  });
    // 인증번호 입력 여부 확인 후 버튼 불들어오게
    $("#authnum").keyup(function(){
      $(this).val($(this).val().replace(/[^0-9]/g,"")); // 숫자만 입력 가능하게
      if(auth_test.test($("#authnum").val())){
        $("#auth_chk_btn").animate({opacity:1},1);
      }else{
        $("#auth_chk_btn").animate({opacity:0.5},1);
      };
    });
  //인증번호 체크(테스트용)
  $("#auth_chk_btn").click(function(){

      if(auth_test.test($("#authnum").val())){
        alert("인증이 완료되었습니다.");
        $("#authnum").attr("readonly",true)
        $("#cer_next").animate({opacity:1},1);
        return vali_auth = 1;
      }else{
        alert("인증번호를 확인해주세요.");
        return false;
      };
  })

  // 본인인증 다음 버튼 누르면 전화번호 인증 여부 확인
  $("#cer_next").click(function(){
    if(vali_chk == 0){
      alert("약관에 동의해주세요");
      return false;
    }else if(vali_auth == 0){
      alert("전화번호를 인증 해주세요");
      return false;
    }else{
      $("section").removeClass("onboard")
      $("#list li").removeClass("on")
      $("#list li").eq($(this).parent().next().index()).addClass("on")
      $(this).parent().next().addClass("onboard")
    };
  })

  // 아이디 중복검사 하기(blur = 포커스가 나갔을때)
  $("#user_id").blur(function(){
    if(id_test.test($(this).val())){
      // 유효성 검사 통과
      $(this).next().text("");
      $.ajax({ // ajax로 아이디 중복검사
        type : 'GET',
        url : 'id_check.php?id='+$(this).val(),
        success : function(result){
          switch(result){
            case '1' :
              $('#user_id').next().css('color','#ff1c1c').text("사용할 수 없는 아이디입니다");
            break;
            case '0' :
              $('#user_id').next().css('color','#5694f0').text("사용 가능한 아이디입니다");
            break;
            default :
               $('#user_id').next().css('color','#ff1c1c').text("알 수 없는 오류");
              console.log("error");
            break;
          }
        },
        error : function(err){
          console.log(err)
        }
      });
    }else{ 
      // 유효성 검사 실패
      $(this).next().css('color','#ff1c1c').text("이메일을 확인해주세요.(예시 Id@naver.com)");
      $(this).focus();
      return false;
    };
  });

  // 리스트 클릭
  $("#list li").click(function(){
    $("section").removeClass("onboard")
    $("#list li").removeClass("on")
    $(this).addClass("on")
    $("section").eq($(this).index()).addClass("onboard")

    if($(this).index() == 0){
      chk_interval = setInterval(function(){
        if($("#tos_check").prop("checked") === true && $("#age_check").prop("checked") === true && $("#privacy_check").prop("checked") === true){
          vali_chk = 1;
          $("#tos_next").animate({opacity:1},1);
        }else{
          vali_chk = 0;
          $("#tos_next").animate({opacity:0.5},1);
        }
        console.log(1)
      
      },100)
    }
  })
});

