var itab = 0;

function test() {
  document.getElementById('formInscription').style.display = "none";
  document.getElementById('result').style.display = "none";
  document.getElementById('formContact').style.display = "none";
  document.getElementById('home').style.display = "block";
}

function test2() {
  document.getElementById('home').style.display = "none";
  document.getElementById('result').style.display = "none";
  document.getElementById('formContact').style.display = "none";
  document.getElementById('formInscription').style.display = "block";
}

function test3() {
  document.getElementById('home').style.display = "none";
  document.getElementById('formInscription').style.display = "none";
  document.getElementById('formContact').style.display = "none";
  document.getElementById('result').style.display = "block";
}

function test4() {
  document.getElementById('home').style.display = "none";
  document.getElementById('formInscription').style.display = "none";
  document.getElementById('result').style.display = "none";
  document.getElementById('formContact').style.display = "block";
}

document.addEventListener('wheel', (e) => {
  if (e.deltaY > 0) {
    itab++;
  } else if (e.deltaY < 0) {
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
      test();
      break;
    case 3:
      test2();
      break;
    case 7:
      test3();
      break;
    case 11:
      test4();
      break;
  }

})