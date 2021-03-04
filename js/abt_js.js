var f1=0, f2=0;

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {

    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {

        if(f1==0)
        {
        const left2 = document.querySelector("#left2");
        const right2 = document.querySelector("#right2");

        const  t2 = new TimelineMax();
        t2.fromTo(left2 , 0.7, { x :"-100%", opacity: "0.1"}, {x :"0%", opacity: "1", ease: Power2.easeInOut})
        .fromTo(right2 , 0.7 , { x :"200%",opacity: "0.1"}, {x :"0%", opacity: "1",ease: Power2.easeInOut}, "-=0.5");

        f1=1;
        }
    }

    if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {

        if(f2==0)
        {
        const left3 = document.querySelector("#left3");
        const right3 = document.querySelector("#right3");

        const  t3 = new TimelineMax();
        t3.fromTo(left3 , 0.7, { x :"-100%", opacity: "0.1"}, {x :"0%", opacity: "1", ease: Power2.easeInOut})
        .fromTo(right3 , 0.7 , { x :"200%",opacity: "0.1"}, {x :"0%", opacity: "1",ease: Power2.easeInOut}, "-=0.5");

        f2=1;
        }
    }
}

jQuery(document).ready(function(){
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
      });

    const left1 = document.querySelector("#left1");
    const right1 = document.querySelector("#right1");

    const  t1 = new TimelineMax();
    t1.fromTo(left1 , 0.7, { x :"-100%", opacity: "0.1"}, {x :"0%", opacity: "1", ease: Power2.easeInOut})
    .fromTo(right1 , 0.7 , { x :"200%",opacity: "0.1"}, {x :"0%", opacity: "1",ease: Power2.easeInOut}, "-=0.5");

});

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