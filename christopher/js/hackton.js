$(window).scroll(function() {
    if ($(this).scrollTop() >= 10) {
        $('#toTop').fadeIn(200);
    } else {
        $('#toTop').fadeOut(200);
    }
});
$('#toTop').click(function() {
    $('body,html').animate({
        scrollTop : 0
    }, 500);
});
$(function(){
    $("#ActuMar").hide();
    $("#March").click(function(){
      $("#ActuMar").fadeIn();
    });
    $(function(){
      $(".quit").click(function(){
        $("#ActuMar").fadeOut();
      });
    });
});
$(function(){
    $("#ActuFeb").hide();
    $("#February").click(function(){
      $("#ActuFeb").fadeIn();
    });
    $(function(){
      $(".quit").click(function(){
        $("#ActuFeb").fadeOut();
      });
    });
});
$(function(){
    $("#ActuJan").hide();
    $("#January").click(function(){
      $("#ActuJan").fadeIn();
    });
    $(function(){
      $(".quit").click(function(){
        $("#ActuJan").fadeOut();
      });
    });
});
$(function(){
    $("#ActuDec").hide();
    $("#December").click(function(){
      $("#ActuDec").fadeIn();
    });
    $(function(){
      $(".quit").click(function(){
        $("#ActuDec").fadeOut();
      });
    });
});
$(function(){
    $("#ActuNov").hide();
    $("#November").click(function(){
      $("#ActuNov").fadeIn();
    });
    $(function(){
      $(".quit").click(function(){
        $("#ActuNov").fadeOut();
      });
    });
});
$(function(){
    $("#ActuOct").hide();
    $("#October").click(function(){
      $("#ActuOct").fadeIn();
    });
    $(function(){
      $(".quit").click(function(){
        $("#ActuOct").fadeOut();
      });
    });
});

var chaine = "Actualités : ";
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
  function changeMessage(){
    document.getElementById("test").innerHTML = texte[actual_texte];
    actual_texte++;
    if(actual_texte >= texte.length)
    actual_texte = nb_msg;
  }
 if(document.getElementById)
  setInterval("changeMessage()",1150) /* la vitesse de defilement (plus on a une valeur faible plus   texte s'affiche rapidement) */
