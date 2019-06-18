var itab = 0;
var blockScroll = true;
var valueScroll = document.getElementById("result");
var parents = document.getElementById("parent");
var btns = parents.getElementsByClassName("btn");
var section = document.getElementById("result");

function blockHome() {
  document.getElementById('formInscription').style.display = "none";
  document.getElementById('result').style.display = "none";
  document.getElementById('formContact').style.display = "none";
  document.getElementById('home').style.display = "block";
  scroll(0);
}

function blockInscription() {
  document.getElementById('home').style.display = "none";
  document.getElementById('result').style.display = "none";
  document.getElementById('formContact').style.display = "none";
  document.getElementById('formInscription').style.display = "block";
  scroll(1);
}

function blockResult() {
  document.getElementById('home').style.display = "none";
  document.getElementById('formInscription').style.display = "none";
  document.getElementById('formContact').style.display = "none";
  document.getElementById('result').style.display = "block";
  scroll(2);
}

function blockContact() {
  document.getElementById('home').style.display = "none";
  document.getElementById('formInscription').style.display = "none";
  document.getElementById('result').style.display = "none";
  document.getElementById('formContact').style.display = "block";
  scroll(3);
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
      blockHome();
      break;
    case 3:
      blockInscription();
      break;
    case 7:
      blockResult();
      break;
    case 11:
      blockContact();
      break;
  }
blockScroll=true;
})
