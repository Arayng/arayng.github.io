<?php
  include "../inc/session.php";
  header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
  // 한페이지에서 여러가지 처리를 하기위한 조건 데이터 가져오기
  $title = $_POST["e_title"];
  $dri = "viewPage/".$title;
  echo $dri."<br>";
  mkdir($dri,0777,true);
  $file = $_FILES['e_img'];
  $temp_file = $_FILES['e_img']['tmp_name'];
  for($i=0; $i<count($file['type']); $i++){
    $fileTypeExt = explode("/", $file['type'][$i]);
    $file_type = $fileTypeExt[0];
    $file_ext =  $fileTypeExt[1];
    $ext_chk = false;
    // 파일 확장자 체크
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
        $res_file = "viewPage/".$title."/".$i+1;
        move_uploaded_file($temp_file[$i], $res_file);
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
  }
      

      

      
  // $temp_file = $_FILES['e_img']['tmp_name'];

      // $fileTypeExt = explode("/", $_FILES['e_img']['type']);
      // $file_type = $fileTypeExt[0];
      // $file_ext =  $fileTypeExt[1];
      // $ext_chk = false;

      // switch($file_ext){
      //   case 'jpg' :
      //   case 'jpeg' :
      //   case 'png' :
      //     $ext_chk = true;
      //     break;

      //   default:
      //     echo "<script>
      //     alert(\"사용 가능 확장자(jpg, jpeg, png)외에는 사용이 불가능합니다.\");
      //     history.back();
      //       </script>";
      //     exit;
      //     break;
      // }

      // if($file_type == 'image'){
      //   if($ext_chk){
      //     $res_file = "./viewPage/".$title."/test";
      //     move_uploaded_file($temp_file, $res_file);
      //     echo "<script>
      //       alert(\"이벤트 등록 완료\");
      //       location.href=\"event.php\";
      //     </script>";
      //   }else{
      //     echo "<script>
      //       alert(\"이벤트 등록에 실패하였습니다. 파일을 확인해주세요\");
      //       history.back();
      //     </script>";
      //     exit;
      //   }
      // }else{
      //   echo "<script>
      //     alert(\"이벤트 등록에 실패하였습니다. 파일을 확인해주세요\");
      //     history.back();
      //   </script>";
      //   exit;
      // }


//   $action = isset($_POST["action_chk"])? $_POST["action_chk"]:$_GET["action"];
//   switch($action){
//     // 이벤트 등록
//     case "edit" :
//       include "../inc/dbcon.php";

//       // 데이터 가져와서 DB에 저장하기 (우선)
//       $title = $_POST["e_title"];
//       $s_date = $_POST["s_date"];
//       $e_date = $_POST["e_date"];
//       $alt = $_POST["e_alt"];
//       $winning = isset($_POST["e_winning"])? 'Y':'N';
//       $sql = "insert into event(title, start_date, end_date, alt, winning) values('$title', '$s_date', '$e_date', '$alt', '$winning');";
//       mysqli_query($dbcon,$sql);
      
//       // 저장한 데이터 다시 불러오기(이미지 저장을 위해)
//       $e_idx = mysqli_insert_id($dbcon);
//       $sql = "select * from event where event_idx=$e_idx;";
//       $pm = mysqli_query($dbcon,$sql);
//       $arr = mysqli_fetch_array($pm);

//       if($e_idx == 0){
//         echo "<script>
//             alert(\"입력 내용을 확인해주세요\");
//             history.back();
//           </script>";
//         exit;
//       }

//       $temp_file = $_FILES['e_img']['tmp_name'];

//       $fileTypeExt = explode("/", $_FILES['e_img']['type']);
//       $file_type = $fileTypeExt[0];
//       $file_ext =  $fileTypeExt[1];
//       $ext_chk = false;

//       switch($file_ext){
//         case 'jpg' :
//         case 'jpeg' :
//         case 'png' :
//           $ext_chk = true;
//           break;

//         default:
//           echo "<script>
//           alert(\"사용 가능 확장자(jpg, jpeg, png)외에는 사용이 불가능합니다.\");
//           history.back();
//             </script>";
//           exit;
//           break;
//       }

//       if($file_type == 'image'){
//         if($ext_chk){
//           $res_file = "./banner_img/banner_".$arr["event_idx"];
//           move_uploaded_file($temp_file, $res_file);
//           echo "<script>
//             alert(\"이벤트 등록 완료\");
//             location.href=\"event.php\";
//           </script>";
//         }else{
//           echo "<script>
//             alert(\"이벤트 등록에 실패하였습니다. 파일을 확인해주세요\");
//             history.back();
//           </script>";
//           exit;
//         }
//       }else{
//         echo "<script>
//           alert(\"이벤트 등록에 실패하였습니다. 파일을 확인해주세요\");
//           history.back();
//         </script>";
//         exit;
//       }
//     break;
//     // 이벤트 수정
//     case "modify" :
//       include "../inc/dbcon.php";
      
