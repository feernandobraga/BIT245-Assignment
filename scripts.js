function validateForm() {
    var x = document.forms["inputForm"]["childFirstName"].value;
    var y = document.forms["inputForm"]["carerFamilyName"].value;
    if (x == "" && y == "") {
        document.getElementsByName("childFirstName")[0].placeholder="You missed this one, mate!";
        document.getElementsByName("carerFamilyName")[0].placeholder="You missed this one, mate!";
        return false;
    } else if (y == ""){
      document.getElementsByName("carerFamilyName")[0].placeholder="You missed this one, mate!";
      return false;
    } else if (x == ""){
      document.getElementsByName("childFirstName")[0].placeholder="You missed this one, mate!";
      return false;
    }
  }

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
