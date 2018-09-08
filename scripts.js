function validateForm() {
    var x = document.forms["inputForm"]["kidFname"].value;
    var y = document.forms["inputForm"]["carerFname"].value;
    if (x == "" && y == "") {
        document.getElementsByName("kidFname")[0].placeholder="You missed this one, mate!";
        document.getElementsByName("carerFname")[0].placeholder="You missed this one, mate!";
        return false;
    } else if (y == ""){
      document.getElementsByName("carerFname")[0].placeholder="You missed this one, mate!";
      return false;
    } else if (x == ""){
      document.getElementsByName("kidFname")[0].placeholder="You missed this one, mate!";
      return false;
    }
  }
/*
    if (x == "") {
        document.getElementsByName("kidFname")[0].placeholder="You missed this one, mate!";
        return false;
    }
    if (y == "")
      document.getElementsByName("carerFname")[0].placeholder="You missed this one, mate!";
      return false;
   }
*/
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
