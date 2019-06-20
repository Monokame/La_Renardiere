var itab = 0;
var blockScroll = true;
var valueScroll = document.getElementById("result");
var parents = document.getElementById("parent");
var btns = parents.getElementsByClassName("btn");
var section = document.getElementById("result");

function blockSection(block, none1,none2,none3,id,itabValue) {
  document.getElementById(none1).style.display = "none";
  document.getElementById(none2).style.display = "none";
  document.getElementById(none3).style.display = "none";
  document.getElementById(block).style.display = "block";
  scroll(id);
  itab= itabValue;
}

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

  if (itab > 11) {
    itab = 11;
  }
  switch (itab) {
    case 0:
      blockSection('home', 'formInscription', 'result', 'formContact', 0, 0);
      break;
    case 3:
      blockSection('formInscription', 'home', 'result', 'formContact', 1, 3);
      break;
    case 7:
      blockSection('result', 'home', 'formInscription', 'formContact', 2, 7);
      break;
    case 11:
      blockSection('formContact', 'home', 'result', 'formInscription', 3, 11);
      break;
  }
blockScroll=true;
})
