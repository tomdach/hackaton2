function click(){
     document.getElementById("montreuil").innerHTML = "";


  }

var chaine = "SIMPL<span>O</span>N MONTREUIL ";

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
document.getElementById("montreuil").innerHTML = texte[actual_texte];
actual_texte++;
if(actual_texte >= texte.length)
actual_texte = nb_msg;
}
if(document.getElementById)

setInterval("changeMessage()",200) /* la vitesse de defilement (plus on a une valeur faible plus
texte s'affiche rapidement) */
/*###########################################################*/
var theText = "NOUS CONTACTER";

//fonction qui retourne la taille d'un caractère du texte et sa position
//pour changer la taille du texte, modifiez le nombre "72" par ce que vous voulez
function nextSize(i,textLength)
{
  return (72*Math.abs( Math.sin(i/(textLength/3.14))));
}

//fonction qui qui fait changer la taille des caractères au fur et à mesure
function sizeCycle(text,dis)
{
  output = "";
  for(i=0;i<text.length;i++)
  {
    size = parseInt(nextSize(i+dis,text.length));
    output += "<font style='font-size: "+ size +"pt'>"+text.substring(i,i+1)+"</font>";
  }
  document.getElementById('deco').innerHTML = output;
}

//fonction pour l'animation finale
function doWave(n)
{
  sizeCycle(theText,n);
  if(n > theText.length)n=0;
  setTimeout("doWave(" + (n+1) + ")", 300);
}
