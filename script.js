var itab = 0;
var tabResult = document.getElementById('result');

function blockHome() {
  document.getElementById('formInscription').style.display = "none";
  document.getElementById('result').style.display = "none";
  document.getElementById('formContact').style.display = "none";
  document.getElementById('home').style.display = "block";
}

function blockInscription() {
  document.getElementById('home').style.display = "none";
  document.getElementById('result').style.display = "none";
  document.getElementById('formContact').style.display = "none";
  document.getElementById('formInscription').style.display = "block";
}

function blockResult() {
  document.getElementById('home').style.display = "none";
  document.getElementById('formInscription').style.display = "none";
  document.getElementById('formContact').style.display = "none";
  document.getElementById('result').style.display = "block";
  console.log(document.getElementById('formContact').focus())
}

function blockContact() {
  document.getElementById('home').style.display = "none";
  document.getElementById('formInscription').style.display = "none";
  document.getElementById('result').style.display = "none";
  document.getElementById('formContact').style.display = "block";
}

var parents = document.getElementById("parent");
var btns = parents.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var actif = document.getElementsByClassName("active");
    actif[0].className = actif[0].className.replace(" active","");
    this.className +=" active";
  });
}

function hover() {
  tabResult.addEventListener('mouseover',()=>{
    console.log("azert")
  })
  return true
}

document.addEventListener('wheel', (e) => {
  if (e.deltaY > 0) {
    itab++;
  }
  else if (e.deltaY < 0) {
    itab--;
  }
  // else if ((e.deltaY > 0) && (hover() === true) || (e.deltaY) < 0 && (hover() === true)){
  //   console.log("test")
  // }

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

})
