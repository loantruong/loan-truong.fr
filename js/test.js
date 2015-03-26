/*$(document).ready(function(){
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
});*/



jQuery(function($){

  var settings = {
    thumbListId: "thumbs",
    imgViewerId: "viewer",
    activeClass: "active",
    activeTitle: "Photo en cours de visualisation"
  };

  var thumbLinks = $("#"+settings.thumbListId).find("a"),
    firstThumbLink = thumbLinks.eq(0),
    highlight = function(elt){
      thumbLinks.removeClass(settings.activeClass).removeAttr("title");
      elt.addClass(settings.activeClass).attr("title",settings.activeTitle);
    };

  highlight(firstThumbLink);

  $("#"+settings.thumbListId).before(
    $(document.createElement("p"))
      .attr("id",settings.imgViewerId)
      .append(
        $(document.createElement("img")).attr({
          alt: "",
          src: firstThumbLink.attr("href")
        })
      )
  );

  var imgViewer = $("#"+settings.imgViewerId),
    bigPic = imgViewer.children("img");

  thumbLinks
    .click(function(e){
      e.preventDefault();
      var $this = $(this),
        target = $this.attr("href");
      if (bigPic.attr("src") == target) return;
      highlight($this);
      bigPic
        .attr("src",target);
    });

});

