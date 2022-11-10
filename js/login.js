window.onload = function(){
  var lf = document.getElementById("lf")
  var err_txt = document.getElementById("err_txt");
  if(lf.value == 1){
    err_txt.innerText = "로그인에 실패하였습니다. 회원정보를 확인해주세요.";
  }
};