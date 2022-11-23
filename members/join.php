<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때 - 회원가입</title>
  <link rel="stylesheet" href="../css/join.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script type="text/javascript" src="../js/join.js"></script>
</head>
<body>
  <header>
    <div class="header_wrap">
      <h1 class="logo"><a href="../index.php">여기어때</a></h1>
    </div>
  </header>

  <div class="wrap">
    <div class="nav_box">
      <h2>회원가입</h2>
      <ul class="list" id="list">
        <li class="li_agree on">이용 약관 동의</li>
        <li class="li_cer">본인 인증</li>
        <li class="li_user" >정보 입력</li>
      </ul>
    </div>

    <form action="insert.php" method="post" class="join_form" name="join" id="join" onsubmit="return user_join()">

          <!-- 약관 동의 -->
          <section class="join_box onboard" id="agree_box">
          <h3>이용 약관 및 동의</h3>
          <div class="outbox">
            <input type="checkbox" name="all_check" id="all_check">
            <label for="all_check" class="all_check">전체 동의</label>
          </div>
            <fieldset id="est_group">
                <legend>필수 동의</legend>
                <div class="inbox">
                  <input type="checkbox" name="tos_check" id="tos_check" class="est_chk">
                  <label for="tos_check"><span class="est">(필수)</span> <a href="#">이용약관 동의</a></label>
                </div>
                <div class="inbox">
                  <input type="checkbox" name="age_check" id="age_check" class="est_chk">
                  <label for="age_check"><span class="est">(필수)</span> <a href="#">만 14세이상 이상 확인</a></label>
                </div>   
                <div class="inbox">
                  <input type="checkbox" name="privacy_check" id="privacy_check" class="est_chk">
                  <label for="privacy_check"><span class="est">(필수)</span> <a href="#">개인정보 수집 및 이용 동의</a></label>
                </div>
            </fieldset>
            <fieldset id="opt_group">
                <legend>선택 동의</legend>
                <div class="inbox">
                  <input type="checkbox" name="optprviacy_check" id="optprviacy_check">
                  <label for="optprviacy_check"><span class="opt">(선택)</span> <a href="#">개인정보 수집 및 이용 동의</a></label>
                </div>
                <div class="inbox">
                  <input type="checkbox" name="marketing_check" id="marketing_check">
                  <label for="marketing_check"><span class="opt">(선택)</span> <a href="#">마케팅 알림 수신 동의</a></label>
                </div>
                <div class="inbox">
                  <input type="checkbox" name="location_check" id="location_check">
                  <label for="location_check"><span class="opt">(선택)</span> <a href="#">위치기반 서비스 이용약관 동의</a></label>
                </div>
            </fieldset>
          <button type="button" class="next" id="tos_next">다 음</button>
        </section>

        <!-- 본인 인증 -->
        <section class="join_box" id="cer_box">
          <h3>본인 인증</h3>
          <fieldset>
            <legend>인증번호 전송</legend>
            <p>원활한 서비스 이용을 위해 본인인증을 진행해주세요.</p>
            <div class="cer_inbox">
              <label for="phone">핸드폰 번호 입력</label>
              <span class="guide hide">핸드폰 번호 ' - ' 제외</span><br>
              <input type="number" name="phone" id="phone" placeholder="핸드폰 번호 ' - ' 제외">
                  <button type="button" class="send" id="tel_chk_btn">전송</button>
            </div>
          </fieldset>
          <fieldset>
            <legend>인증번호 입력</legend>
            <div class="cer_inbox">
              <label for="authnum">인증번호</label><br>
              <input type="number" name="authnum" id="authnum" placeholder="인증번호" readonly="readonly">
              <button type="button" class="con" id="auth_chk_btn">확인</button>
              <span class="err_txt" id="auth_err"></span>
            </div>
          </fieldset>
          <button type="button" class="next" id="cer_next">다 음</button>
        </section>

        <!-- 정보 입력 -->
        <section class="join_box" id="user_box">
          <h3>정보 입력</h3>
          <fieldset>
            <legend>정보 입력</legend>
            <div class="info_inbox">
              <label for="user_id">이메일 아이디</label>
              <input type="text" name="user_id" id="user_id" placeholder="이메일을 입력해주세요">
              <p class="err_txt"></p>
            </div>
            <div class="info_inbox">
              <label for="user_pw">비밀번호</label>
              <p class="pw_guide">* 8 ~ 12자리의 영문, 숫자, 특수문자 포함</p>
              <input type="password" name="user_pw" id="user_pw" placeholder="비밀번호를 입력해주세요">
              <p class="err_txt"></p>
            </div>
            <div class="info_inbox">
              <label for="user_pw_check">비밀번호 확인</label>
              <input type="password" name="user_pw_check" id="user_pw_check" placeholder="비밀번호를 한번 더 입력해주세요">
              <p class="err_txt"></p>
            </div>
            <div class="info_inbox">
              <label for="reservation">예약자 정보</label>
              <input type="text" name="reservation" id="reservation" placeholder="이름을 적어주세요">
              <p class="err_txt"></p>
            </div>
            <div class="info_inbox">
              <label for="user_name">별명</label>
              <p class="name_guide">* 3 ~ 6자리의 한글만 가능</p>
              <input type="text" name="user_name" id="user_name" placeholder="별명을 입력해주세요">
              <p class="err_txt"></p>
            </div>
          </fieldset>
          <button type="submit" class="next end" id="join_end">회원가입 완료</button>
        </section>

      </form>
  </div>
</body>
</html>