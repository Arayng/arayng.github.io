<?php
  include $_SERVER["DOCUMENT_ROOT"]."/inc/session.php";
  include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";

  header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
  // 한페이지에서 여러가지 처리를 하기위한 조건 데이터 가져오기
  $action = isset($_POST["action_chk"])? $_POST["action_chk"]:$_GET["action"];
  switch($action){
// 이벤트 등록
    case "edit" :
// 데이터 가져와서 DB에 저장하기 (우선)
      $title = $_POST["e_title"];
      $s_date = $_POST["s_date"];
      $e_date = $_POST["e_date"];
      $alt = $_POST["e_alt"];
      $winning = isset($_POST["e_winning"])? 'Y':'N';
      $img_cnt = count($_FILES['c_img']['tmp_name']);
      $sql = "insert into event(title, start_date, end_date, alt, winning, img_cnt) values('$title', '$s_date', '$e_date', '$alt', '$winning', '$img_cnt');";
      mysqli_query($dbcon,$sql);
// 저장한 데이터 다시 불러오기(이미지 저장을 위해)
      $e_idx = mysqli_insert_id($dbcon); // 마지막에 저장된 데이터에서 pk값을 가져옴

      if($e_idx == 0){
        echo "<script>
            alert(\"입력 내용을 확인해주세요\");
            history.back();
          </script>";
        break;
      }

// 배너 업로드
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
          alert(\"사용 가능 확장자(jpg, jpeg, png)외에는 사용이 불가능합니다. err 01\");
          history.back();
            </script>";
          break;
      }
      if($file_type == 'image'){
        if($ext_chk){
          $res_file = "./banner_img/banner_".$e_idx.".".$file_ext;
          move_uploaded_file($temp_file, $res_file);
          $sql = "update event set banner_type='$file_ext' where event_idx='$e_idx';";
          mysqli_query($dbcon,$sql);
        }else{
          echo "<script>
            alert(\"이벤트 등록에 실패하였습니다. 파일을 확인해주세요 err 02\");
            history.back();
          </script>";
          break;
        }
      }else{
        echo "<script>
          alert(\"이벤트 등록에 실패하였습니다. 파일을 확인해주세요 err 03\");
          history.back();
        </script>";
        break;
      }

// 컨텐츠 파일 업로드
      $extChk = []; //배열 사용을 위한 배열 선언

// ******** 이벤트 저장 폴더 생성 ********* //
      $dir = "viewPage/".$e_idx; // 경로
      mkdir($dir,0777,true);
      
// ******** 이벤트 폴더 index.php 생성 ********* //
      $index = fopen("viewPage/".$e_idx."/index.php", "x+");
      $inner = "<?php include \"../indexPigure.php\";?>";
      fwrite($index,$inner);
      $allExt = "";
// ******** 업로드된 파일 저장 반복문 실행 ******** //
      for($i=0;$i<count($_FILES['c_img']['tmp_name']);$i++){
        $temp = $_FILES['c_img']['tmp_name'][$i];
        $TypeExt = explode("/", $_FILES['c_img']['type'][$i]);
        $fileType = $TypeExt[0];
        $fileExt = $TypeExt[1];
        $allExt .= $fileExt."/";
        $extChk[$i] = false;
        switch($fileExt){
          case 'jpg' :
          case 'jpeg' :
          case 'png' :
            $extChk[$i] = true;
          break;
          default:
            echo "<script>
                alert(\"사용 가능 확장자(jpg, jpeg, png)외에는 사용이 불가능합니다. err 04\");
                history.back();
              </script>";
            break;
        }

        if($fileType == 'image'){
          if($extChk[$i]){
            $res_file = "viewPage/".$e_idx."/".($i+1).".".$fileExt;
            move_uploaded_file($temp, $res_file);
            echo "<script>
                alert(\"이벤트 등록 완료\");
                location.href=\"event.php\";
              </script>";
          }else{
            echo "<script>
                alert(\"이벤트 등록에 실패하였습니다. 파일을 확인해주세요 err 05\");
                history.back();
              </script>";
            break;
          }
        }else{
          echo "<script>
              alert(\"이벤트 등록에 실패하였습니다. 파일을 확인해주세요 err 06\");
              history.back();
            </script>";
          break;
        }
      }
      $sql = "update event set img_type='$allExt' where event_idx='$e_idx';";
      mysqli_query($dbcon,$sql);
    break;
// 이벤트 수정
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
        break;
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
            break;
          }
        }else{
          echo "<script>
              alert(\"이벤트 이미지 수정에 실패하였습니다. 파일을 확인해주세요\");
              history.back();
            </script>";
          break;
        };
      };
    break;
// 이벤트 삭제
    case "delete" :
      include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";
      $idx = $_GET["id"];
      $sql = "delete from event where event_idx=$idx;";
      mysqli_query($dbcon,$sql);
      echo "<script>
        alert(\"삭제되었습니다.\");
        location.href=\"event.php\";
      </script>
      ";
      break;
    break;
// 이벤트 공지 등록
    case "write" :
      include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";
      $title = $_POST["title"];
      $link = $_POST["link"];
      $date = $_POST["w_date"];
      $date = str_replace(". ","",$date);
      $content = $_POST["content"];
      $content = str_replace("'","''",$content);
      $sql = "insert into e_notice(title, link, date, content) values ('$title', '$link', '$date', '$content');";
      mysqli_query($dbcon,$sql);
      echo "
        <script type=\"text/javascript\">
          location.href=\"annEvent.php\";
        </script>
      ";
    break;
// 이벤트 공지 수정
    case "w_modify" :
      include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";
      $idx = $_POST["idx"];
      $title = $_POST["title"];
      $link = $_POST["link"];
      $date = $_POST["w_date"];
      $date = str_replace(". ","",$date);
      $content = $_POST["content"];
      $content = str_replace("'","''",$content);
      $sql = "update e_notice set title='$title', link='$link', date='$date', content='$content' where ew_idx='$idx';";
      // echo $sql;
      mysqli_query($dbcon,$sql);
      echo "
        <script type=\"text/javascript\">
          location.href=\"annEvent.php\";
        </script>
      ";
    break;
    // 이벤트 공지 삭제
    case "w_delete" :
      include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";
      $idx = $_GET["id"];
      $sql = "update e_notice set del=1 where ew_idx='$idx';";
      // echo $sql;
      mysqli_query($dbcon,$sql);
      echo "
        <script type=\"text/javascript\">
          alert(\"삭제되었습니다\");
          location.href=\"annEvent.php\";
        </script>
      ";
    break;

    default:
      echo "
        <script type=\"text/javascript\">
          alert(\"잘못된 접근입니다\");
          history.back();
        </script>
      ";
    break;
  };
mysqli_close($dbcon);

?>