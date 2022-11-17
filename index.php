<?php include "inc/session.php";?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>여기어때</title>
  <?php include "inc/src.php";?>
  <!-- <link rel="stylesheet" href="css/search_bar.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="js/daterangepicker.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="js/search_bar.js"></script>
  <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
  <script type="text/javascript" src="js/jquery.magnific-popup-setting.js"></script> -->
</head>

<body>
  <!-- 헤더 영역 -->
  <?php include "inc/header.php"; ?>
  <div class="void"></div>
  <!-- 링크 메뉴 -->
  <div class="main">
    <section class="link_menu cf">
      <h2 class="hide">링크 메뉴</h2>
      <h3 class="hide">숙소</h3>
      <ul class="menu_top cf">
        <li><a href="#" class="motel">모텔</a></li>
        <li><a href="#" class="hotel">호텔 / 리조트</a></li>
        <li><a href="#" class="pension">펜션 / 풀빌라</a></li>
        <li><a href="#" class="home">홈 & 빌라</a></li>
        <li><a href="#" class="camp">캠핑 / 글램핑</a></li>
        <li><a href="#" class="guest">게하 / 한옥</a></li>
      </ul>
      <!-- <h3 class="hide">여가</h3>
      <ul class="menu_bot cf">
        <li><a href="#" class="place">공간대여</a></li>
        <li><a href="#" class="airplane">국내 항공</a></li>
        <li><a href="#" class="rent">렌터카</a></li>
        <li><a href="#" class="leisure">레저 / 티켓</a></li>
        <li><a href="#" class="food_nav">맛집</a></li>
      </ul> -->
    </section>

    <!-- 지금, 여기 -->
    <div class="now-slide-bg">
      <section class="now_wrap">
        <div class="now_text_wrap">
          <h2 class="now_title">지금, 여기</h2>
          <p class="now_text">여행가고 싶은 그곳의 창문</p>
        </div>
        <div class="now_slide">
          <ul>
            <li class="now-con1"><a href="https://www.youtube.com/watch?v=2rPcen4GDJY" class=" popup-youtube">경주 월드스플래쉬</a></li>
            <li class="now-con2"><a href="https://www.youtube.com/watch?v=UjqD4QU9qt8" class=" popup-youtube">동해 설악산</a></li>
            <li class="now-con3 now-on"><a href="https://www.youtube.com/watch?v=UHQeRdtxdxg" class=" popup-youtube">경주 오푸스 풀빌라</a></li>
            <li class="now-con4"><a href="https://www.youtube.com/watch?v=daGwtSuuPwQ" class=" popup-youtube">제주 우도</a></li>
            <li class="now-con5"><a href="https://www.youtube.com/watch?v=e6GbIMvmpAg" class=" popup-youtube">동해 양양 서피비치</a></li>
          </ul>
        </div>
        <div class="left"><a href="#" class="prev_btn">이전</a></div>
        <div class="right"><a href="#" class="next_btn">다음</a></div>
      </section>
    </div>
    <!-- 이벤트배너 영역 -->
    <section class="event">
      <div class="banner_box">
        <h2 class="hide">이벤트 배너</h2>
        <ul>
          <li class="banner1_full">
            <a href="viewPage/1/" class="b-box banner1">
              매일 최대 10,000원! 카카오페이 10% 할인
            </a>
          </li>
          <li class="banner2_full">
            <a href="viewPage/2/" class="b-box banner2">
              매일 매일 선착순 9월 제휴 추가할인
            </a>
          </li>
          <li class="banner3_full">
            <a href="viewPage/3/" class="b-box banner3">
              위생,안전,편리함 인증완료! 품질인증숙소 최대 5만원 할인
            </a>
          </li>
          <li class="banner4_full">
            <a href="viewPage/6/" class="b-box banner4">
              인기 숙소 추천부터 맛집 할인까지! 강원도 여행 한방에 끝내기
            </a>
          </li>
        </ul>
      </div>
      <div class="left"><a href="#" class="prev_btn">이전</a></div>
      <div class="right"><a href="#" class="next_btn">다음</a></div>
    </section>
    
    <!-- 숙소 추천 -->
    <div class="rec_line">
      <section class="recomm cf">
        <h2 class="recomm_title title">주변 인기, <span class="f_color">여기 어때?</span></h2>
        <div class="recomm_box">
          <ul class="recomm_list cf">
            <li>
              <a href="#" class="recomm_con  re_thum1">
                <div class="recomm_sell">
                  <h3 class="recomm_name">명동 뉴서울 호텔</h3>
                  <p class="recomm_review"><span class="score">9.1</span>추천해요 <span class="review_num">(351)</span></p>
                  <p class="recomm_local"><span class="local_length">153m</span>중구 태평로 1가</p>
                  <p class="recomm_cancel">예약취소 가능</p>
                  <p class="recomm_etc">무료주차, 넷플릭스</p>
                </div>
                <dl class="recomm_time">
                  <dt class="recomm_model">대실</dt>
                  <dd class="recomm_price">35,000원</dd>
                </dl>
                <dl class="recomm_day">
                  <dt class="recomm_model">숙박</dt>
                  <dd class="recomm_price">110,000원</dd>
                </dl>
              </a>
            </li>
            <li>
              <a href="#" class="recomm_con  re_thum2">
                <div class="recomm_sell">
                  <h3 class="recomm_name">명동 뉴서울 호텔</h3>
                  <p class="recomm_review"><span class="score">9.1</span>추천해요 <span class="review_num">(351)</span></p>
                  <p class="recomm_local"><span class="local_length">153m</span>중구 태평로 1가</p>
                  <p class="recomm_cancel">예약취소 가능</p>
                  <p class="recomm_etc">무료주차, 넷플릭스</p>
                </div>
                <dl class="recomm_time">
                  <dt class="recomm_model">대실</dt>
                  <dd class="recomm_price">35,000원</dd>
                </dl>
                <dl class="recomm_day">
                  <dt class="recomm_model">숙박</dt>
                  <dd class="recomm_price">110,000원</dd>
                </dl>
              </a>
            </li>
            <li>
              <a href="#" class="recomm_con  re_thum3">
                <div class="recomm_sell">
                  <h3 class="recomm_name">명동 뉴서울 호텔</h3>
                  <p class="recomm_review"><span class="score">9.1</span>추천해요 <span class="review_num">(351)</span></p>
                  <p class="recomm_local"><span class="local_length">153m</span>중구 태평로 1가</p>
                  <p class="recomm_cancel">예약취소 가능</p>
                  <p class="recomm_etc">무료주차, 넷플릭스</p>
                </div>
                <dl class="recomm_time">
                  <dt class="recomm_model">대실</dt>
                  <dd class="recomm_price">35,000원</dd>
                </dl>
                <dl class="recomm_day">
                  <dt class="recomm_model">숙박</dt>
                  <dd class="recomm_price">110,000원</dd>
                </dl>
              </a>
            </li>
            <li>
              <a href="#" class="recomm_con  re_thum2">
                <div class="recomm_sell">
                  <h3 class="recomm_name">명동 뉴서울 호텔</h3>
                  <p class="recomm_review"><span class="score">9.1</span>추천해요 <span class="review_num">(351)</span></p>
                  <p class="recomm_local"><span class="local_length">153m</span>중구 태평로 1가</p>
                  <p class="recomm_cancel">예약취소 가능</p>
                  <p class="recomm_etc">무료주차, 넷플릭스</p>
                </div>
                <dl class="recomm_time">
                  <dt class="recomm_model">대실</dt>
                  <dd class="recomm_price">35,000원</dd>
                </dl>
                <dl class="recomm_day">
                  <dt class="recomm_model">숙박</dt>
                  <dd class="recomm_price">110,000원</dd>
                </dl>
              </a>
            </li>
            <li>
              <a href="#" class="recomm_con  re_thum3">
                <div class="recomm_sell">
                  <h3 class="recomm_name">명동 뉴서울 호텔</h3>
                  <p class="recomm_review"><span class="score">9.1</span>추천해요 <span class="review_num">(351)</span></p>
                  <p class="recomm_local"><span class="local_length">153m</span>중구 태평로 1가</p>
                  <p class="recomm_cancel">예약취소 가능</p>
                  <p class="recomm_etc">무료주차, 넷플릭스</p>
                </div>
                <dl class="recomm_time">
                  <dt class="recomm_model">대실</dt>
                  <dd class="recomm_price">35,000원</dd>
                </dl>
                <dl class="recomm_day">
                  <dt class="recomm_model">숙박</dt>
                  <dd class="recomm_price">110,000원</dd>
                </dl>
              </a>
            </li>
          </ul>
        </div>

        <div class="left"><a href="#" class="prev_btn">이전</a></div>
        <div class="right"><a href="#" class="next_btn">다음</a></div>
      </section>
    </div>
    <!-- 특가 상품 -->
    <section class="sp">
      <h2 class="sp_title title"><span class="f_color">오늘의 체크인</span> 특가 호텔</h2>
      <div class="sp_box">
        <ul class="sp_list cf">
          <li>
            <a href="#" class="sp_content sp_thum1">
              <span class="sp_text">호텔 이름</span>
              <span class="sp_review">&starf; 9.5<span class="sp_price">93,000원</span></span>
            </a>
          </li>
          <li>
            <a href="#" class="sp_content sp_thum2">
              <span class="sp_text">호텔 이름</span>
              <span class="sp_review">&starf; 9.5<span class="sp_price">93,000원</span></span>
            </a>
          </li>
          <li>
            <a href="#" class="sp_content sp_thum3">
              <span class="sp_text">호텔 이름</span>
              <span class="sp_review">&starf; 9.5<span class="sp_price">93,000원</span></span>
            </a>
          </li>
          <li>
            <a href="#" class="sp_content sp_thum4">
              <span class="sp_text">라발스 호텔</span>
              <span class="sp_review">&starf; 9.5<span class="sp_price">93,000원</span></span>
            </a>
          </li>
          <li>
            <a href="#" class="sp_content sp_thum5">
              <span class="sp_text">호텔 이름</span>
              <span class="sp_review">&starf; 9.5<span class="sp_price">93,000원</span></span>
            </a>
          </li>
        </ul>
      </div>
      <a href="#" class="sp_more">특가 상품 더보기</a>
    </section>

    <!-- 최근 본 상품 -->
    <div class="re_back">
      <section class="recent">
        <h2 class="recent_title title">최근 본 상품</h2>
        <ul class="recent_list cf">
          <li>
            <a href="#" class="recent_content">
              <span class="local">국내 숙소</span>
              <span class="hide">호텔 이름</span>
            </a>
          </li>
          <li>
            <a href="#" class="recent_content">
              <span class="local">국내 숙소</span>
              <span class="hide">호텔 이름</span>
            </a>
          </li>
          <li>
            <a href="#" class="recent_content">
              <span class="local">국내 숙소</span>
              <span class="hide">호텔 이름</span>
            </a>
          </li>
          <li>
            <a href="#" class="recent_content">
              <span class="local">국내 숙소</span>
              <span class="hide">호텔 이름</span>
            </a>
          </li>
          <li>
            <a href="#" class="recent_content">
              <span class="local">국내 숙소</span>
              <span class="hide">호텔 이름</span>
            </a>
          </li>
          <li>
            <a href="#" class="recent_content">
              <span class="local">국내 숙소</span>
              <span class="hide">호텔 이름</span>
            </a>
          </li>
        </ul>
        <a href="#" class="recent_more">더보기</a>
      </section>
    </div>

    <!-- 맛집 -->
    <section class="food">
      <h2 class="food_title title">맛집도 <span class="f_color">취향대로 ~ </span></h2>
      <div class="food_wrap">
        <a href="#" class="food_main">
          <img src="img/food_thum1.jpg" alt="맛집 이름">
          <p id="food_contxt">메인 맛집 컨텐츠 소개 글</p>
        </a>
        <ul class="food_sub">
          <li>
            <a href="#">
              <img src="img/food_thum2.jpg" alt="맛집 이름1">
              <span>맛집 이름1</span>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="img/food_thum3.jpg" alt="맛집 이름2">
              <span>맛집 이름2</span>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="img/food_thum4.jpg" alt="맛집 이름3">
              <span>맛집 이름3</span>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="img/food_thum5.jpg" alt="맛집 이름4">
              <span>맛집 이름4</span>
            </a>
          </li>
        </ul>
      </div>
      <a href="#" class="food_more">맛집 더보기</a>
    </section>

    <!-- 기업고객 -->
    <section class="cor cf">
      <div class="left_box">
        <a href="#" class="ad_box">
          여기어때 광고 등록하러 가기
          간편하게 등록하고 신규 고객 유치하세요~
        </a>
      </div>
      <div class="right_box">
        <a href="https://guest.goodchoice.kr/auth" target="_blank" class="gh_box">
          게스트하우스 등록하러 가기
        </a>
      </div>
    </section>
  </div>
  <!-- 사이드메뉴 -->
  <aside class="floating-bar">
    <ul>
      <li><a href="#" class="f-app">앱 다운</a></li>
      <li><a href="#" class="f-help">고객센터</a></li>
      <li><a href="#" class="f-chat">1:1채팅 문의</a></li>
      <li><a href="#" class="f-rvp">최근 본 상품</a></li>
    </ul>
    <div class="app_download">
      <a href="//itunes.apple.com/kr/app/yeogieottae-1deung-sugbag/id884043462?mt=8&ign-mpt=uo%3D2"" class="app_link apple" target="_blank" title="앱스토어 새창">
        <img src="img/Appstore.png" alt="Download on the App Store">
      </a>
      <a href="//play.google.com/store/apps/details?id=kr.goodchoice.abouthere" class="app_link google" target="_blank" title="구글플레이 새창">
        <img src="img/GooglePlay.png" alt="GET IT ON Google Play">
      </a>
    </div>
  </aside>
  <!-- 푸터 -->
  <footer>
    <div class="foot_wrap">
      <section class="sns">
        <h2 class="hide">sns 영역</h2>
        <ul>
          <li><a href="https://www.facebook.com/goodchoiceofficial" target="_blank" class="facebook">페이스북</a></li>
          <li><a href="https://blog.gccompany.co.kr/" target="_blank" class="blog">블로그</a></li>
        </ul>
      </section>

      <section class="foot_term">
        <h2 class="hide">이용약관 및 정책</h2>
        <ul>
          <li><a href="#">회사소개</a></li>
          <li><a href="#">이용약관</a></li>
          <li><a href="#"><b>개인정보처리방침</b></a></li>
          <li><a href="#">소비자 분쟁해결 기준</a></li>
          <li><a href="#">사업자 정보 확인</a></li>
        </ul>
      </section>
      <section class="foot_group">
        <h2 class="hide">그룹사이트 등</h2>
        <ul>
          <li><a href="#">여기어때 마케팅센터</a></li>
          <li><a href="#">액티비티 호스트센터</a></li>
          <li><a href="#">HOTEL 여기어때</a></li>
          <li><a href="#">콘텐츠산업진흥법에의한 표시</a></li>
        </ul>
      </section>
      <div class="foot_service">
        <b>고객행복센터 1670-6520</b> <span class="sc_time">오전 9시 ~ 새벽 3시</span>
      </div>
      <div class="foot_com">
        <h2 class="hide">회사 정보</h2>
        <p>(주) 여기어떄 컴퍼니</p>
        <address>주소 : 서울특별시 강남구 봉은사로 479, 479타워 11층 | 대표이사 : 정명훈 | 사업자등록번호 : 742-86-00224</address>
        <i>통신판매번호 : 2017-서울강남-01779 | 관광사업자 등록번호 : 제1026-24호 | 전화번호 : 1670-6250 | 전자우편주소 : help@goodchoice.kr</i>
        <p>(주) 여기어때컴퍼니는 통신판매중개자로서 통신판매의 당사자가 아니며, 상품의 예약, 이용 및 환불 등과 관련한 의무와 책임은 각 판매자에게 있습니다.</p>
        <p>Copyright GC COMPONY Corp. All rights reserved</p>
      </div>
    </div>
  </footer>
</body>

</html>