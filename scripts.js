

$(document).ready(function(){
  setInterval(niceAnime,1000);
});
function niceAnime(){
        var div = $("#awesomeAnimation");
        var buy = $("#coolBuy");
          div.animate({left: '20%'}, "slow");
          buy.animate({fontSize: '42'}, "slow");
          buy.animate({fontSize:'toggle'}, "fast");
          div.animate({left: '-20%'}, "slow");

        }
