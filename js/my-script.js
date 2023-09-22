// Work slider

$('.work_slider').slick({
    centerMode: true,
    variableWidth: true,
    centerPadding: '20px',
    arrows:true,
    dots:true,
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 1,
          autoplay:true
        }
      }
    ]
  });


  

//   Testimonial Slider

$('.testimonials_slider').slick({
    centerMode: true,
    variableWidth: true,
    centerPadding: '20px',
    arrows:true,
    dots:true,
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 1,
          autoplay:true
        }
      }
    ]
  });



  // mobile menu

  $(document).ready(function(){
    $(".mobile_toggle").click(function(){
      $(".header_list").addClass("header_list--show");
      $("html").addClass("overflow_hidden");
    });
    $(".close_menu").click(function(){
      $(".header_list").removeClass("header_list--show");
      $("html").removeClass("overflow_hidden");
    });
  });


  // Sticky header
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 20) {
        $("header").addClass("sticky--header");
    }
    else {
      $("header").removeClass("sticky--header");
  }
}); 