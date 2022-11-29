<?php
  include $_SERVER["DOCUMENT_ROOT"]."/inc/session.php";
// 임시로 저장된 정보(tmp_name)
  $temp_file = $_FILES['profile_change']['tmp_name'];
// 파일타입 및 확장자 체크
  $fileTypeExt = explode("/", $_FILES['profile_change']['type']);
// 파일 타입 저장
  $file_type = $fileTypeExt[0];
// 파일 확장자 저장
  $file_ext = $fileTypeExt[1];
// 파일 확장자 검사를 위한 변수 선언
  $ext_chk = false;
// 파일 확장자 검사 switch문
switch($file_ext){
  case 'jpg' :
  case 'jpeg' :
  case 'png' :
    $ext_chk = true;
    break;
  default:
    echo "
      <script>
        alert(\"사용 가능 확장자(jpg, jpeg, png)외에는 사용이 불가능합니다.\");
        history.back();
      </script>";
    exit;
    break;
  };
// 파일명 변경하기
  if($file_type == 'image'){
// 확장자 검사결과가 true 인경우 실행되게(확장자가 조건에 맞을때)
    if($ext_chk){
// 업로드된 임시파일을 옮길 위치
      $res_file = "./profile/".$s_idx;
      echo $res_file;
      $upload = move_uploaded_file($temp_file, $res_file);
      echo "
        <script>
          alert(\"프로필 변경 완료\");
          location.href=\"mymenu.php\";
        </script>";
    }else{
      echo "
        <script>
          alert(\"프로필 변경에 실패하였습니다. 파일을 확인해주세요\");
          history.back();
        </script>";
    };
  }else{
    echo "
      <script>
        alert(\"파일을 확인해주세요\");
        history.back();
      </script>";
  };
?>