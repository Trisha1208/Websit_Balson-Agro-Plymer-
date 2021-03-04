$(window).scroll(function () {
  if(window.matchMedia("(min-width: 670px)").matches) {
    if ($(window).scrollTop() >= 50) {
      $('#topbar').css('display', 'none');
      $('.navbar').css('min-height', '100px');
    }
    else {
      $('#topbar').css('display', 'block');
      $('.navbar').css('min-height', '150px');
    }
  }
});

jQuery(document).ready(function(){
$(".dropdown").hover(
    function() { $('.dropdown-menu', this).stop().fadeIn("fast");
    },
    function() { $('.dropdown-menu', this).stop().fadeOut("fast");
  });
});

   
function openNav() {
  if(window.matchMedia("(min-width: 768px)").matches) {
    $('.sidenav').css('width', '400px');
    $('.mini-side').css('visibility', 'hidden');
  }
  else{
    $('.sidenav').css('width', '300px');
    $('.mini-side').css('visibility', 'hidden');
  }
}

function closeNav() {
  $('.sidenav').css('width', '0px');
  $('.mini-side').css('visibility', 'visible');
}
      
