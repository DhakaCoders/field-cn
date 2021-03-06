(function($) {
var windowWidth = $(window).width();
var windowWidth_1920 = $('.page-body-cntlr').width();

$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});

if( $('.hamburger-icon').length ){
  $('.hamburger-icon').click(function(){
    $('body').toggleClass('allWork');
  });
}
if(windowWidth <=767){
    if( $('ul > li.menu-item-has-children').length ){
      $('ul > li.menu-item-has-children').click(function(){
       $(this).find('.sub-menu').slideToggle(300);
       $(this).toggleClass('sub-menu-arrow');
     });
    }
}
	
if($("ul.slick-dots li").length == 1){
   $("ul.slick-dots").hide();
}
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};
if($('.mHc6').length){
  $('.mHc6').matchHeight();
};
$(window).load(function() {
//matchHeightCol
  if($('.mHc').length){
    $('.mHc').matchHeight();
  };
  if($('.mHc1').length){
    $('.mHc1').matchHeight();
  };
  if($('.mHc2').length){
    $('.mHc2').matchHeight();
  };
  if($('.mHc3').length){
    $('.mHc3').matchHeight();
  };
  if($('.mHc4').length){
    $('.mHc4').matchHeight();
  };
  if($('.mHc5').length){
    $('.mHc5').matchHeight();
  };
  if($('.mHc6').length){
    $('.mHc6').matchHeight();
  };
});

//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}





/* BS form Validator*/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


/* innerpage buttons */
$(".dft-fl-btn" ).each(function( index ) {
  var color = $(this).data('color');
  var bg = $(this).data('bg');
  var border = $(this).data('border');
  $(this).css('color', color);
  $(this).css('background', bg);
  $(this).css('border-color', border);
  $(this).on('mouseenter', function(){
    if( bg != ''){
      $(this).css('background', 'transparent');
      $(this).css('color', bg);
    }
    if( bg == ''){
      $(this).css('background', border);
      $(this).css('color', '#fff');
    }
  });
  $(this).on('mouseleave', function(){
    if( bg != ''){
      $(this).css('background', bg);
      $(this).css('color', color);
    }
    if( bg == ''){
      $(this).css('background', 'transparent');
      $(this).css('color', border);
    }
  });
});



if( $('.field-fag').length ){
  $('.field-faq-accordion-hdr').on('click', function(){
    $(this).toggleClass('active');
    $(this).parents('.field-fag ul li').siblings().find('.field-faq-accordion-hdr').removeClass('active');
    $(this).parents('.field-fag ul li').find('.field-faq-accordion-desc').slideToggle(300);
    $(this).parents('.field-fag ul li').siblings().find('.field-faq-accordion-desc').slideUp(300);
  });
}



if( $('.contact-form-wrp').length ){
  $('.contact-form-wrp .wpforms-container .wpforms-form .wpforms-submit-container button').on('click', function(){
    $('.wpforms-field input[required],.wpforms-field select[required]').parents('.wpforms-field').addClass('wpforms-has-error');
    $('.wpforms-field input[required],.wpforms-field select[required]').addClass('wpforms-error');
  });
}


if( $('.wpforms-error').length ){
  $('.wpforms-error').on('click', function(){
    $(this).parents('.wpforms-field').removeClass('wpforms-has-error');
  });
}

if( $('.offerte-form-wrp').length ){
  $('.offerte-form-wrp .wpforms-container .wpforms-form .wpforms-submit-container button').on('click', function(){
    $('.wpforms-field input[required],.wpforms-field select[required]').parents('.wpforms-field').addClass('wpforms-has-error');
    $('.wpforms-field input[required],.wpforms-field select[required]').addClass('wpforms-error');
  });
}


if( $('.wpforms-error').length ){
  $('.wpforms-error').on('click', function(){
    $(this).parents('.wpforms-field').removeClass('wpforms-has-error');
  });
}
if(windowWidth > 575){
  if( $('.gallery-masonry-items-cntlr').length ){
    $('.gallery-masonry-items-cntlr').masonry({
      itemSelector: '.gallery-masonry-item',
    }).masonry('layout');
  };
}

