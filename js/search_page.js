$(function(){
  
  // 지역 검색창 온오프
  $("#search-local").click(function(){
    $("#search-local-bg").stop().fadeToggle(200);
    $("#depth1 li a, .depth2, .depth3").removeClass("on")
    return false;
  })
  $(document).mouseup(function (e){
    if($(e.target).closest("#search-local-bg").length === 0){
      $(".search-local-bg").fadeOut(200);
    }
  });

  // 지역선택 창 동작~
  // depth1
  $("#depth1 > li > a").click(function(){
    $("#depth1 li a").removeClass("on")
    $(".depth2").removeClass("on");
    $(this).addClass("on")
    $(this).next("ul").addClass("on");
    return false;
  })
  // depth2
  $(".depth2 > li > a").click(function(){
    $(".depth2 > li > a").removeClass("on");
    $(".depth3").removeClass("on")
    $(this).addClass("on")
    $(this).next("dl").addClass("on");
    return false;
  })
  // depth3 클릭 시 해당 값 여행지선택(input)에 넣기
  $(".depth3 a").click(function(){
    var depth2 = $(this).closest("dl").prev()
    var depth1 = depth2.closest("ul").prev();
    $("#search-local").val($(this).text());
    $("#search-local-bg").stop().fadeOut();
    $("#local_city").val(depth2.text());
    $("#local_type").val(depth1.text());
    return 
  })

  
  // 날짜선택 ( daterangepicker 사용)
  // 체크아웃 날짜 눌렀을때 달력 나오게
  
  $("#date_2").stop().click(function(){
    if($(".daterangepicker").css("display") != "block"){
      $("#date_1").click()
    }
  })
  // 체크인을 선택했을때 동작
  var date = new Date();
  $("#date_1").daterangepicker({
    autoUpdateInput: false,
    startDate: date,
    "minDate": date,
    "locale":{
      "separator":" ",
      "fromLabel":"From",
      // "customRagneLabel":"Custom",
      "daysOfWeek":["일","월","화","수","목","금","토"],
      "month": ["YYYY MM"],
      "monthNames": ["1월","2월","3월","4월","5월","6월","7월","8월","9월","10월","11월","12월"]
    },
    autoApply: true,
  })
  // 체크아웃을 선택했을때 동작
  $("#date_1, #date_2").on('apply.daterangepicker', function(ev, picker) {
    var startDay = picker.startDate.year()+(picker.startDate.month()+1)+picker.startDate.date();
    var endDay = picker.endDate.year()+(picker.endDate.month()+1)+picker.endDate.date();
    $("#date1_value").val(picker.startDate.format('YYYY-MM-DD'));
    $("#date2_value").val(picker.endDate.format('YYYY-MM-DD'));
    $("#date_1").val(picker.startDate.format('MM월 DD일'));
    $("#date_2").val(picker.endDate.format('MM월 DD일'));
    $("#day").val(endDay - startDay);
  });

  //인원 선택
  var adult = 0;
  var kids = 0;
  $("#adult_minus").click(function(){
    if(adult > 0)
      $("#adult").val(--adult);
    console.log($("#adult").val());
  })
  $("#adult_plus").click(function(){
    if(adult < 20)
      $("#adult").val(++adult);
    console.log(adult);
    console.log($("#adult").val());
  })
  $("#kids_minus").click(function(){
    if(kids > 0)
      $("#kids").val(--kids);
  })
  $("#kids_plus").click(function(){
    if(kids < 20)
      $("#kids").val(++kids);
  })

  // submit할때 날짜값 두개 전송되는거 막기
  $("#search-btn").click(function(){
    $("#date_1, #date_2").prop("disabled","disabled")
  })
})
