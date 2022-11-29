window.onload = function(){
  var lf = document.getElementById("lf")
  var err_txt = document.getElementById("err_txt");
  if(lf.value == 1){
    err_txt.innerText = "로그인에 실패하였습니다. 회원정보를 확인해주세요.";
  }
};

// 아이디 비번찾기
$(function(){
  var id_test = new RegExp("^[a-zA-Z0-9+-\_.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$");
$("#user_id").keyup(function(){
  if(!id_test.test($(this).val())){
    $('#user_id').next().css('color','#ff1c1c').text("이메일을 확인해주세요.");
    $("#find_btn").animate({opacity:0.5},1);
  }else{
    $('#user_id').next().text("");
    $("#find_btn").animate({opacity:1},1);

  }
})
  $("#find_btn").click(function(){
    if(id_test.test($('#user_id').val())){
      // 유효성 검사 통과
      $('#user_id').next().text("");
      $.ajax({ // ajax로 아이디 중복검사
        type : 'GET',
        url : 'findActionAjax.php?id='+$('#user_id').val()+'&t=0',
        success : function(result){
          switch(result){
            case '0' :
              $('#user_id').next().css('color','#ff1c1c').text("존재하지 않는 회원입니다.");
            break;
            case '1' :
              $('.hidden').css('display','block');
              $('#find_btn').attr('type','submit');
            break;
            // case '2' :
            //   location.href="index.php";
            // break;
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
    }
  });
})