if(windowWidth <= 575){
  if( $('.BtmGallerySlider').length ){
    $('.BtmGallerySlider').slick({
      dots: true,
      arrows: false,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  }
}


$('#toTop').click(function() {
    $('body,html').animate({scrollTop:0},800);
}); 


if( $('.xs-page-entry-menu').length ){
  $('.xs-page-entry-menu ul li a').on('click', function(e){
    e.preventDefault();
    $(this).parent().toggleClass('active');
    $(this).parents('.xs-page-entry-menu').find('.xs-page-entry-menu ul li').removeClass('active');
    $(this).next().slideToggle(300);
  });
}


function bannerheight(){
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();
  console.log(windowHeight);
  var windowHeight2 = 0;
  if( windowHeight < 625 ){
    windowHeight2 = 625;
  }else{
    windowHeight2 = windowHeight;
  }
  if (windowWidth > 767){
    // $('.hm-banner-des-cntlr').css('height', windowHeight2);
  }
}
bannerheight();
  
  if( $('.hmBnrSlider').length ){
    $('.hmBnrSlider').slick({
      dots: true,
      arrows: false,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: false,
              dots: false
            }
          }
        ]
    });
  }


  if( $('.clubsTeamSlider').length ){
    $('.clubsTeamSlider').slick({
      dots: false,
      arrows: true,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: $('.clubs-team-sec .fl-prev-next .fl-prev'),
      nextArrow: $('.clubs-team-sec .fl-prev-next .fl-next'),
      responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              dots: true
            }
          },
          {
            breakpoint:480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true
            }
          }
        ]
    });
  }
 

  if(windowWidth > 575){
    if( $('.msnry-grd').length ){
      $('.msnry-grd').masonry({
        itemSelector: '.msnry-grd-item',
        
      }).masonry('layout');
    };
  }

  if(windowWidth < 576){
    if( $('.msnrySlider').length ){
      $('.msnrySlider').slick({
        dots: true,
        arrows: false,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    }  
  }
  
    
    var containerwidth = $('.container').width();
    var offSet = (windowWidth_1920 - containerwidth);
    var lftOffSet = (offSet / 2);

    $('.customer-service-slider-ctlr').css('padding-left', lftOffSet);

    $(window).resize(function(){
      var windowWidth_1920 = $('.page-body-cntlr').width();
      var containerwidth = $('.container').width();
      var offSet = (windowWidth_1920 - containerwidth);
      var lftOffSet = (offSet / 2);

      $('.customer-service-slider-ctlr').css('padding-left', lftOffSet);
    });

    if( $('.customerServiceSlider').length ){
      $('.customerServiceSlider').slick({
        dots: false,
        arrows: true,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('.customer-service-sec .fl-prev-next .fl-prev'),
        nextArrow: $('.customer-service-sec .fl-prev-next .fl-next'),
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1.5,
              slidesToScroll: 1
            }
          }
        ]
      });
    }


  if( $('.clubCollectionSlider').length ){
      $('.clubCollectionSlider').slick({
        dots: true,
        arrows:false,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 700,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              dots: true
            }
          },
          {
            breakpoint:576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true
            }
          }
        ]
      });
  }
 if (windowWidth <= 640) {
  if( $('.teamSlider').length ){
      $('.teamSlider').slick({
        dots: true,
        arrows:false,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        responsive: [
          {
            breakpoint:576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true
            }
          }
        ]
      });
  }
}
if (windowWidth <= 991) {
    $('.ftr-top-col h6').on('click', function(){
      $(this).toggleClass('active');
      $(this).parent().siblings().find('h6').removeClass('active');
      $(this).parent().find('.ftr-col-menu').slideToggle(300);
      $(this).parent().siblings().find('.ftr-col-menu').slideUp(300);
      $(this).parent().find('.ftr-col-desc').slideToggle(300);
      $(this).parent().siblings().find('.ftr-col-desc').slideUp(300);
    });

}

new WOW().init();

})(jQuery);