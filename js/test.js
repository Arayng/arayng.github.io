window.onload = function(){
  var searchLocal = document.getElementById('search-local')
  var lSelect = document.getElementById('search-local-bg');
console.log(searchLocal)
searchLocal.addEventListener("click",function(){
  if(lSelect.classList.contains('on')){
    lSelect.className = "search-local-bg";
  }else{
    lSelect.className = "search-local-bg";
    lSelect.classList.add('on');
  }  
})

depth1.children.addEventListener("click",function(){
  var a = event.target;
  console.log(a);
  var c = a.nextElementSibling;
  if(!a.className){
    for(i=0;i<depth1.querySelectorAll("#depth1>li>a").length;i++){
      var b = depth1.querySelectorAll("#depth1>li>a")[i]
      b.classList.remove('on')
      b.nextElementSibling.classList.remove('on')
    }
    a.classList.add('on');
    c.classList.add('on');
  }else{
    a.classList.remove('on');
    if(a !== document.getElementById('depth1')){
      c.classList.remove('on');
    }
  }
})
  
}
// 지금 ul을 선택해서 코딩을하고있기때문에 바닐라로는 복잡하게 갈 수 밖에 없는듯
// ul > li 에게 depth1을 주고 queryselector로 배열을 만든다음에
// 클릭한 요소가 배열에 몇번째 요소인지 확인하는 작업(indexof)가 필요함 -- 이거 까먹고있었음 ㅎㅎ...
// 위에거 구한 다음에 



//그니까 지금은 depth3을 선택해도 효과가 적용되는거는 
// depth1(ul)에서 발생하는 이벤트기 때문임 depth3도 depth1안에 depth2안에 있는거기때문에 크게봤을때는 depth1임 ㅇㅋ! 이해함