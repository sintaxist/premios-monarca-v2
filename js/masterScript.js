$('#hamburguer_menu').click( function() {
  $(this).toggleClass("active");
  $('#menu-mobile').toggleClass("open");
});

$('#menu-mobile li a').click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight-5;
  $('html, body').stop().animate({
      scrollTop: offsetTop
  }, 850);
  $('#hamburguer_menu').removeClass("active");
  $('#menu-mobile').removeClass("open");
  e.preventDefault();
});

// Cache selectors
var lastId,
 topMenu = $("header"),
 topMenuHeight = topMenu.outerHeight()+1,
 // All list items
 menuItems = topMenu.find("nav a"),
 // Anchors corresponding to menu items
 scrollItems = menuItems.map(function(){
   var item = $($(this).attr("href"));
    if (item.length) { return item; }
 });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight-10;
  $('html, body').stop().animate({
      scrollTop: offsetTop
  }, 850);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight+15;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

	// Set/remove active class
	// console.log(id)
	menuItems.removeClass("active");
	$('#'+id+'-link').addClass('active')
});


$('#trigger-galeria').on('click', function(){
  appearModal1()
	return false;
});
$('#trigger-video').on('click', function(){
  appearModal2()
  return false;
});
$('#seeMap').on('click', function(){
  appearModal3()
  return false
})

$('.overlay').on('click', function(){
	$('body').removeClass('no-scroll');
	$(this).fadeOut();
	$('.modal:visible').fadeOut();
});
$('.close').on('click', function(){
	$('body').removeClass('no-scroll');
	$(this).parents('.modal').fadeOut();
	$('.overlay').fadeOut();
});

$('.trigger-aviso').on('click', function(){
	$('body').addClass('no-scroll');
	$('.overlay').fadeIn();
	$('#privacy-policy').fadeIn();
	return false;
});

function appearModal1(){
	$('#fotogaleria').fadeIn();
	$('.overlay-black').fadeIn();
}
function appearModal2(){
  $('#videomemoria').fadeIn();
  $('.overlay-black').fadeIn();
}
function appearModal3(){
  $('#mapa').fadeIn();
  $('.overlay-black').fadeIn();
}

function countdown(secondsRemaining) {

  secondsRemaining = Math.floor(secondsRemaining);

  var days = Math.floor(secondsRemaining / 86400),
    hours = Math.floor((secondsRemaining - (days * 86400)) / 3600),
    minutes = Math.floor((secondsRemaining - (days * 86400) - (hours * 3600)) / 60),
    seconds = secondsRemaining - (days * 86400) - (hours * 3600) - (minutes * 60);

  if (secondsRemaining > 0) {

    if (days < 10) { days = '0' + days; }
    if (hours < 10) { hours = '0' + hours; }
    if (minutes < 10) { minutes = '0' + minutes; }
    if (seconds < 10) { seconds = '0' + seconds; }


    secondsRemaining--;

  }

  window.setTimeout(function () {

    countdown(secondsRemaining);

  }, 1000);

  $('#contador').html(days + " d   " + hours + " h   " + minutes + " m   " + seconds + " s   ")
}

countdown(Math.floor((Date.parse('Sep 22, 2022') - new Date().getTime())/1000));

var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
    autoplay: {
      delay: 1500,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

})