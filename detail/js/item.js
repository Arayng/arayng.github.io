$(document).ready(function() {
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: '4',
    slidesOffsetBefore: 10,
    spaceBetween: 10,
    allowTouchMove: true,
    
    // Navigation arrows
    navigation: {
      nextEl: '.img_next_btn',
      prevEl: '.img_prev_btn',
    },
    //메인 이미지 변경
    on: {
      slideChange: function () {
        var nIndex = this.realIndex;//현재 swiper. active 된 이미지의 index 가져오기
        $('#main-slider img').attr("src",`../img/special_thum${nIndex+1}.jpg`).stop(true,true).hide().fadeIn();
      }
    }

  });
})