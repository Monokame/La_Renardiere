var itab = 0;
var blockScroll = true;
var valueScroll = document.getElementById("result");
var parents = document.getElementById("parent");
var btns = parents.getElementsByClassName("btn");
var section = document.getElementById("result");
var sections = document.getElementsByTagName("section")

function test(param) { 
  for (let i = 0; i < sections.length; i++) {
    if(i==param){
      sections[i].setAttribute("style","display: block;")
      scroll(i);
      itab = i*4;
    }
    else
      sections[i].removeAttribute("style")
  }
 }

$(function(){
  $('#phone').bind('input', function () {
    $(this).val(function(_, v){
      return v.replace(/\s+/g, '');
    });
  });
})

function scroll(index) {
  for (let i = 0; i < btns.length; i++) {
    if (i == index)
      btns[i].className = "btn active";
    else
      btns[i].className = "btn"
  }
}

section.addEventListener('wheel',()=>{
  blockScroll = false;
});

document.addEventListener('wheel', (e) => {

  if (blockScroll)
    if (e.deltaY > 0) {
      itab++;
    }
    else if (e.deltaY < 0) {
      itab--;
    }
  if (itab < 0) {
    itab = 0;
  }
  if (itab > 12) {
    itab = 12;
  }
  switch (itab) {
    case 0:
      test(0);
      break;
    case 4:
      test(1);
      break;
    case 8:
      test(2);
      break;
    case 12:
      test(3);
      break;
  }
blockScroll=true;
})
