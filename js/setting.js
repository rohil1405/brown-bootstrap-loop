$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 0) {
            $(".header-wrap").addClass("header-active");
           
        } else {
            $(".header-wrap").removeClass("header-active");
        }
    });
});

$(document).ready(function(){
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: '.slider-nav',
    centerMode: true
  });
  $('.slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: '.slider-for',
    focusOnSelect: true,
    // autoplay:true,
    centerMode: true,
    // autoplaySpeed:1500,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          vertical: false,
          centerMode: true,
          autoplay: true,
          autoplaySpeed: 5000
        }
      }
    ]   
  });
});


document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.querySelector('.form-control');
const searchIcon = document.querySelector('.input-group-text');

searchIcon.addEventListener('click', () => {
  if (searchInput.style.display === 'none' || searchInput.style.display === '') {
    searchInput.style.display = 'block';
  } else {
    searchInput.style.display = 'none';
  }
});
});

$(document).ready(function() {
  $(".team-member-show a").click(function(event) {
    event.preventDefault(); 

    var teamItem = $(this).closest('.our-team-item');

    teamItem.find(".show-details").toggleClass('active-details');
    teamItem.find(".close-btn").toggleClass('active-btn');
    teamItem.find(".show-team-details").toggleClass('active-team-details');
  });

  $(".close-btn").click(function(event) {
    event.preventDefault(); 

    var teamItem = $(this).closest('.our-team-item');

    teamItem.find(".show-details").removeClass('active-details');
    teamItem.find(".close-btn").removeClass('active-btn');
    teamItem.find(".show-team-details").removeClass('active-team-details');
  });
});





$(document).ready(function() {
  $(".footer-col-arrow").click(function() {
    console.log('hello');

    var $footer = $(this).closest('.footer-col');
    
    $(".footer-link-listing").not($footer.find(".footer-link-listing")).slideUp(); 
    
    $(".footer-link-listing li").not($footer.find(".footer-link-listing li")).removeClass("active");
   
    $(".down-arrow").not($footer.find(".down-arrow")).show();
    $(".up-arrow").not($footer.find(".up-arrow")).hide();
    
    $footer.find(".footer-link-listing").slideToggle(); 
    $footer.find(".footer-link-listing li").toggleClass("active"); 
    $footer.find(".down-arrow").toggle(); 
    $footer.find(".up-arrow").toggle();   

    return false;
  });
});

$('.client-choose-slider').slick({
  slidesToShow: 2.5,
  slidesToScroll: 1,
  arrows: false,
  vertical: true,
  verticalSwiping: true ,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        vertical: false,
        autoplay: true,
        autoplaySpeed: 5000
      }
    }
  ]   
});

$(document).ready(function(){
    $('.banner.banner-main').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 5000
    });

    $('.event-news-slide').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 5000
    });

    $('.recent-client-slider').slick({
        centerMode: true,
        slidesToShow: 5,
        speed: 300,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 5000,
        adaptiveHeight: true,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });
});

// const open = document.querySelector(".openbutton");
// const close = document.querySelector(".closebutton");
// const show = document.querySelector('.header-right');
// const body = document.body;

// function toggleMenu() {
    
//   show.classList.toggle('show');
//   show.classList.toggle('hide');
  
//   open.classList.toggle('hide');
//   close.classList.toggle('show');
  
//   body.style.overflow = body.style.overflow === 'hidden' ? 'visible' : 'hidden';
// }

// open.addEventListener('click', toggleMenu);
// close.addEventListener('click', toggleMenu);

const open = document.querySelector(".openbutton");
const close = document.querySelector(".closebutton");
const show = document.querySelector('.header-right');
const body = document.body;
open.addEventListener('click',()=>{
    close.style.display="block";
    open.style.display="none";
    show.style.display = 'block';
    body.style.overflow = 'hidden';
})
close.addEventListener('click',()=>{
    open.style.display="block";
    close.style.display="none";
    show.style.display = 'none';
    body.style.overflow = 'visible'; 
})



