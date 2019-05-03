/*var test=document.getElementById('accueil');
test.addEventListener('click',()=>{
document.getElementById('inscription').style.display="block";
})*/

//acceuil
function test(){
  document.getElementById('formInscription').style.display="none";
  document.getElementById('result').style.display="none";
  document.getElementById('formContact').style.display="none";
  document.getElementById('home').style.display="block";
  document.getElementById('footer').style.top='100%';
}

//inscription
function test2() {
  document.getElementById('home').style.display="none";
  document.getElementById('result').style.display="none";
  document.getElementById('formContact').style.display="none";
  document.getElementById('formInscription').style.display="block";
  document.getElementById('footer').style.top='0';
  
}

//parcours
function test3(){
  document.getElementById('home').style.display="none";
  document.getElementById('formInscription').style.display="none";
  document.getElementById('formContact').style.display="none";
  document.getElementById('result').style.display="block";
  document.getElementById('footer').style.top='100%';
}

//contact
function test4(){
  document.getElementById('home').style.display="none";
  document.getElementById('formInscription').style.display="none";
  document.getElementById('result').style.display="none";
  document.getElementById('formContact').style.display="block";
  document.getElementById('footer').style.top='0';
}