//       //데이터 가져오기
//       $idx = $_POST["event_idx"];
//       $title = $_POST["e_title"];
//       $s_date = $_POST["s_date"];
//       $e_date = $_POST["e_date"];
//       $alt = $_POST["e_alt"];
//       $winning = isset($_POST["e_winning"])? 'Y':'N';
//       $sql = "update event set title='$title', start_date='$s_date', end_date='$e_date', alt='$alt', winning='$winning' where event_idx='$idx';";
//       mysqli_query($dbcon,$sql);
//       $img_test = $_FILES['e_img'];
//       // 이미지 업로드가 되었을때 실행
//       // 이미지 업로드가 안되어 있을 경우(null이니까) 파일 업로드 건너뛰기
//       if(!$img_test["name"]){
//           echo "<script>
//               alert(\"이벤트 수정 완료\");
//               location.href=\"event.php\";
//             </script>";
//             exit;
//         }else{
//           $temp_file = $_FILES['e_img']['tmp_name'];
//         $fileTypeExt = explode("/", $_FILES['e_img']['type']);
//         $file_type = $fileTypeExt[0];
//         $file_ext =  $fileTypeExt[1];
//         $ext_chk = false;

//         switch($file_ext){
//           case 'jpg' :
//           case 'jpeg' :
//           case 'png' :
//             $ext_chk = true;
//             break;

//           default:
//             echo "<script>
//             alert(\"사용 가능 확장자(jpg, jpeg, png)외에는 사용이 불가능합니다.\");
//             history.back();
//               </script>";
//             exit;
//             break;
//         }

//         if($file_type == 'image'){
//           if($ext_chk){
//             $res_file = "./banner_img/banner_".$idx;
//             move_uploaded_file($temp_file, $res_file);
//             echo "<script>
//               alert(\"이벤트 수정 완료\");
//               location.href=\"event.php\";
//             </script>";
//           }else{
//             echo "<script>
//               alert(\"이벤트 이미지 수정에 실패하였습니다. 파일을 확인해주세요\");
//               history.back();
//             </script>";
//             exit;
//           }
//         }else{
//           echo "<script>
//             alert(\"이벤트 이미지 수정에 실패하였습니다. 파일을 확인해주세요\");
//             history.back();
//           </script>";
//           exit;
//         }
//       }
//     break;
//     // 이벤트 삭제
//     case "delete" :
//       include "../inc/dbcon.php";
//       $idx = $_GET["id"];
//       $sql = "delete from event where event_idx=$idx;";
//       mysqli_query($dbcon,$sql);
//       echo "<script>
//         alert(\"삭제되었습니다.\");
//         location.href=\"event.php\";
//       </script>
//       ";
//       exit;
//     break;
//     // 이벤트 공지 등록
//     case "write" :
//       include "../inc/dbcon.php";
//       $title = $_POST["title"];
//       $link = $_POST["link"];
//       $date = $_POST["w_date"];
//       $date = str_replace(". ","",$date);
//       $content = $_POST["content"];
//       $content = str_replace("'","''",$content);
//       $sql = "insert into e_notice(title, link, date, content) values ('$title', '$link', '$date', '$content');";
//       // echo $sql;
//       mysqli_query($dbcon,$sql);
//       echo "
//         <script type=\"text/javascript\">
//           location.href=\"http://localhost/event/event_winner.php\";
//         </script>
//       ";
//     break;
//     // 이벤트 공지 수정
//     case "w_modify" :
//       include "../inc/dbcon.php";
//       $idx = $_POST["idx"];
//       $title = $_POST["title"];
//       $link = $_POST["link"];
//       $date = $_POST["w_date"];
//       $date = str_replace(". ","",$date);
//       $content = $_POST["content"];
//       $content = str_replace("'","''",$content);
//       $sql = "update e_notice set title='$title', link='$link', date='$date', content='$content' where ew_idx='$idx';";
//       // echo $sql;
//       mysqli_query($dbcon,$sql);
//       echo "
//         <script type=\"text/javascript\">
//           location.href=\"http://localhost/event/event_winner.php\";
//         </script>
//       ";
//     break;
//     // 이벤트 공지 삭제
//     case "w_delete" :
//       include "../inc/dbcon.php";
//       $idx = $_GET["id"];
//       $sql = "update e_notice set del=1 where ew_idx='$idx';";
//       // echo $sql;
//       mysqli_query($dbcon,$sql);
//       echo "
//         <script type=\"text/javascript\">
//           alert(\"삭제되었습니다\");
//           location.href=\"http://localhost/event/event_winner.php\";
//         </script>
//       ";
//     break;

//     default:
//       echo "
//         <script type=\"text/javascript\">
//           alert(\"잘못된 접근입니다\");
//           history.back();
//         </script>
//       ";
//     break;
//   };

// mysqli_close($dbcon);

?>