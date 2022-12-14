
    <header>
    <div class="header_wrap">
      <h1 class="logo"><a href="//localhost/index.php">여기어때</a></h1>
      <h2 class="hide">상단 메뉴</h2>
      <ul class="top_menu">
        <li><a href="#" class="search_btn basic">검색</a></li>
        <li><a href="//localhost/search.html" class="top_menu1 basic">내주변</a></li>
        <li><a href="//localhost/event/event.php" class="top_menu2 basic">이벤트</a></li>
      <?php if(!$s_idx){ ?>
        <li><a href="//localhost/login/login.php" class="top_menu3 basic">로그인</a></li>
      <?php }else{ ?>
        <li><a href="//localhost/members/mymenu.php" class="top_menu4 basic">내정보</a></li>
        <li><a href="//localhost/login/logout.php" class="top_menu3 logout">로그아웃</a></li>
      <?php } ?>
      </ul>  
    </div>    
    <div class="search">
      <div class="search-wrap">
        <div class="search_icon"></div>
        <form action="search.html" method="get" id="search">
          <fieldset>
            <legend for="search">검색</legend>
            <div class="s-items">
              <input type="search" name="search-bar" id="search-bar" placeholder="지역, 숙소명">
              <div class="select-box">
                <div class="lbox">
                  <p>여행지</p>
                  <input type="text" name="search-local" id="search-local" placeholder="여행지 선택"  readonly>
                </div>
                <div class="dbox">
                  <p>날짜</p>
                  <input type="hidden" name="date1_value" id="date1_value" readonly>
                  <input type="text" name="date_1" id="date_1" placeholder="체크인" readonly>
                  <div class="line"></div>
                  <input type="hidden" name="date2_value" id="date2_value" readonly>
                  <input type="text" name="date_2" id="date_2" placeholder="체크아웃" readonly>
                  <input type="hidden" name="day" id="day" readonly>
                </div>
                <div class="pbox">
                  <p>인원</p>
                  <label for="adult" id="adult_label">성인</label>
                  <button type="button" id="adult_minus" class="btn_minus">어른 감소</button>
                  <input type="text" name="personnel_adult" id="adult" value="0" readonly>
                  <button type="button" id="adult_plus" class="btn_plus">어른 추가</button>
                  <label for="kids" id="kids_label">유아</label>
                  <button type="button" id="kids_minus" class="btn_minus">유아 감소</button>
                  <input type="text" name="personnel_kids" id="kids" value="0" readonly>
                  <button type="button" id="kids_plus" class="btn_plus">유아 추가</button>
                </div>
              </div>
            </div>
            <button type="submit" for="search" class="search-btn" id="search-btn">검 색</button>
          </fieldset>
        </form>
        <div class="close">
          <a href="#"><img src="//localhost/img/close_btn.png" alt="닫기"></a>
        </div>
      </div>
      <div class="search-local-bg" id="search-local-bg">
        <div class="search-local">
          <h3>숙박 유형</h3>
          <ul class="depth1" id="depth1">
            <li>
              <a href="#">모텔</a>
              <ul class="depth2">
                <li>
                  <a href="#">서울</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">서울 인기 숙소</a></dt>
                    <dt><a href="#" class="all">서울 전체</a></dt>
                    <dd><a href="#">서초/신사/방배</a></dd>
                    <dd><a href="#">강남/역삼/삼성/논현</a></dd>
                    <dd><a href="#">서울대/신림/사당/동작</a></dd>
                    <dd><a href="#">잠실새내/신천</a></dd>
                    <dd><a href="#">건대/광진/구의</a></dd>
                    <dd><a href="#">용산/중구/명동/이태원</a></dd>
                    <dd><a href="#">구로/금천/오류/신도림</a></dd>
                    <dd><a href="#">은편/연신내/불광</a></dd>
                    <dd><a href="#">노원/도봉/창동</a></dd>
                    <dd><a href="#">천호/길동/둔촌</a></dd>
                    <dd><a href="#">중랑/상봉/면목/태릉</a></dd>
                    <dd><a href="#">왕십리/성수/금호</a></dd>
                    <dd><a href="#">종로/대학로</a></dd>
                    <dd><a href="#">잠실/방이</a></dd>
                    <dd><a href="#">동대문/장안/청량리/답십리</a></dd>
                    <dd><a href="#">성신여대/성북/월곡</a></dd>
                    <dd><a href="#">영등포/여의도</a></dd>
                    <dd><a href="#">신촌/홍대/서대문/마포</a></dd>
                    <dd><a href="#">강북/수유/미아</a></dd>
                    <dd><a href="#">강서/화곡/까치산역/목동</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">경기</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">경기 인기 숙소</a></dt>
                    <dt><a href="#" class="all">경기 전체</a></dt>
                    <dd><a href="#">수원시청/권선/영통</a></dd>
                    <dd><a href="#">안양/평촌/인덕원/과천</a></dd>
                    <dd><a href="#">안성/평택/송탄</a></dd>
                    <dd><a href="#">포천</a></dd>
                    <dd><a href="#">대부도/제부도</a></dd>
                    <dd><a href="#">남양주</a></dd>
                    <dd><a href="#">가평/양평</a></dd>
                    <dd><a href="#">의정부</a></dd>
                    <dd><a href="#">파주/금촌/헤이리/통일동산</a></dd>
                    <dd><a href="#">구리/하남</a></dd>
                    <dd><a href="#">오산/화성/동탄</a></dd>
                    <dd><a href="#">수원역/세류/팔달문/구운장안</a></dd>
                    <dd><a href="#">이천/광주/여주</a></dd>
                    <dd><a href="#">김포/장기/구래/대명항</a></dd>
                    <dd><a href="#">고양/일산</a></dd>
                    <dd><a href="#">시흥/월곶/정왕/오이도</a></dd>
                    <dd><a href="#">양주/동두천/연천/장흥</a></dd>
                    <dd><a href="#">부천</a></dd>
                    <dd><a href="#">안산</a></dd>
                    <dd><a href="#">수원/인계</a></dd>
                    <dd><a href="#">군포/금정/산본/의왕</a></dd>
                    <dd><a href="#">광명/철산/시흥신천역</a></dd>
                    <dd><a href="#">용인</a></dd>
                    <dd><a href="#">성남/분당</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">경북</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">경북 인기 숙소</a></dt>
                    <dt><a href="#" class="all">경북 전체</a></dt>
                    <dd><a href="#">구미</a></dd>
                    <dd class="last"><a href="#">문경/상주/영주/예천</a></dd>
                    <dd><a href="#">울진/울릉도/청송/영덕</a></dd>
                    <dd class="last"><a href="#">포항북구/영일대/죽도시장/<br>여객터미널</a></dd>
                    <dd><a href="#">경산/하양/영천/청도</a></dd>
                    <dd class="last"><a href="#">포항남구/시청/시외버스터미널/<br>구룡포/문덕/오천</a></dd>
                    <dd><a href="#">안동</a></dd>
                    <dd class="last"><a href="#">경주/보문단지/황리단길/불국사/<br>안강/감포/양남</a></dd>
                    <dd><a href="#">김천/성주/칠곡/의성/군위</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">울산</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">울산 인기 숙소</a></dt>
                    <dt><a href="#" class="all">울산 전체</a></dt>
                    <dd class="last"><a href="#">남구/중구/삼산/성남/무거/<br>신정</a></dd>
                    <dd class="last"><a href="#">동구/북구/울주군/일산/정자/<br>진하/영남알프스</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">인천</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">인천 인기 숙소</a></dt>
                    <dt><a href="#" class="all">인천 전체</a></dt>
                    <dd><a href="#">주안</a></dd>
                    <dd class="last"><a href="#">부평</a></dd>
                    <dd><a href="#">동암/간석</a></dd>
                    <dd class="last"><a href="#">구월/소래포구</a></dd>
                    <dd><a href="#">월미도/차이나타운/신포/<br>동인천</a></dd>
                    <dd class="last"><a href="#">을왕리/인천공항</a></dd>
                    <dd><a href="#">용현/숭의/도화/송림</a></dd>
                    <dd class="last"><a href="#">작전/경인교대</a></dd>
                    <dd><a href="#">송도/연수</a></dd>
                    <dd class="last"><a href="#">서구/경단</a></dd>
                    <dd><a href="#">강화/웅진/백령도</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">강원</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">강원 인기 숙소</a></dt>
                    <dt><a href="#" class="all">강원 전체</a></dt>
                    <dd><a href="#">경포대/사천/주문진</a></dd>
                    <dd class="last"><a href="#">강릉역/교동택지/옥계</a></dd>
                    <dd><a href="#">속초설악/동명항/고성</a></dd>
                    <dd class="last"><a href="#">양양/낙산/하조대/인제</a></dd>
                    <dd><a href="#">평창/영월정선/태백</a></dd>
                    <dd class="last"><a href="#">춘천/홍천/철원/화천</a></dd>
                    <dd><a href="#">원주/횡성</a></dd>
                    <dd class="last"><a href="#">정동진/동해/삼적</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">경남</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">경남 인기 숙소</a></dt>
                    <dt><a href="#" class="all">경남 전체</a></dt>
                    <dd><a href="#">양산/밀양</a></dd>
                    <dd class="last"><a href="#">김해/장유/율하</a></dd>
                    <dd><a href="#">진주</a></dd>
                    <dd class="last"><a href="#">거제/통영/고성군</a></dd>
                    <dd><a href="#">창원 상남/용호/중앙</a></dd>
                    <dd class="last"><a href="#">사천/남해/하동</a></dd>
                    <dd><a href="#">마산/진해</a></dd>
                    <dd class="last"><a href="#">창원 명서/팔용/봉곡/북면</a></dd>
                    <dd><a href="#">거창/함안/창녕/합천/의령</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">충북</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">충북 인기 숙소</a></dt>
                    <dt><a href="#" class="all">충북 전체</a></dt>
                    <dd><a href="#">제천/단양</a></dd>
                    <dd class="last"><a href="#">청주 흥덕구/서원구</a></dd>
                    <dd><a href="#">청주 상당구/청원구</a></dd>
                    <dd class="last"><a href="#">진천/음성</a></dd>
                    <dd><a href="#">증평/괴산/영동/보은/<br>옥천</a></dd>
                    <dd class="last"><a href="#">충주/수안보</a></dd>
                    </dl>
                </li>
                <li>
                  <a href="#">제주</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot ">제주 인기 숙소</a></dt>
                    <dt><a href="#" class="all">제주 전체</a></dt>
                    <dd class="last"><a href="#">제주시</a></dd>
                    <dd class="last"><a href="#">서귀포/마라도</a></dd>
                    <dd class="last"><a href="#">애월/협재</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">부산</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">부산 인기 숙소</a></dt>
                    <dt><a href="#" class="all">부산 전체</a></dt>
                    <dd><a href="#">송정/기장/정관</a></dd>
                    <dd class="last"><a href="#">해운대/재송</a></dd>
                    <dd><a href="#">연산/토곡</a></dd>
                    <dd class="last"><a href="#">동래/온천장/부산대/구서/사직</a></dd>
                    <dd><a href="#">경성대/대연/용호/문현</a></dd>
                    <dd class="last"><a href="#">사상(공항경전철)/학장/엄궁</a></dd>
                    <dd><a href="#">덕천/만덕/구포/화명/북구</a></dd>
                    <dd class="last"><a href="#">서면/초읍양정/부산시민공원/<br>범천</a></dd>
                    <dd><a href="#">강서/하단/사하/영지/신호/<br>다대포</a></dd>
                    <dd><a href="#">남포동/부산역/송도/영도/<br>범일동</a></dd>
                    </dl>
                </li>
                <li>
                  <a href="#">전북</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">전북 인기 숙소</a></ㅇ>
                    <dt><a href="#" class="all">전북 전체</a></ㅇ>
                    <dd><a href="#">전주 완산구/완주</a></dd>
                    <dd class="last"><a href="#">군산/비응도</a></dd>
                    <dd><a href="#">김제/부안/고창/정읍</a></dd>
                    <dd class="last"><a href="#">남원/임실/순창/무주/진안/<br>장수</a></dd>
                    <dd><a href="#">전주 덕진구</a></dd>
                    <dd class="last"><a href="#">익산/익산터미널/익산역</a></dd>
                  </dl> 
                </li>
                <li>
                  <a href="#">광주</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">광주 인기 숙소</a></dt>
                    <dt><a href="#" class="all">광주 전체</a></dt>
                    <dd><a href="#">서구/유스퀘어터미널/<br>성무지구</a></dd>
                    <dd class="last"><a href="#">북구/챔피언스필드/광주역/<br>전남대학교</a></dd>
                    <dd><a href="#">광산구 하남/송정역</a></dd>
                    <dd class="last"><a href="#">동구/남구/충장로/<br>국립아시아문화전당</a></dd>
                    <dd><a href="#">광산구 첨단지구</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">대구</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">대구 인기 숙소</a></dt>
                    <dt><a href="#" class="all">대구 전체</a></dt>
                    <dd><a href="#">동성로/시청/서문시장</a></dd>
                    <dd class="last"><a href="#">수성구/수성못/범어/성당못/<br>알파시티/남구/대명/봉덕</a></dd>
                    <dd><a href="#">평리/내당/비산/원대</a></dd>
                    <dd class="last"><a href="#">대구역/경북대/엑스코/<br>칠곡3지구/태전동/금호지구</a></dd>
                    <dd><a href="#">성서공단/계명대/달성군</a></dd>
                    <dd class="last"><a href="#">동대구역/신암/신천/대구공항/<br>동촌유원지/혁신도시/팔공산</a></dd>
                    <dd><a href="#">두류공원/두류/본리/<br>죽선/감삼</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">대전</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">대전 인기 숙소</a></dt>
                    <dt><a href="#" class="all">대전 전체</a></dt>
                    <dd><a href="#">중구 은행/대흥/선화/유천</a></dd>
                    <dd class="last"><a href="#">유성 봉명/도안/장대</a></dd>
                    <dd><a href="#">대덕구 신탄진/중리</a></dd>
                    <dd class="last"><a href="#">동구 용전/복합터미널</a></dd>
                    <dd><a href="#">서구 둔산/용문/월평</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">전남</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">전남 인기 숙소</a></dt>
                    <dt><a href="#" class="all">전남 전체</a></dt>
                    <dd><a href="#">여수</a></dd>
                    <dd class="last"><a href="#">광양</a></dd>
                    <dd><a href="#">순천</a></dd>
                    <dd class="last"><a href="#">목포/무안/영암</a></dd>
                    <dd><a href="#">화순/보성/해남/완도/<br>강진/고흥/진도</a></dd>
                    <dd><a href="#">나주/담양/곡성/구례/<br>영광/장성/함평</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">충남</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">충남 인기 숙소</a></dt>
                    <dt><a href="#" class="all">충남 전체</a></dt>
                    <dd><a href="#">천안 동남구</a></dd>
                    <dd class="last"><a href="#">천안 서북구</a></dd>
                    <dd><a href="#">태안/안면도</a></dd>
                    <dd class="last"><a href="#">계룡/금산/논산</a></dd>
                    <dd><a href="#">공주/동학사</a></dd>
                    <dd class="last"><a href="#">아산</a></dd>
                    <dd><a href="#">당진</a></dd>
                    <dd class="last"><a href="#">서산</a></dd>
                    <dd><a href="#">대천/보령</a></dd>
                    <dd class="last"><a href="#">서천/부여</a></dd>
                    <dd><a href="#">세종</a></dd>
                    <dd><a href="#">예산/청양/홍성</a></dd>
                    </dl>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">호텔 / 리조트</a>
              <ul class="depth2">
                <li>
                  <a href="#">서울</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">서울 인기 숙소</a></dt>
                    <dt><a href="#" class="all">서울 전체</a></dt>
                    <dd><a href="#">강남/역삼/삼성/신사/청담</a></dd>
                    <dd class="last"><a href="#">서초/교대</a></dd>
                    <dd><a href="#">잠실/송파/왕십리/강동</a></dd>
                    <dd class="last"><a href="#">을지로/시청/명동</a></dd>
                    <dd><a href="#">종로/인사동/동대문/강북</a></dd>
                    <dd class="last"><a href="#">서울역/이태원/용산</a></dd>
                    <dd><a href="#">마포/홍대/신촌/서대문</a></dd>
                    <dd class="last"><a href="#">영등포/여의도/김포공항</a></dd>
                    <dd><a href="#">구로/금천/관악/동작</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">부산</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">부산 인기 숙소</a></dt>
                    <dt><a href="#" class="all">부산 전체</a></dt>
                    <dd><a href="#">해운대 (센텀,송정,달맞이)</a></dd>
                    <dd class="last"><a href="#">광안리</a></dd>
                    <dd><a href="#">부산역/남포/자갈치</a></dd>
                    <dd class="last"><a href="#">서면/동래/연제/남구</a></dd>
                    <dd><a href="#">기장/김해공항/<br>기타(그외 지역)</a></dd>
                    <dd><a href="#">영도/송도해수욕장</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">제주</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">제주 인기 숙소</a></dt>
                    <dt><a href="#" class="all">제주 전체</a></dt>
                    <dd><a href="#">제주시/제주국제공항</a></dd>
                    <dd class="last"><a href="#">애월/협재/한림</a></dd>
                    <dd><a href="#">조천/함덕/김녕</a></dd>
                    <dd class="last"><a href="#">서귀포시</a></dd>
                    <dd><a href="#">중문</a></dd>
                    <dd><a href="#">성산/표선</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">강원</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">강원 인기 숙소</a></dt>
                    <dt><a href="#" class="all">강원 전체</a></dt>
                    <dd><a href="#">강릉/동해/삼척</a></dd>
                    <dd class="last"><a href="#">속초/고성</a></dd>
                    <dd><a href="#">춘천/원주/영월/태백</a></dd>
                    <dd class="last"><a href="#">평창/정선/횡성</a></dd>
                    <dd><a href="#">양양/홍천/인제/철원</a></dd>
                    </dl>
                </li>
                <li>
                  <a href="#">경기</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">경기 인기 숙소</a></dt>
                    <dt><a href="#" class="all">경기 전체</a></dt>
                    <dd><a href="#">수원/성남/판교</a></dd>
                    <dd class="last"><a href="#">가평/양평/포천</a></dd>
                    <dd><a href="#">용인/평택/여주/이천</a></dd>
                    <dd class="last"><a href="#">화성/동탄/안산/부천/안양</a></dd>
                    <dd><a href="#">고양/의정부/파주/김포</a></dd>
                    <dd class="last"><a href="#">시흥/군포/광명</a></dd>
                    <dd><a href="#">남양주시/구리/하남</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">인천</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">인천 인기 숙소</a></dt>
                    <dt><a href="#" class="all">인천 전체</a></dt>
                    <dd><a href="#">송도/남동구/옹진군</a></dd>
                    <dd class="last"><a href="#">인천국제공항(중구)</a></dd>
                    <dd><a href="#">부평/계양/서구/강화/<br>미추홀구</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">경상</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">경상 인기 숙소</a></dt>
                    <dt><a href="#" class="all">경상 전체</a></dt>
                    <dd><a href="#">경주</a></dd>
                    <dd class="last"><a href="#">거제/고성</a></dd>
                    <dd><a href="#">포항/청송/영덕/울진</a></dd>
                    <dd class="last"><a href="#">통영/창녕</a></dd>
                    <dd><a href="#">대구/구미/문경</a></dd>
                    <dd class="last"><a href="#">울산/안동</a></dd>
                    <dd><a href="#">장원/양산/김해</a></dd>
                    <dd><a href="#">사천/남해/진주/하동</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">전라</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">전라 인기 숙소</a></dt>
                    <dt><a href="#" class="all">전라 전체</a></dt>
                    <dd><a href="#">여수</a></dd>
                    <dd class="last"><a href="#">전주</a></dd>
                    <dd><a href="#">광주</a></dd>
                    <dd class="last"><a href="#">순천/광양</a></dd>
                    <dd><a href="#">군산/익산/부안/진안/무주</a></dd>
                    <dd class="last"><a href="#">화순/남원/구래</a></dd>
                    <dd><a href="#">목포/나주/완도/해남/영암</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">충청</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">충청 인기 숙소</a></dt>
                    <dt><a href="#" class="all">충청 전체</a></dt>
                    <dd><a href="#">대전</a></dd>
                    <dd class="last"><a href="#">천안/아산/예산/당진</a></dd>
                    <dd><a href="#">보령(대전)/태안(안면도)/<br>서산/부여</a></dd>
                    <dd class="last"><a href="#">충주/제천/단양</a></dd>
                    <dd><a href="#">청주/세종</a></dd>
                  </dl>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">펜션 / 풀빌라</a>
              <ul class="depth2">
                <li>
                  <a href="#">경기/인천</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot lt">경기/인천 인기 펜션</a></dt>
                    <dt><a href="#" class="all">경기/인천 전체</a></dt>
                    <dd><a href="#">양평/용문</a></dd>
                    <dd class="last"><a href="#">포천/남양주</a></dd>
                    <dd><a href="#">대부도/영흥도/선재도</a></dd>
                    <dd class="last"><a href="#">강화</a></dd>
                    <dd><a href="#">영종도/을왕리/기타도서</a></dd>
                    <dd class="last"><a href="#">파주/양주/연천</a></dd>
                    <dd><a href="#">화성/제부도/안성</a></dd>
                    <dd><a href="#">용인/여주/인천</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">강원</a>
                  <dl class="depth3 ">
                    <dt><a href="#" class="hot">강원 인기 펜션</a></dt>
                    <dt><a href="#" class="all">강원 전체</a></dt>
                    <dd><a href="#">강릉/경포</a></dd>
                    <dd class="last"><a href="#">속초/고성</a></dd>
                    <dd><a href="#">양야</a></dd>
                    <dd class="last"><a href="#">춘천(남이섬)/강촌</a></dd>
                    <dd><a href="#">홍천/인제/철원/화천</a></dd>
                    <dd class="last"><a href="#">동해/삼척</a></dd>
                    <dd><a href="#">평창/횡성/원주</a></dd>
                    <dd><a href="#">정선/영월</a></dd>
                  </dl>
                </li> 
                <li>
                  <a href="#">가평</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">가평 인기 펜션</a></dt>
                    <dt><a href="#" class="all">가평 전체</a></dt>
                    <dd><a href="#">남이섬/가평읍</a></dd>
                    <dd class="last"><a href="#">아침고요수목원/상면</a></dd>
                    <dd><a href="#">청평/설악/쁘띠프랑스</a></dd>
                    <dd><a href="#">자라섬/북면</a></dd>
                  </dl>
                </li> 
                <li>
                  <a href="#">경북</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">경북 인기 펜션</a></dt>
                    <dt><a href="#" class="all">경북 전체</a></dt>
                    <dd><a href="#">경주</a></dd>
                    <dd class="last"><a href="#">포항</a></dd>
                    <dd><a href="#">영덕/울진/울릉도</a></dd>
                    <dd class="last"><a href="#">문경/상주/안동/영주</a></dd>
                    <dd><a href="#">청도/성주/경산</a></dd>
                    </dl>
                </li> 
                <li>
                  <a href="#">충청</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">충청 인기 펜션</a></dt>
                    <dt><a href="#" class="all">충청 전체</a></dt>
                    <dd><a href="#">태안/만리포/청포대</a></dd>
                    <dd class="last"><a href="#">꽃지/안면도</a></dd>
                    <dd><a href="#">대천/보령</a></dd>
                    <dd class="last"><a href="#">단양/충주/제천/괴산</a></dd>
                    <dd><a href="#">서산/예산/아산/서천</a></dd>
                    <dd><a href="#">공주/청주/보은</a></dd>
                  </dl>
                </li> 
                <li>
                  <a href="#">경남</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">경남 인기 펜션</a></dt>
                    <dt><a href="#" class="all">경남 전체</a></dt>
                    <dd><a href="#">거제</a></dd>
                    <dd class="last"><a href="#">통영/고성</a></dd>
                    <dd><a href="#">남해/사천</a></dd>
                    <dd class="last"><a href="#">산청/하동/합천/거창</a></dd>
                    <dd><a href="#">밀양/양산/김해/창원</a></dd>
                    <dd><a href="#">울산</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">전라</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">전라 인기 펜션</a></dt>
                    <dt><a href="#" class="all">전라 전체</a></dt>
                    <dd><a href="#">여수</a></dd>
                    <dd class="last"><a href="#">변산반도/부안</a></dd>
                    <dd><a href="#">순천/광양/구례/담양</a></dd>
                    <dd class="last"><a href="#">전주/무주</a></dd>
                    <dd><a href="#">영광/목포/고흥</a></dd>
                  </dl>
                  </a>
                </li>
                <li>
                  <a href="#">부산</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">부산 인기 펜션</a></dt>
                    <dt><a href="#" class="all">부산 전체</a></dt>
                    <dd><a href="#">해운대/광안리/송정</a></dd>
                    <dd class="last"><a href="#">기장</a></dd>
                    <dd><a href="#">강서/중구/진구/서구</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">제주</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">제주 인기 펜션</a></dt>
                    <dt><a href="#" class="all">제주 전체</a></dt>
                    <dd><a href="#">제주/애월</a></dd>
                    <dd class="last"><a href="#">함덕/월정/구좌/하도</a></dd>
                    <dd><a href="#">협재/한림</a></dd>
                    <dd class="last"><a href="#">서귀포/성산/표선</a></dd>
                    <dd><a href="#">중문/산방산/모슬포</a></dd>
                  </dl>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">홈 & 빌라</a>
              <ul class="depth2">
                <li>
                  <a href="#">제주</a>
                  <dl class="depth3">
                    <dt><a href="#" class="all">제주 전체</a></dt>
                  </dl>
                </li>
                <li>
                  <a href="#">서울/경인</a>
                  <dl class="depth3">
                    <dt><a href="#" class="all">서울/경인 전체</a></dt>
                  </dl>
                </li>
                <li>
                  <a href="#">강원</a>
                  <dl class="depth3">
                    <dt><a href="#" class="all">강원 전체</a></dt>
                  </dl>
                </li>
                <li>
                  <a href="#">경상</a>
                  <dl class="depth3">
                    <dt><a href="#" class="all">경상 전체</a></dt>
                  </dl>
                </li>
                <li>
                  <a href="#">전라</a>
                  <dl class="depth3">
                    <dt><a href="#" class="all">전라 전체</a></dt>
                  </dl>
                </li>
                <li>
                  <a href="#">충청</a>
                  <dl class="depth3">
                    <dt><a href="#" class="all">충청 전체</a></dt>
                  </dl>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">캠핑 / 글램핑</a>
              <ul class="depth2">
                <li>
                  <a href="#">경기/인천권</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot lt">경기/인천권 전체</a></dt>
                  </dl>
                </li>
                <li>
                  <a href="#">충청권</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">충청권 전체</a></dt>
                  </dl>
                </li>
                <li>
                  <a href="#">경상/부산권</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot lt">경상/부산권 전체</a></dt>
                  </dl>
                </li>
                <li>
                  <a href="#">전라/제주권</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot lt">전라/제주권 전체</a></dt>
                  </dl>
                </li>
                <li>
                  <a href="#">강원권</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">강원권 전체</a></dt>
                  </dl>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">게스트하우스 / 한옥</a>
              <ul class="depth2">
                <li>
                  <a href="#">서울</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">서울 인기 게하</a></dt>
                    <dt><a href="#" class="all">서울 전체</a></dt>
                    <dd><a href="#">홍대/신촌/마포</a></dd>
                    <dd class="last"><a href="#">북촌/인사동/종로/동대문</a></dd>
                    <dd><a href="#">영동/남산/중구</a></dd>
                    <dd class="last"><a href="#">강남/잠실/삼성/서초</a></dd>
                    <dd><a href="#">이태원/서울역/용산</a></dd>
                    <dd><a href="#">영등포/신림/김포공항</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">경기 / 인천</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot lt">경기/인천 인기 게하</a></dt>
                    <dt><a href="#" class="all">경기/인천 전체</a></dt>
                    <dd><a href="#">경기</a></dd>
                    <dd class="last"><a href="#">인천</a></dd>
                    <dd><a href="#">인천공항/중구 </a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">강원</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">강원 인기 게하</a></dt>
                    <dt><a href="#" class="all">강원 전체</a></dt>
                    <dd><a href="#">강릉/동해/삼척</a></dd>
                    <dd class="last"><a href="#">속초/양양/고성</a></dd>
                    <dd><a href="#">춘천/영월</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">부산</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">부산 인기 게하</a></dt>
                    <dt><a href="#" class="all">부산 전체</a></dt>
                    <dd><a href="#">해운대/기장</a></dd>
                    <dd class="last"><a href="#">남포동/자갈치/송도/감천마을</a></dd>
                    <dd><a href="#">부산역/서면</a></dd>
                    <dd><a href="#">광안리 </a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">경상</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">경상 인기 게하</a></dt>
                    <dt><a href="#" class="all">경상 전체</a></dt>
                    <dd><a href="#">경주</a></dd>
                    <dd><a href="#">대구</a></dd>
                    <dd><a href="#">안동/포항</a></dd>
                    <dd><a href="#">통영</a></dd>
                    <dd><a href="#">거제/남해/울산</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">전라</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">전라 인기 게하</a></dt>
                    <dt><a href="#" class="all">전라 전체</a></dt>
                    <dd><a href="#">전주/한옥마을</a></dd>
                    <dd class="last"><a href="#">군산/남원/익산</a></dd>
                    <dd><a href="#">여수</a></dd>
                    <dd class="last"><a href="#">순천/목포/함평</a></dd>
                    <dd><a href="#">광주</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">충청 / 대전</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot lt">충청/대전 인기 게하</a></dt>
                    <dt><a href="#" class="all">충청/대전 전체</a></dt>
                    <dd><a href="#">충청</a></dd>
                    <dd><a href="#">대전</a></dd>
                  </dl>
                </li>
                <li>
                  <a href="#">제주</a>
                  <dl class="depth3">
                    <dt><a href="#" class="hot">제주 인기 게하</a></dt>
                    <dt><a href="#" class="all">제주 전체</a></dt>
                    <dd><a href="#">제주공항</a></dd>
                    <dd class="last"><a href="#">애월/협재</a></dd>
                    <dd><a href="#">조천/함덕</a></dd>
                    <dd class="last"><a href="#">구좌/월정</a></dd>
                    <dd><a href="#">성산/우도</a></dd>
                    <dd class="last"><a href="#">남원/표선</a></dd>
                    <dd><a href="#">서귀포/중문</a></dd>
                    <dd><a href="#">대정/안덕</a></dd>
                  </dl>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="option_bg"></div>
  </header>

