
  var chaine = "bienvenue sur le forum de la promo 2";
  var nb_car = chaine.length;
  var tableau = chaine.split("");
  texte = new Array;
  var txt = '';
  var nb_msg = nb_car - 1;
  for (i=0; i<nb_car; i++) {
  texte[i] = txt+tableau[i];
  var txt = texte[i];
  }

  actual_texte = 0;
  function changeMessage()
  {
  document.getElementById("forum").innerHTML = texte[actual_texte];
  actual_texte++;
  if(actual_texte >= texte.length)
  actual_texte = nb_msg;
  }
  if(document.getElementById)

  setInterval("changeMessage()",50) /* la vitesse de defilement (plus on a une valeur faible plus
  texte s'affiche rapidement) */
////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////

var chaine1 = "SIMPLON PROMO2";
  var nb_car1 = chaine1.length;
  var tableau1 = chaine1.split("");
  texte1 = new Array;
  var txt1 = '';
  var nb_msg1= nb_car1 - 1;
  for (i=0; i<nb_car1; i++) {
  texte1[i] = txt1+tableau1[i];
  var txt1 = texte1[i];
  }

  actual_texte1 = 0;
  function changeMessage1()
  {
  document.getElementById("tee").innerHTML = texte1[actual_texte1];
  actual_texte1++;
  if(actual_texte1 >= texte1.length)
  actual_texte1 = nb_msg1;
  }
  if(document.getElementById)

  setInterval("changeMessage1()",200) /* la vitesse de defilement (plus on a une valeur faible plus
  texte s'affiche rapidement) */
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
var images = new Array();
images.push("img/eco.jpg");
images.push("img/eco2.jpg");
images.push("img/eco.jpg");

var pointeur = 0;

function ChangerImage(){
document.getElementById("superimage").src = images[pointeur];

if(pointeur < images.length - 1){
pointeur++;
}
else{
pointeur = 0;
}

setTimeout("ChangerImage()", 4000)
}

// Charge la fonction
window.onload = function(){
ChangerImage();

}
/////////////////////////////////////////////
var images1 = new Array();
images1.push("img/eco2.jpg");
images1.push("img/eco.jpg");
images1.push("img/eco2.jpg");

var pointeur1 = 0;

function ChangerImage1(){
document.getElementById("superimage2").src = images1[pointeur1];

if(pointeur1 < images1.length - 1){
pointeur1++;
}
else{
pointeur1 = 0;
}

setTimeout("ChangerImage1()", 4000)
}

// Charge la fonction
window.onload= function(){
ChangerImage1();
ChangerImage();
}
