var accueil = document.getElementById('accueil');
var inscription = document.getElementById('inscription');
var parcours = document.getElementById('parcours');
var contact = document.getElementById('contact');
var titre = document.getElementById('titre');
var footer = document.getElementById('footer');
var img = document.getElementsByClassName('image');
var suivant = document.getElementById('suivant');

window.onload = () => {
  accueil.onclick = () => {
    document.getElementById('formInscription').style.display = "none";
    document.getElementById('result').style.display = "none";
    document.getElementById('formContact').style.display = "none";
    document.getElementById('home').style.display = "block";
    document.getElementById('parcours-image').style.display = "none";
  };

  contact.onclick = () => {
    document.getElementById('home').style.display = "none";
    document.getElementById('formInscription').style.display = "none";
    document.getElementById('result').style.display = "none";
    document.getElementById('formContact').style.display = "block";
    document.getElementById('parcours-image').style.display = "none";
  };

  inscription.onclick = () => {
    document.getElementById('home').style.display = "none";
    document.getElementById('result').style.display = "none";
    document.getElementById('formContact').style.display = "none";
    document.getElementById('formInscription').style.display = "none";
    document.getElementById('parcours-image').style.display = "block";
  };

  parcours.onclick = () => {
    document.getElementById('home').style.display = "none";
    document.getElementById('formInscription').style.display = "none";
    document.getElementById('formContact').style.display = "none";
    document.getElementById('result').style.display = "block";
    document.getElementById('parcours-image').style.display = "none";
  };

  titre.onclick = () => {
    document.getElementById('formInscription').style.display = "none";
    document.getElementById('result').style.display = "none";
    document.getElementById('formContact').style.display = "none";
    document.getElementById('home').style.display = "block";
    document.getElementById('parcours-image').style.display = "none";
  };

  suivant.onclick = () =>{
    document.getElementById('home').style.display = "none";
    document.getElementById('formInscription').style.display = "block";
    document.getElementById('formContact').style.display = "none";
    document.getElementById('result').style.display = "none";
    document.getElementById('parcours-image').style.display = "none";
  }
};

for (let i = 0; i < img.length; i++) {
  img[i].onmouseover = () => {

    imageMouseOn(img[i]);
  };
  img[i].onmouseout = () => {
    imageMouseOff(img[i]);
  };
  img[i].onclick = () => {
    let num = i;
    //img[i].style.border = 'solid 2px #48dbfb';
  };
};

function imageMouseOn(div) {
  div.style.transform = 'scale(1.05)';
  div.style.border = 'solid 2px #48dbfb';
};

function imageMouseOff(div) {
  div.style.transform = 'scale(1)';
  div.style.border = '';
};

