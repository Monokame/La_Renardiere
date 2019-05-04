var accueil = document.getElementById('accueil');
var inscription = document.getElementById('inscription');
var parcours = document.getElementById('parcours');
var contact = document.getElementById('contact');
var titre = document.getElementById('titre');
var footer = document.getElementById('footer');
var img = document.getElementsByClassName('image');

window.onload = () => {

  accueil.onclick = () => {
    document.location = 'index.html';
  };

  contact.onclick = () => {
    document.location = 'contact.html';
  };

  inscription.onclick = () => {
    document.location = 'inscription.html';
  };

  parcours.onclick = () => {
    document.location = 'parcours.html';
  };

  titre.onclick = () => {
    document.location = 'index.html';
  };
};

var tab = new Array();


for (let i = 0; i < img.length; i++) {
  img[i].onmouseover = () => {
    
    imageMouseOn(img[i]);
  };
  img[i].onmouseout = () => {
    imageMouseOff(img[i]);
  };
  img[i].onmousedown = () => {
    let source = img[i].getAttribute('src');
    imageCreation(source);
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

function imageCreation(source) {
  document.location = 'parcours-info.html';
  let newImg = document.createElement('img');
  newImg.src = 'img/test1.PNG';
  newImg.className = 'image';
  document.body.appendChild(newImg);
};
