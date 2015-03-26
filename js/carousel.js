$(document).ready(function(){
  $("#galerie_big img").hide();
  $("#img1").show();
  $("#galerie a").click(function(){

    if($("#" + this.rel).is(":hidden"))
      {
        $("#galerie_big img").hide();
        $("#" + this.rel).show();
      }
    return false;
        
  });
});

$(document).ready(function(){
  $("#galerie_big2 img").hide();
  $("#mini1").show();
  $("#galerie2 a").click(function(){

    if($("#" + this.rel).is(":hidden"))
      {
        $("#galerie_big2 img").hide();
        $("#" + this.rel).show();
      }
      return false;
    
  });
});