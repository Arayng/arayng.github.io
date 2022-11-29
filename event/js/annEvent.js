$(function(){
  $(".list_que").click(function(){
    $(this).next().stop().slideToggle("fast");
    $(this).find(".drop_btn").stop().toggleClass('rotate');
    return false;
  })

  $(".del_btn").click(function(){
    var chk = confirm("정말로 삭제하시겠습니까?");
    if(chk){
      var idx = $("#ew_idx").val();
      location.href=`event_edit.php?action=w_delete&id=${idx}`;
    }
  });
})