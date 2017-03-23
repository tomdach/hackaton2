

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
