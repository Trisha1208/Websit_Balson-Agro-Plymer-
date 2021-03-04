jQuery(document).ready(function(){
  $(".dropdown").hover(
      function() { $('.dropdown-menu', this).stop().fadeIn("fast");
      },
      function() { $('.dropdown-menu', this).stop().fadeOut("fast");
    });

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

var flag1=0, flag2=0, flag3=0, flag4=0,flag5=0; 
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;

  if (document.body.scrollTop > 320 || document.documentElement.scrollTop > 320) {
    
    if(flag1==0)
    {
      const first = document.querySelector("#first");
      const second = document.querySelector("#second");
      const third = document.querySelector("#third");
      const fourth = document.querySelector("#fourth");
      const  t1 = new TimelineMax();
      t1.fromTo(first , 0.5, { y :"50%", opacity: "0.1"}, {y :"0%", opacity: "1", ease: Power2.easeInOut})
      .fromTo(second , 0.5 , { y :"50%",opacity: "0.1"}, {y :"0%", opacity: "1",ease: Power2.easeInOut}, "-=0.3")
      .fromTo(third , 0.5, { y :"50%",opacity: "0.1"}, {y :"0%", opacity: "1",ease: Power2.easeInOut},"-=0.3")
      .fromTo(fourth , 0.5, { y :"50%", opacity: "0.1"}, {y :"0%",opacity: "1", ease: Power2.easeInOut},"-=0.3");
      
        flag1=1;
    }
  }

  if(document.body.scrollTop > 900 || document.documentElement.scrollTop > 900){

    if(flag2==0)
    { 
      
        const btn_anim_1 = document.querySelector("#btn-anim-1");
        const map_text = document.querySelector(".map-text");
       
        const img_anim = document.querySelector("#img-anim");
        const t2 = new TimelineMax();
        t2.fromTo(img_anim , 1, { opacity:"0" }, { opacity:"1" , ease: Power2.easeInOut})
        .fromTo(map_text, 1, { opacity: "0" }, {opacity : "1", ease: Power2.easeInOut}, "-=1")
        .fromTo(btn_anim_1, 0.7, {y: "50%", opacity: "0" }, {y:"0%",opacity : "1", ease: Power2.easeInOut});
        
        flag2=1;
      

    }
  }

  if(document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200){

    if(flag3==0)
    { 
        const bro_btn  = document.querySelector("#bro-btn-anim");
        const t3 = new TimelineMax();
        t3.fromTo(bro_btn, 1, {y: "50%", opacity: "0" }, {y:"0%",opacity : "1", ease: Power2.easeInOut},"+=0.5");

        flag3=1;
    }
  }

  if(document.body.scrollTop >  1700 || document.documentElement.scrollTop > 1700 ){

    if(flag4==0)
    { 
        const circle1  = document.querySelector("#cir-anim-1");
        const circle2  = document.querySelector("#cir-anim-2");
        const circle3  = document.querySelector("#cir-anim-3");
        const t4 = new TimelineMax();
        t4.fromTo(circle1, 1, {opacity: "0" }, {opacity : "1", ease: Power2.easeInOut})
        .fromTo(circle2, 1, {opacity: "0" }, {opacity : "1", ease: Power2.easeInOut}, "-=1")
        .fromTo(circle3, 1, {opacity: "0" }, {opacity : "1", ease: Power2.easeInOut}, "-=1");
        
        flag4=1;
    }
  }
  if(document.body.scrollTop >  2500 || document.documentElement.scrollTop > 2500 ){

    if(flag5==0)
    { 
        const col1  = document.querySelector("#col-anim-1");
        const col2  = document.querySelector("#col-anim-2");
        const col3  = document.querySelector("#col-anim-3");
        const t4 = new TimelineMax();
        t4.fromTo(col2, 1, { y : "50% " , opacity: "0" }, { y : "0%",  opacity : "1", ease: Power2.easeInOut},"+=0.2")
        .fromTo(col3, 1, {  y : "50% " , opacity: "0" }, { y : "0%",opacity : "1", ease: Power2.easeInOut},"-=0.5" )
        .fromTo(col1, 1, { y : "50% " ,opacity: "0" }, { y : "0%",opacity : "1", ease: Power2.easeInOut},"-=1" );

              
        $(function() {
          function e_count($this){
              var current = parseInt($this.html(), 10);
              $this.html(++current);
              if(current !== $this.data('e_count')){
                  setTimeout(function(){e_count($this)}, 70);
              }
          }        
        $(".e-count").each(function() {
            $(this).data('e_count', parseInt($(this).html(), 10));
            $(this).html('0');
            e_count($(this));
          });
        });


        $(function() {
          function q_count($this){
              var current = parseInt($this.html(), 10);
              $this.html(++current);
              if(current !== $this.data('q_count')){
                  setTimeout(function(){q_count($this)}, 30);
              }
          }        
        $(".q-count").each(function() {
            $(this).data('q_count', parseInt($(this).html(), 10));
            $(this).html('0');
            q_count($(this));
          });
        });

        $(function() {
          function c_count($this){
              var current = parseInt($this.html(), 10);
              $this.html(++current);
              if(current !== $this.data('c_count')){
                  setTimeout(function(){c_count($this)}, 5);
              }
          }        
        $(".c-count").each(function() {
            $(this).data('c_count', parseInt($(this).html(), 10));
            $(this).html('0');
            c_count($(this));
          });
        });

  

        
        flag5=1;
    }
  }

}

  
  




var slideIndex = 0;
showSlides();
var timeId;
function plusSlides(n) {
    slideIndex = (slideIndex-1) + n;
    
    clearTimeout(timeId);
    showSlides();
}

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    else if (slideIndex < 1) {slideIndex = slides.length} 
    
    slides[slideIndex-1].style.display = "block";  
    slides[slideIndex-1].style.opacity = "1";
    timeId = setTimeout(showSlides, 7000); 
}

    


$(".testimonial-carousel").slick({
      infinite: !0,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: !1,
      arrows:true,
      prevArrow: $(".testimonial-carousel-controls .prev"),
      nextArrow: $(".testimonial-carousel-controls .next"),
      responsive: [{
          breakpoint: 1200,
          settings: {
              slidesToShow: 3
          }
      }, {
          breakpoint: 992,
          settings: {
              slidesToShow: 2
          }
      }, {
          breakpoint: 600,
          settings: {
              slidesToShow: 1
          }
      }]
  });


  

  
     
