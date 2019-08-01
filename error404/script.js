$('.textglitch').hover(function(){
  var eLtext = $(this).text(),
      eLchild = $(this).find('.textglitch-link');
  console.log(eLchild);
  eLchild.attr('data-content', eLtext);
  eLchild.toggleClass('blur');
  $(this).toggleClass('active');
});

$('.textglitch').mouseleave(function(){
    var eLtext = $(this).text(),
        eLchild = $(this).find('.textglitch-link');
    console.log(eLchild);
    eLchild.attr('data-content', eLtext);
    eLchild.toggleClass('blur');
    $(this).toggleClass('active');
  });

  $('.textglitch').click(function(){
    var eLtext = $(this).text(),
        eLchild = $(this).find('.textglitch-link');
    console.log(eLchild);
    eLchild.attr('data-content', eLtext);
    eLchild.toggleClass('blur');
    $(this).toggleClass('active');
  });

function buttonOn() {
    document.getElementById("text-glitch").style.visibility ="visible" ;
}



setTimeout (function arrowOn() {
  document.getElementById("arrow").style.opacity="1";
}, 5000);