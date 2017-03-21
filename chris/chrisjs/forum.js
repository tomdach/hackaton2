
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

   var her1 = document.getElementById("nom1");
  var her = document.getElementById("message");
  var sub = document.getElementById('submit');
  var i = 0;

   sub.onclick = click;
   function click(){

     var message= document.getElementById("mess").value;
     var nom1 =document.getElementById("nom").value;
        her.innerHTML += '</br>'+message;
        her1.innerHTML += '</br>'+nom1;
    }
