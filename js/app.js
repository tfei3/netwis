
/* Page style: page margin relative to height of fixed header */
var $header_height = $( ".header").height();
$( "html").css("height", $(window).height() - $header_height); 
$( "body").css("margin-top", $header_height);

$('.expandable_naration').find('h4').addClass('expanded_content');
$('.expandable_naration').find('h4')
  .click( function(event) {
      if (this == event.target) {
          $(this).toggleClass('expanded_content_active');
          $(this).next('div').toggle('medium');
      }
      return false;
  })
  .next('div').hide();

$('.collapse-button').click( function(event) {
  $(this).parent('div').toggle('medium');
  $(this).parent('div').prev('h4').toggleClass('expanded_content_active');
});


var pos;
function MenuItemPosition() {
  //Set the position of circles on menu
  var pos = $(".item-menu:nth-child(1)").offset();
  var percentage = 0.2;
  var d = $(".menu").width() * percentage; 
  if ($(window).width() > 1024) {     
    $(".item-menu:nth-child(1)").offset({ top: pos.top, left: pos.left });
    $(".item-menu:nth-child(2)").offset({ top: pos.top+d, left: pos.left+1.8*d });
    $(".item-menu:nth-child(3)").offset({ top: pos.top+2*d, left: pos.left });
    $(".item-menu:nth-child(4)").offset({ top: pos.top+3*d, left: pos.left+1.8*d });
    $(".item-menu:nth-child(5)").offset({ top: pos.top+4*d, left: pos.left });
  }
  if ($(window).width() < 1025) {
    var circleWidth = $(".item-menu .circle-text").width();
    $(".item-menu .circle-text div").css("font-size",0.6*circleWidth);
    $(".item-menu .circle-text div").css("padding",0.2*circleWidth);

    $(".item-menu:nth-child(1)").offset({ top: pos.top, left: pos.left });
    $(".item-menu:nth-child(2)").offset({ top: pos.top+circleWidth, left: pos.left });
    $(".item-menu:nth-child(3)").offset({ top: pos.top+2*circleWidth, left: pos.left });
    $(".item-menu:nth-child(4)").offset({ top: pos.top+3*circleWidth, left: pos.left });
    $(".item-menu:nth-child(5)").offset({ top: pos.top+4*circleWidth, left: pos.left });

    $(".item-menu:nth-child(1) .sub-menu").offset({ top: $(".item-menu:nth-child(1) .sub-menu").offset().top-circleWidth,  left: pos.left+circleWidth });
    $(".item-menu:nth-child(3) .sub-menu").offset({ top: $(".item-menu:nth-child(3) .sub-menu").offset().top-circleWidth,  left: pos.left+circleWidth });
    
    $(".item-menu .sub-menu").hide();
    $(".item-menu:nth-child(1) >a").removeAttr("href");
    $(".item-menu:nth-child(3) >a").removeAttr("href");
    
    $('.item-menu').on("click", function()
    {
      $(this).find( ".sub-menu" ).toggle();
      $('.menu').children().not($(this)).find( ".sub-menu" ).hide();
    });
  }
  return false;
};
  
MenuItemPosition();

$( window ).resize(function() {
  MenuItemPosition();
});


$('item-menu circle-text').flowtype({
 minimum   : 500,
 maximum   : 1200,
 minFont   : 10,
 maxFont   : 14,
 fontRatio : 30
});

//Set the position of logos of external links on left panel
$(".logos-left >div").offset({ top: $(window).height()-$(window).height()*0.28 });
$(".logos-left").css("z-index","200");



