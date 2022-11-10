<?php
  include "../inc/session.php";
  include "../inc/dbcon.php";
  // 한페이지에서 여러가지 처리를 하기위한 조건 데이터 가져오기

  $action = isset($_POST["action_chk"])? $_POST["action_chk"]:$_GET["action"];
  echo $action."<br>";
  switch($action){
    //$action이 edit인 경우
    case "edit" :

      // 데이터 가져와서 DB에 저장하기 (우선)
      $title = $_POST["e_title"];
      $s_date = $_POST["s_date"];
      $e_date = $_POST["e_date"];
      $alt = $_POST["e_alt"];
      $winning = isset($_POST["e_winning"])? 'Y':'N';
      $sql = "insert into event(title, start_date, end_date, alt, winning) values('$title', '$s_date', '$e_date', '$alt', '$winning');";
      echo $sql;
      mysqli_query($dbcon,$sql);
      
      // 저장한 데이터 다시 불러오기(이미지 저장을 위해)
      $e_idx = mysqli_insert_id($dbcon);
      $sql = "select * from event where event_idx=$e_idx;";
      $pm = mysqli_query($dbcon,$sql);
      $arr = mysqli_fetch_array($pm);

      if($e_idx == 0){
        echo "<script>
            alert(\"입력 내용을 확인해주세요\");
            history.back();
          </script>";
        exit;
      }

      $temp_file = $_FILES['e_img']['tmp_name'];

      $fileTypeExt = explode("/", $_FILES['e_img']['type']);
      $file_type = $fileTypeExt[0];
      $file_ext =  $fileTypeExt[1];
      $ext_chk = false;

      switch($file_ext){
        case 'jpg' :
        case 'jpeg' :
        case 'png' :
          $ext_chk = true;
          break;

        default:
          echo "<script>
          alert(\"사용 가능 확장자(jpg, jpeg, png)외에는 사용이 불가능합니다.\");
          history.back();
            </script>";
          exit;
          break;
      }

      if($file_type == 'image'){
        if($ext_chk){
          $res_file = "./banner_img/banner_".$arr["event_idx"];
          move_uploaded_file($temp_file, $res_file);
          echo "<script>
            alert(\"이벤트 등록 완료\");
            location.href=\"event.php\";
          </script>";
        }else{
          echo "<script>
            alert(\"이벤트 등록에 실패하였습니다. 파일을 확인해주세요\");
            history.back();
          </script>";
          exit;
        }
      }else{
        echo "<script>
          alert(\"이벤트 등록에 실패하였습니다. 파일을 확인해주세요\");
          history.back();
        </script>";
        exit;
      }
    break;

    case "modify" :
      
      //데이터 가져오기
      $idx = $_POST["event_idx"];
      $title = $_POST["e_title"];
      $s_date = $_POST["s_date"];
      $e_date = $_POST["e_date"];
      $alt = $_POST["e_alt"];
      $winning = isset($_POST["e_winning"])? 'Y':'N';
      $sql = "update event set title='$title', start_date='$s_date', end_date='$e_date', alt='$alt', winning='$winning' where event_idx='$idx';";
      mysqli_query($dbcon,$sql);
      $img_test = $_FILES['e_img'];
      // 이미지 업로드가 되었을때 실행
      // 이미지 업로드가 안되어 있을 경우(null이니까) 파일 업로드 건너뛰기
      if(!$img_test["name"]){
        echo "<script>
            alert(\"이벤트 수정 완료\");
            location.href=\"event.php\";
          </script>";
          exit;
      }else{
        $temp_file = $_FILES['e_img']['tmp_name'];
      $fileTypeExt = explode("/", $_FILES['e_img']['type']);
      $file_type = $fileTypeExt[0];
      $file_ext =  $fileTypeExt[1];
      $ext_chk = false;

      switch($file_ext){
        case 'jpg' :
        case 'jpeg' :
        case 'png' :
          $ext_chk = true;
          break;

        default:
          echo "<script>
          alert(\"사용 가능 확장자(jpg, jpeg, png)외에는 사용이 불가능합니다.\");
          history.back();
            </script>";
          exit;
          break;
      }

      if($file_type == 'image'){
        if($ext_chk){
          $res_file = "./banner_img/banner_".$idx;
          move_uploaded_file($temp_file, $res_file);
          echo "<script>
            alert(\"이벤트 수정 완료\");
            location.href=\"event.php\";
          </script>";
        }else{
          echo "<script>
            alert(\"이벤트 이미지 수정에 실패하였습니다. 파일을 확인해주세요\");
            history.back();
          </script>";
          exit;
        }
      }else{
        echo "<script>
          alert(\"이벤트 이미지 수정에 실패하였습니다. 파일을 확인해주세요\");
          history.back();
        </script>";
        exit;
      }
    }
    break;

    case "delete" :
      echo ("삭제 페이지");
  };

mysqli_close($dbcon);

?>