$(function(){
  $(window).scroll(function(){
    var wh = $(window).scrollTop();
    if(wh > 68){
      $("header").addClass("scroll");
      $(".logo a").addClass("scroll");
      $(".search_btn").addClass("scroll");
      $(".top_menu li a").addClass("scroll");
      // 검색
      $(".search").addClass("scroll");
      $(".s-items").addClass("scroll");
      $(".search-btn").addClass("scroll");
    }else{
      $("header").removeClass("scroll");
      $(".logo a").removeClass("scroll");
      $(".search_btn_b").removeClass("scroll");
      $(".top_menu li a").removeClass("scroll");
      // 검색
      $(".search").removeClass("scroll");
      $(".s-items").removeClass("scroll");
      $(".search-btn").removeClass("scroll");
    }
  })

  var now = $(".now_slide > ul");
  var now_li = now.children();
  var now_num = 2;
  var click_count = 2;
  var now_dx = new Array();
  for(dx=-1;dx<now_li.length-1;dx++){
    now_dx.push('-380'*dx)
  }
  // 지금 여기 페이저
  $now_pager_ul = $("<ul class='now_pager'>");
  $now_pager_li = $("<li>");
  $(".now_slide").after($now_pager_ul);
  $(".now_pager").append($now_pager_li)
  var now_pager = $(".now_pager li");
  $(now_pager).width($(".now_pager").width()/now_li.length);
  var pager_width = now_pager.width();
  $(now_pager).addClass("on");
  $(now_pager).animate({left:pager_width*now_num})
  
  // 지금 여기 슬라이더 페이저 눌렀을때
  $(now_pager).click(function(){
    now_num = $(this).index()
    click_count = $(this).index()
        // 버튼 사라짐 나타남
        console.log(now_num)
        console.log(now_num > now_li.length-2)
        console.log(now_num < 1)
        if(now_num > now_li.length-2){
          $(".now_wrap .next_btn").animate({opacity:0},200)
        }
        if(now_num < 1){
          $(".now_wrap .prev_btn").animate({opacity:0},200)
        }
        if(now_num >= 1 && now_num <= now_li.length-2){
          $(".now_wrap .next_btn").animate({opacity:0.5},200)
          $(".now_wrap .prev_btn").animate({opacity:0.5},200)
        }
    now.stop().animate({left:now_dx[now_num]});
    $(now_pager).stop().animate({left:pager_width*now_num})
    $(now_li).removeClass("now-on");
    $(now_li).eq($(this).index()).addClass("now-on");
  })

  // 다음 버튼
  $(".now_wrap .next_btn").click(function(){
    click_count++
    if(click_count > now_li.length-1){
      click_count = 4;
    }
    if(now_num == now_li.length-1){
      return false;
    }
    now_num++;
    console.log(now_num)
    console.log(now_li.length-1)
    // 버튼 사라짐 나타남
    if(now_num >= now_li.length-1){
      $(".now_wrap .next_btn").animate({opacity:0},200)
    }else{
      $(".now_wrap .prev_btn").animate({opacity:0.5},200)
      $(".now_wrap .next_btn").animate({opacity:0.5},200)
    }
    // 동작 제어
    now_li.removeClass("now-on")
    now.stop().animate({left:now_dx[click_count]})
    now_li.eq(now_num).addClass("now-on");
    // 페이저 제어
    $(now_pager).stop().animate({left:pager_width*now_num})
    return false;
  })

  // 지금여기 이전 버튼
  $(".now_wrap .prev_btn").click(function(){
    click_count--
    if(click_count < 0){
      click_count = 0;
    }
    if(now_num == 0){
      return false;
    }
    now_num--;
    // 버튼 사라짐 나타남
    if(now_num < 1){
      $(".now_wrap .prev_btn").animate({opacity:0},200)
    }else{
      $(".now_wrap .prev_btn").animate({opacity:0.5},200)
      $(".now_wrap .next_btn").animate({opacity:0.5},200)
    }
    // 동작 제어
    now_li.removeClass("now-on")
    now.stop().animate({left:now_dx[click_count]})
    now_li.eq(now_num).addClass("now-on")
    // 페이저 제어
    $(now_pager).stop().animate({left:pager_width*now_num})
    return false;
  })


























  // 이벤트 슬라이드 기반
  var banner = $(".event .banner_box > ul");
  banner.prepend(banner.children().last().clone());
  $(".banner_box").width($(window).width());
  $(".banner_box > ul li").width($(window).width());
  var li_width = $(".banner_box > ul li").width();
  var li_length = $(banner).children().length;
  var chk;
  var banner_num = 1;
  banner.width(li_width * li_length).css({left:-li_width});
  $(window).resize(function(){
    $(".banner_box").width($(window).width());
    $(".banner_box > ul li").width($(window).width());
    li_width = $(".banner_box > ul li").width();
  })
  // 이벤트 슬라이드 페이저 생성
  $event_pager_ul = $("<ul class='event_pager'>");
  $event_pager_li = $("<li>");
  $(".banner_box").after($event_pager_ul);
  for(i=1;i<=li_length-1;i++){
    $(".event_pager").append($event_pager_li.clone())
  }
  var event_pager = $(".event_pager li");
  $(event_pager).eq(0).addClass("on");
  // 이벤트 슬라이드 페이저 눌렀을때
  $(event_pager).click(function(){
    banner_num = $(this).index()+1
    banner.stop().animate({left:-li_width * banner_num});
    $(event_pager).removeClass();
    $(event_pager).eq($(this).index()).addClass("on");
  })
  // 이벤트 슬라이드 다음 버튼 눌렀을때 이벤트
  $(".event .next_btn").click(function(e){
    if(chk == 1 && banner_num != 0){
      chk = 0;
      banner_num = 1;
      banner.children().last().remove();
      if(banner_num == 1){
        banner.stop().css({left:-li_width});
      }
    }
    banner_num++;
    $(event_pager).removeClass();
    $(event_pager).eq(banner_num-1).addClass("on");
    banner.stop().animate({left:-li_width * banner_num});
    console.log(li_width)
    console.log(li_length+1)
    if(banner_num == li_length){
      var banner_first = banner.children().eq(1);
      banner.width(li_width * (li_length+1));
      banner.append(banner_first.clone());
      $(event_pager).eq(0).addClass("on");

      chk = 1;
    }
    return false;
  });

  // 이벤트 슬라이드 이전 버튼 눌렀을때 이벤트
  $(".event .prev_btn").click(function(e){
    if(banner_num == 0){
      banner.stop().css({left:-li_width * (li_length-1)})
      banner_num = li_length-1;
    }
      banner_num--
      $(event_pager).removeClass();
      $(event_pager).eq(banner_num-1).addClass("on");
      banner.stop().animate({left:-li_width * banner_num});
    return false;
  });

  // 이벤트 슬라이드 자동
  var banner_interval = setInterval(function(){
    if(chk == 1 && banner_num != 0){
      chk = 0;
      banner_num = 1;
      banner.children().last().remove();
      if(banner_num == 1){
        banner.stop().css({left:-li_width});
      }
    }
    banner_num++;
    $(event_pager).removeClass();
    $(event_pager).eq(banner_num-1).addClass("on");
    banner.stop().animate({left:-li_width * banner_num});
    if(banner_num == li_length){
      var banner_first = banner.children().eq(1);
      banner.width(li_width * (li_length+1));
      banner.append(banner_first.clone());
      $(event_pager).eq(0).addClass("on");
      chk = 1;
    }
  },4000);

  // 이벤트 슬라이드 마우스 올리면 멈춤 / 다시시작
  $(".b-box, .event .prev_btn, .evnet .next_btn").hover(function(){
    clearInterval(banner_interval);
  },function(){
    banner_interval = setInterval(function(){
      if(chk == 1 && banner_num != 0){
        chk = 0;
        banner_num = 1;
        banner.children().last().remove();
        if(banner_num == 1){
          banner.stop().css({left:-li_width});
        }
      }
      banner_num++;
      $(event_pager).removeClass();
      $(event_pager).eq(banner_num-1).addClass("on");
      banner.stop().animate({left:-li_width * banner_num});
      if(banner_num == li_length){
        var banner_first = banner.children().eq(1);
        banner.width(li_width * (li_length+1));
        banner.append(banner_first.clone());
        $(event_pager).eq(0).addClass("on");
        chk = 1;
      }
    },4000);
  })

 // 배경영역 리사이징
 $(window).resize(function(){
  $(".banner_box").width($(window).width());
  $(".banner_box > ul li").width($(window).width());
  banner.width(li_width * (li_length+1)).css({left:-$(window).width()*(banner_num)})
  })





  // 추천
  var recomm = $(".recomm .recomm_box > ul");
  var re_li_width = $(".recomm_box > ul li").width();
  var re_li_length = $(recomm).children().length;
  var recomm_num = 0;
  recomm.width((re_li_width * re_li_length)+(21 * re_li_length));
  $(".recomm .prev_btn").css({opacity:0});

  $(".recomm .next_btn").click(function(e){
    if(recomm_num == re_li_length-3){
      return false;
    }
    recomm_num++;
    // 버튼 사라짐 나타남
    if(recomm_num >= re_li_length-3){
      $(".recomm .next_btn").animate({opacity:0});
      $(".recomm .prev_btn").animate({opacity:0.7},200);
    }else{
      $(".recomm .prev_btn").animate({opacity:0.7},200);
    }
    recomm.stop().animate({left:(-re_li_width * recomm_num) - (20 * recomm_num)});
    return false;
  })
  
  $(".recomm .prev_btn").click(function(e){
    if(recomm_num == 0){
      return false;
    }
    recomm_num--;
    // 버튼 사라짐 나타남
    if(recomm_num <= 0){
      $(".recomm .prev_btn").animate({opacity:0});
      $(".recomm .next_btn").animate({opacity:0.7},200);
    }else{
      $(".recomm .next_btn").animate({opacity:0.7},200);
    }
    recomm.stop().animate({left:(-re_li_width * recomm_num) + (20 * recomm_num)});
    return false;
  })


  // 맛집 사진바꾸기

  $(".food_sub a").click(function(){
    var is = $(this).children().attr("src");
    var ia = $(this).children().attr("alt");
    var im = $(".food_main").children().attr("src");
    var ima = $(".food_main").children().attr("alt");
    $(this).children("span").text(ima);
    $(this).children().css({opacity:0}).stop().attr({"src": im, "alt":ima}).animate({opacity:1});
    $(".food_main img").css({opacity:0}).stop().attr({"src":is, "alt":ia}).animate({opacity:1});

    $(".food_main").attr("tabindex", -1).focus();
    setTimeout(function(){
      $(".food_main").blur();
    },2500)
    return false;
  })


  // 플로팅 네비 없어지게
  if($(window).width() <= 1680){
    $(".floating-bar").fadeOut();
  }else{
    $(".floating-bar").fadeIn();
  }
  $(window).resize(function(){
    if($(window).width() <= 1680){
      $(".floating-bar").fadeOut();
    }else{
      $(".floating-bar").fadeIn();
    }
  })
  

  // 광고등록
  $(".ad_box").click(function(){
    alert("신규 업체 가입 문의는 고객센터 (1544-4087) 로 연락해주세요");
    return false;
  })
  
 //  플로팅 네비
 var app_toggle = 0;
 $(".f-app").click(function(){
   console.log(app_toggle)
  if(app_toggle == 0){
    app_toggle = 1;
    $(".app_download").stop().animate({width: 321.5, left: -321.5, opacity: 1},400)
    return false;
  }else{
    app_toggle = 0;
    $(".app_download").stop().animate({width: 70, left: 5, opacity: 0},400)
    return false;
  }
})
$(window).scroll(function(){
  if(parseInt($(".app_download").css("left")) < 0){
    app_toggle = 0;
    $(".app_download").stop().animate({width: 70, left: 5, opacity: 0},400)
  }
})


    

})