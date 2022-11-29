<?php
  include $_SERVER["DOCUMENT_ROOT"]."/inc/session.php";
  include $_SERVER["DOCUMENT_ROOT"]."/inc/dbcon.php";
  include $_SERVER["DOCUMENT_ROOT"]."/inc/loginChk.php";
  $sql = "select * from members where u_id='$s_id';";
  $pm = mysqli_query($dbcon,$sql);
  $result = mysqli_fetch_array($pm);
  $sql = "select left(u_tel, 3) as tel1 from members where u_id='$s_id'";
  $pm = mysqli_query($dbcon,$sql);
  $tel1 = mysqli_fetch_array($pm);
  $sql = "select right(u_tel, 4) as tel2 from members where u_id='$s_id'";
  $pm = mysqli_query($dbcon,$sql);
  $tel2 = mysqli_fetch_array($pm);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때 - 내 정보</title>
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/src.php";?>
  <link rel="stylesheet" href="//localhost/css/mylayout.css">
  <link rel="stylesheet" href="//localhost/css/mymenu.css">
  <script src="//localhost/js/mymenu.js"></script>
</head>
</head>
<body>
<!-- 헤더영역 -->
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";?>
<!-- 컨텐츠 영역 -->
  <div class="box">
      <h2 class="p_title">내 정보</h2>
  </div>
  <div class="main-wrap">
    <section class="lnb">
      <ul>
        <li><a href="mymenu.php" class="on">내 정보</a></li>
        <li><a href="coupon.php" class="">쿠폰함</a></li>
        <li><a href="myreview.php" class="">작성 리뷰 관리</a></li>
        <li><a href="reservations.php" class="">예약 내역</a></li>
        <?php if($s_id == 'admin@admin'){?>
          <li><a href="#" class="">회원 관리</a></li>
        <?php };?>
      </ul>
    </section>
<!-- 컨텐츠 -->
    <section class="content">
      <div class="cont-box profile-box">
        <h3>프로필</h3>
        <div class="profile-img">
          <?php if(is_file("profile/".$s_idx) == true){?>
            <img src="profile/<?php echo $s_idx?>" alt="프로필 사진">
          <?php } else { ?>
              <div class="default-img"></div>
          <?php };?>
        </div>
        <form action="mymenuProfile.php" method="post" enctype=multipart/form-data id="profile_form" style="display:block">
          <div class="profile-btngroup">
            <label for="profile_change" class="profile-change-btn">찾아보기</label>
            <input type="file" name="profile_change" id="profile_change" class="profile-change-btn-hide">
            <button type="submit" class="profile-complete-btn" id="profile_complete_btn" disabled>변경하기</button>
            <button type="button" class="profile-reset-btn" id="profile-reset-btn" onclick="del_profile()">삭제</button>
          </div>
        </form>
      </div>
      <div class="cont-box">
        <div class="name-box">
          <h3>별명</h3>
          <div class="info"><p id="name-now"><?php echo $result["u_name"];?></p></div>
          <button type="button" class="profile-change-btn" id="name_btn">변경하기</button>
        </div>
        <form action="mymenuChange.php" method="post" id="name_change" onsubmit="return name_update()">
          <fieldset class="name-change-box">
            <legend>별명 변경</legend>
            <input type="hidden" name="case" value="nickname">
            <input type="text" name="nickname" id="nickname" title="별명 변경" placeholder="변경할 닉네임을 입력해주세요">
          </fieldset>
          <p class="err-txt"></p>
          <div class="change-btngroup">
            <button type="submit" form="name_change" class="cont-submit-btn change-finish-btn">수정완료</button>
            <button type="button" class="cont-cancel-btn change-cancel-btn">수정취소</button>
          </div>
        </form>
      </div>
      <div class="cont-box">
        <div class="user-box">
          <h3>예약자 정보</h3>
          <div class="info"><p id="user-now"><?php echo $result["reservation"];?></p></div>
          <button type="button" class="profile-change-btn" id="user_btn">변경하기</button>
        </div>
        <form action="mymenuChange.php" method="post" id="user_change" onsubmit="return user_update()">
          <fieldset class="user-change-box">
            <legend>예약자 이름 변경</legend>
            <input type="hidden" name="case" value="user">
            <input type="text" name="user" id="user" title="예약자 이름 변경" placeholder="체크인시 필요한 정보에요!">
          </fieldset>
          <p class="err-txt"></p>
          <div class="change-btngroup">
            <button type="submit" form="user_change" class="cont-submit-btn change-finish-btn">수정완료</button>
            <button type="button" class="cont-cancel-btn change-cancel-btn">수정취소</button>
          </div>
        </form>
      </div>
      <div class="cont-box">
        <div class="tel-box">
          <h3>전화번호</h3>
          <div class="info"><p id="tel-now"><?php echo $tel1["tel1"];?>-****-<?php echo $tel2["tel2"];?></p></div>
          <button type="button" class="profile-change-btn" id="tel_btn">변경하기</button>
        </div>
        <form action="mymenuChange.php" method="post" id="tel_change" onsubmit="return tel_update()">
          <fieldset class="tel-change-box">
            <legend>전화번호 변경</legend>
            <input type="hidden" name="case" value="tel">
            <input type="tel" name="tel" id="tel" title="전화번호 변경" placeholder="체크인시 필요한 정보에요!">
            <button type="button" class="cont-submit-btn check-btn">인증번호 전송</button>
          </fieldset>
          <p class="err-txt telerr">" - " 없이 숫자만 입력해주세요</p>
          <div class="tel-change-box auth_box">
            <input type="text" name="auth" id="auth" title="인증번호 입력" placeholder="인증번호를 입력해주세요">
            <button type="button" class="cont-submit-btn auth-check" id="auth_chk_btn" disabled>인증번호 확인</button>
          </div>
          <p class="err-txt"></p>
          <div class="change-btngroup">
            <button type="submit" form="tel_change" class="cont-submit-btn change-finish-btn">수정완료</button>
            <button type="button" class="cont-cancel-btn change-cancel-btn">수정취소</button>
          </div>
        </form>
      </div>
      <button type="button" class="signout-btn">회원탈퇴</button>
    </section>
  </div>
<!-- 푸터영역 -->
  <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php";?>
</body>
</html>