$(".latest-carousel").slick({
  dots: false,
  arrows: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  speed: 1000,
  slidesToShow: 5,
  slidesToScroll: 1,
  nextArrow: '<i class="fa-solid fa-chevron-right"></i>',
  prevArrow: '<i class="fa-solid fa-chevron-left"></i>',

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});
$(".work-carousel").slick({
  dots: false,
  arrows: true,
  infinite: true,
  autoplay: false,
  autoplaySpeed: 2000,
  speed: 1000,
  slidesToShow: 4,
  slidesToScroll: 1,
  nextArrow: '<i class="fa-solid fa-chevron-right"></i>',
  prevArrow: '<i class="fa-solid fa-chevron-left"></i>',

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});


$(".scrolling-logos").slick({
  dots: false,
  arrows: false,             
  infinite: true,          
  autoplay: true,          
  autoplaySpeed: 0,         
  speed: 2000,            
  cssEase: 'linear',       
  variableWidth: true,      
  slidesToScroll: 1,        
  nextArrow: '<i class="fa-solid fa-chevron-right"></i>',
  prevArrow: '<i class="fa-solid fa-chevron-left"></i>',

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        variableWidth: true,
        cssEase: 'linear',
        autoplaySpeed: 0,
        speed: 10000,       
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToScroll: 1,
        variableWidth: true,
        cssEase: 'linear',
        autoplaySpeed: 0,
        speed: 10000,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToScroll: 1,
        variableWidth: true,
        cssEase: 'linear',
        autoplaySpeed: 0,
        speed: 10000,
      },
    },
  ],
});



$(".scrolling-logoss").slick({
  dots: false,
  arrows: false,             
  infinite: true,           
  autoplay: true,           
  autoplaySpeed: 0,         
  speed: 2000,             
  cssEase: 'linear',        
  variableWidth: true,      
  slidesToScroll: 1,        
  nextArrow: '<i class="fa-solid fa-chevron-right"></i>',
  prevArrow: '<i class="fa-solid fa-chevron-left"></i>',

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        variableWidth: true,
        cssEase: 'linear',
        autoplaySpeed: 0,
        speed: 10000,       
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToScroll: 1,
        variableWidth: true,
        cssEase: 'linear',
        autoplaySpeed: 0,
        speed: 10000,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToScroll: 1,
        variableWidth: true,
        cssEase: 'linear',
        autoplaySpeed: 0,
        speed: 10000,
      },
    },
  ],
});




// FAQ
document.querySelectorAll(".question").forEach((question) => {
  const header = question.querySelector("h3");
  header.addEventListener("click", () => {
    // Close all other questions
    document.querySelectorAll(".question").forEach((item) => {
      if (item !== question) {
        item.classList.remove("open");
        item.querySelector(".answer").style.display = "none";
      }
    });
    // Toggle the selected question
    question.classList.toggle("open");
    const answer = question.querySelector(".answer");
    answer.style.display =
      answer.style.display === "block" ? "none" : "block";
  });
});
 // FAQ