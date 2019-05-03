/*var test=document.getElementById('accueil');
test.addEventListener('click',()=>{
document.getElementById('inscription').style.display="block";
})*/
var accueil = document.getElementById('accueil');
var inscription = document.getElementById('inscription');
var parcours = document.getElementById('parcours');
var contact = document.getElementById('contact');
var titre = document.getElementById('titre');
var footer = document.getElementById('footer');

window.onload = () => {

  accueil.onclick = () => {
    document.location = 'index.html';
    footer.style.top = '100%';
  };

  contact.onclick = () => {
    document.location = 'contact.html';
    footer.style.top = '0';
  };

  inscription.onclick = () => {
    document.location = 'inscription.html';
    footer.style.top = '0';
    
    
  };

  parcours.onclick = () => {
    document.location = 'parcours.html';
    footer.style.top = '0%';
  };

  titre.onclick = () => {
    document.location = 'index.html';
    footer.style.top = '100%';
  };
};