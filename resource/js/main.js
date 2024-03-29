'use strict';

$(document).ready(function () {

  /*popup form START*/

  $('#popupButton').on('click', function() {
    $('#popupCount').addClass('showFlex');
    $('#popupCount').removeClass('hide');
    $('body').css('padding-right', getScrollbarWidth()).addClass('overlayed')
  });

  $('#popupButtonHeader').on('click', function() {
    $('#popupCount').addClass('showFlex');
    $('#popupCount').removeClass('hide');
    $('body').css('padding-right', getScrollbarWidth()).addClass('overlayed')
  });

  $('#popupButtonMenu').on('click', function() {
    $('#popupCount').addClass('showFlex');
    $('#popupCount').removeClass('hide');
    $('body').css('padding-right', getScrollbarWidth()).addClass('overlayed')
  });

  $('#consultBtn').on('click', function() {
    $('#popupConsult').addClass('showFlex');
    $('#popupConsult').removeClass('hide');
    $('body').css('padding-right', getScrollbarWidth()).addClass('overlayed')
  });

  $('#popupCloseConsult').on('click', function() {
    $('#popupConsult').addClass('hide');
    $('#popupConsult').removeClass('showFlex');
    $('body').css('padding-right', getScrollbarWidth()).removeClass('overlayed')
  });

  $('#popupClose').on('click', function() {
    $('#popupCount').addClass('hide');
    $('#popupCount').removeClass('showFlex');
    $('body').css('padding-right', getScrollbarWidth()).removeClass('overlayed')
  });
  /*popup form END*/

  /*cases tabs START*/

  /*let tab = document.querySelectorAll('.casesName__list-item'),
      link = document.querySelectorAll('.casesName-link'),
      tabBox = document.querySelectorAll('.casesPage__slider'),
      container = document.querySelector('.pageWrapper');

      function hideContent(a) {
        for(let i = a; i < tabBox.length; i++) {
          tabBox[i].classList.add('hide');
          tabBox[i].classList.remove('showFlex');
        }
      };

      function activate(b){
        for(let i = 0; i < tab.length; i++) {
          link[i].classList.remove('active');
        }
        link[b].classList.add('active');
      };

      function showContent(c){
        tabBox[c].classList.remove('hide');
        tabBox[c].classList.add('showFlex');
      };

      activate(0);
      hideContent(1);*/

      /*container.addEventListener('click', function(event){
        let target = event.target;
        if(target && target.classList.contains('casesName__list-item')) {
          for(let i = 0; i < tab.length; i++) {
            if(target == tab[i]) {
              console.log(tab[i]);
              activate(i);
              hideContent(0);
              showContent(i)
            }
          }
        }
      });*/

  /*cases tabs END*/

  /*form validation START*/

  /*form validation END*/

  $(".header__scroll").on("click", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top}, 1500);
  });

  /*Init parallax function START*/
  function initParallax(a, b) {

    // Contains the items you want to parallax.
    var parallaxContainer = document.getElementsByClassName(a)[0];
    // The elements you want to parallax.
    var parallaxItems = document.getElementsByClassName(b);

    // Use this value to adjust the amount of parallax in response to mouse movement.
    var fixer = 0.0090;

    document.addEventListener("mousemove", function (event) {

      // get the mouseX - negative on left, positive on right
      var pageX = event.pageX - parallaxContainer.getBoundingClientRect().width * 0.5;

      // same here, get the y. use console.log(pageY) to see the values
      var pageY = event.pageY - parallaxContainer.getBoundingClientRect().height * 0.5;

      for (var i = 0; i < parallaxItems.length; i++) {
        var item = parallaxItems[i];
        var speedX = item.getAttribute("data-speed-x");
        var speedY = item.getAttribute("data-speed-y");

        // Instead of using 'TweenLite.set' you can use 'TweenLite.to' which results in a smoother initial transition (when the mouse enters) at the cost of some preformance.
        // Change the '+' to '-' if you want to invert the parallax motion in relation to the mouse movement.
        TweenLite.set(item, {
          x: -(item.offsetLeft + pageX * speedX) * fixer,
          y: -(item.offsetTop + pageY * speedY) * fixer
        });
      }
    });
  };
  /*Init parallax function END*/

  /*Different start*/
  function getScrollbarWidth() {
    return window.innerWidth - document.documentElement.clientWidth;
  }
  /*Different end*/
  /*Lang switch START*/
  $('.langSwitch__item').on('click', function () {
    $('.langSwitch__item_active').removeClass('langSwitch__item_active');
    $(this).addClass('langSwitch__item_active');
  });
  /*Lang switch END*/

  /*Main Slider START*/
  $('.mainSlider').on('init', function (event, slick) {
    setTimeout(function () {
      $('.header .js-unload').removeClass('js-unload');
      setTimeout(function () {
        initParallax('header', 'header__image_small');
        initParallax('header', 'header__image_big');
        initParallax('header', 'header__image_blur');
        initParallax('facts', 'facts__image_small');
        initParallax('facts', 'facts__image_big');
        initParallax('facts', 'facts__image_blur');
      }, 1000);
    }, 200);
  }).slick({
    infinite: true,
    dots: true,
    fade: true,
    speed: 800,
    slideToShow: 1,
    arrows: false
  }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    $('.mainSlider__content').eq(currentSlide).addClass('js-removed');
    $('.header__image').addClass('js-animated');
    setTimeout(function () {
      $('.mainSlider__content').eq(nextSlide).removeClass('js-removed');
    }, 300);
  }).on('afterChange', function (event, slick, currentSlide) {
    $('.header__image').removeClass('js-animated');
  });
  /*Main Slider END*/

  /*Clients slider START*/
  $('.clients__list_slider').slick({
    responsive: [{
      breakpoint: 661,
      settings: {
        slideToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: true
      }
    }]
  }).on('afterChange', function (event, slick, currentSlide) {
    $('.clients__list_slider .clients__item.clicked').removeClass('clicked');
  });
  $('.clients__list_slider .clients__item').on('click', function () {
    $(this).toggleClass('clicked');
  });
  /*Clients slider END*/

  /*Accordions functionality START*/
  $('.opportunities__label').on('click', function () {
    if (!$(this).parent().hasClass('active')) {
      $('.opportunities__item.active').removeClass('active').find('.opportunities__text').slideUp();
      $(this).parent().addClass('active').find('.opportunities__text').slideDown();
    }
  });
  /*Accordions functionality END*/

  /*Watch video script START*/
  $(".opportunities__video").click(function () {
    if (!$('.videoFrame').length) {
      var $iframe = $("<iframe class='videoFrame'>").attr("src", $(this).data("url"));
      $(".popupVideo").append($iframe);
    }
    showOverlay();
    $('.popupVideo').addClass('active');
  });
  /*Watch video script END*/

  /* Popup functions START */
  function showOverlay() {
    $('.popupWrapper').addClass('active');
    $('body').css('padding-right', getScrollbarWidth()).addClass('overlayed');
  }
  function hideOverlay() {
    $('.popupWrapper').removeClass('active');
    $('.popupWrapper > *').removeClass('active');
    $('body').removeClass('overlayed').css('padding-right', 0);
  }

  $('.popupWrapper').on('click', function (event) {
    if (this === event.target) {
      hideOverlay();
    }
  });
  /* Popup functions END */

  /*Main menu START*/
  $('.header__menuButton').on('click', function () {
    showOverlay();
    $('.mainMenu').addClass('active');
  });
  $('.mainMenu__close').on('click', function () {
    hideOverlay();
    $('.mainMenu').removeClass('active');
  });
  $('.mainMenu__label_tab').on('click', function () {
    if ($(this).parent().hasClass('active')) {
      $('.mainMenu__item.active').removeClass('active');
      $(this).next().slideUp();
    } else {
      $('.mainMenu__item.active').removeClass('active');
      $(this).parent().addClass('active');
      $(this).next().slideDown(function () {
        $(this).css('display', 'flex');
      });
      $('.mainMenu__item:not(.active) .mainMenu__subList').slideUp();
    }
  });
  /*Main menu END*/

  /*Realms change START*/
  $('.realm__wrapper').on('click', function () {
    var index = $(this).index();
    $('.realm__item.active').removeClass('active');
    $('.realm__imageItem').removeClass('active');
    $(this).find('.realm__item').addClass('active');
    $('.realm__imageItem').eq(index).addClass('active');
  });
  /*Realms change END*/

  $('.directions__options').slick({
    focusOnSelect: true,
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 4,
    arrows: false,
    settings: 'unslick',
    responsive: [{
      breakpoint: 1024,
      settings: {
        settings: 'slick',
        centerMode: true,
        slidesToShow: 3,
        centerPadding: '0',
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        settings: 'slick',
        centerMode: true,
        slidesToShow: 2,
        centerPadding: '0',
        dots: true
      }
    },
    {
      breakpoint: 576,
      settings: {
        settings: 'slick',
        centerMode: true,
        slidesToShow: 1,
        centerPadding: '0',
        dots: true
      }
    }]
  });

  $('.realm__list').slick({
    focusOnSelect: true,
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 4,
    arrows: true,
    responsive: [{
      breakpoint: 1700,
      settings: {
        centerMode: true,
        slidesToShow: 3,
        centerPadding: '0'
      }
    }, {
      breakpoint: 901,
      settings: {
        centerMode: false,
        slidesToShow: 2
      }
    }, {
      breakpoint: 601,
      settings: {
        slidesToShow: 1
      }
    }]
  });

  /*Cases slider START*/
  $('.cases__slider:not(.cases__slider_inner)').slick({
    focusOnSelect: true,
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    arrows: false,
    responsive: [{
      breakpoint: 1600,
      settings: {
        centerMode: true,
        slidesToShow: 3,
        centerPadding: '0'
      }
    }, {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        dots: true
      }
    }, {
      breakpoint: 901,
      settings: {
        centerMode: false,
        slidesToShow: 2,
        dots: true
      }
    }, {
      breakpoint: 601,
      settings: {
        slidesToShow: 1,
        dots: true
      }
    }]
  });
  /*Cases slider END*/
  /*Cases slider inner START*/
  $('.cases__slider_inner').slick({
    focusOnSelect: true,
    centerMode: true,
    centerPadding: '0%',
    slidesToShow: 3,
    arrows: false,
    responsive: [{
      breakpoint: 1701,
      settings: {
        centerMode: true,
        slidesToShow: 2,
        centerPadding: '0'
      }
    }, {
      breakpoint: 1251,
      settings: {
        centerMode: false,
        slidesToShow: 1
      }
    }, {
      breakpoint: 769,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 601,
      settings: {
        slidesToShow: 1
      }
    }]
  });
  /*Cases slider inner END*/

  /*Menu burger animation toggle START*/
  $('.menuAnimatedButton').on('click', function () {
    $('.menuAnimatedButton').toggleClass('active');
  });
  /*Menu burger animation toggle END*/

  /*Directions image change on hover START*/
  // $('.directions .dirOption').on('mouseenter', function (event) {
  //   if ($(this).hasClass('active')) return false;
  //   $('.dirOption.active').removeClass('active');
  //   var index = $(this).addClass('active').index();
  //   $('.directions__picture.active').removeClass('active');
  //   $('.directions__picture').eq(index).addClass('active');
  //   $('.directions__image').removeClass('js-animated');
  //   setTimeout(function () {
  //     $('.directions__image').addClass('js-animated');
  //   }, 100);
  // });
  /*Directions image change on hover END*/

  /*ServiceItem menu accordion START*/
  $('.serviceItem__itemLabel').on('click', function () {
    if (!$(this).parent().hasClass('active')) {
      $('.serviceItem__item.active').removeClass('active').find('.serviceItem__sublist').slideUp();
      $(this).parent().addClass('active').find('.serviceItem__sublist').slideDown();
    }
  });
  $('.serviceItem__item.active .serviceItem__sublist').slideDown(0);
  /*ServiceItem menu accordion END*/

  /*Price range START*/
//  var handlesSlider = $('.layout-slider')[0];
//  var rangeSlider = noUiSlider.create(handlesSlider, {
//    start: [300, 1000],
//    tooltips: true,
//    format: {
//      // 'to' the formatted value. Receives a number.
//      to: function to(value) {
//        return parseInt(value);
//      },
//      // 'from' the formatted value.
//      // Receives a string, should return a number.
//      from: function from(value) {
//        return parseInt(value);
//      }
//    },
//    range: {
//      'min': [0],
//      'max': [1500]
//    },
//    connect: true
//  }).on('change.one', function (values) {
//    console.log(values);
//    $('.calc__rangeValue_first').val(values[0]);
//    $('.calc__rangeValue_last').val(values[1]);
//  });
//
//  $('.calc__rangeValue_first').on('change', function () {
//    handlesSlider.noUiSlider.setHandle(0, Number($(this).val()), true);
//  });
//  $('.calc__rangeValue_last').on('change', function () {
//    handlesSlider.noUiSlider.setHandle(1, Number($(this).val()), true);
//  });
  /*Price range END*/

    /*Form Validation START*/

    let send = document.getElementById('send'),
        calc = document.getElementById('calc'),
        consult = document.getElementById('consult'),
        selector = document.getElementById('selector'),
        name = document.getElementById('name'),
        nameConsult = document.getElementById('nameConsult'),
        tel = document.getElementById('phone'),
        telConsult = document.getElementById('phoneConsult'),
        mail = document.getElementById('mail'),
        mailConsult = document.getElementById('mailConsult'),
        message = document.getElementById('message'),
        nameCalc = document.getElementById('nameCalc'),
        telCalc = document.getElementById('phoneCalc'),
        mailCalc = document.getElementById('mailCalc'),
        selectError = document.getElementById('selectError'),
        nameError = document.getElementById('nameError'),
        nameConsultError = document.getElementById('nameConsultError'),
        phoneError = document.getElementById('phoneError'),
        phoneConsultError = document.getElementById('phoneConsultError'),
        mailError = document.getElementById('mailError'),
        mailConsultError = document.getElementById('mailConsultError'),
        nameCalcError = document.getElementById('nameCalcError'),
        mailCalcError = document.getElementById('mailCalcError'),
        messageError = document.getElementById('messageError'),
        regNamme = /^[а-яА-ЯёЁa-zA-Z]/,
        regTel = /^[0-9]/,
        regMail = /^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]/,
        reg = /[а-яА-ЯёЁa-zA-Z0-9]/,
        field = document.querySelectorAll('.field'),
        fieldCalc = document.querySelectorAll('.fieldCalc'),
        fieldConsult = document.querySelectorAll('.fieldConsult');


    calc.addEventListener('click', function(event){
        event.preventDefault();

        checkSelect(selector, selectError);
        checkInputLength(nameCalc, 2, nameCalcError, regNamme);
        checkInputLength(telCalc, 5, phoneError, regTel);
        checkInputLength(mailCalc, 6, mailCalcError, regMail);

        for(let i = 0; i < fieldCalc.length; i++) {
            if(fieldCalc[i].classList.contains('fail')) {
                console.log('invalid');
                return false;
            }
            {console.log('valid'); $('form#myForm').submit();};
        }
    });



    /*consult.addEventListener('click', function(event){
        event.preventDefault();

        checkInputLength(nameConsult, 2, nameConsultError, regNamme);
        checkInputLength(telConsult, 5, phoneConsultError, regTel);
        checkInputLength(mailConsult, 6, mailConsultError, regMail);

        for(let i = 0; i < fieldConsult.length; i++) {
            if(fieldConsult[i].classList.contains('fail')) {
                console.log('invalid');
                return false;
            }
            else {console.log('valid'); $('form#myForm').submit();};
        }
    });*/

    send.addEventListener('click', function(event){
        event.preventDefault();

        checkInputLength(name, 2, nameError, regNamme);
        checkInputLength(message, 5, messageError, reg);
        checkInputLength(mail, 6, mailError, regMail);

        for(let i = 0; i < field.length; i++) {
            if(field[i].classList.contains('fail')) {
                console.log('invalid');
                return false;
            }
            else {console.log('valid'); $('form#myForm2').submit();};
        }
    });

    function checkInputLength(input, size, text, reg) {
        let string = input.value.trim();
        if(string.length < size || !reg.test(input.value)) {
            input.classList.remove('success');
            input.classList.add('fail');
            if(string.length < size) {
                text.textContent = 'Поле должно содержать не менее' + ' ' + size + ' ' + 'символов!';
            }
            else text.textContent = 'Вы используете недопустимые символы';

        }

        else {
            text.textContent = '';
            input.classList.remove('fail');
            input.classList.add('success');
        }
    }

    function checkSelect(input,text) {

        if(input.value == 0) {
            text.textContent = 'Вы не выбрали ни один из вариантов!';
            input.classList.remove('success');
            input.classList.add('fail');
        }

        else {
            text.textContent = '';
            input.classList.remove('fail');
            input.classList.add('success');
        }
    }

    /*Form Validation END*/


  /*Calc navigation START*/
  // $('.calc__mainStepBlock .calc__optionItem').on('click', function () {
  //   var index = $('.calc__mainStepBlock .calc__optionItem').index(this);
  //   $('.calc__mainStepBlock').removeClass('active');
  //   $('.calc__block').eq(index).find('.calc__stepBlock').eq(0).addClass('active');
  // });
  //
  // $('.calc__stepBlock .calc__optionItem').on('click', function () {
  //   var current = $(this).closest('.calc__stepBlock.active');
  //   current.removeClass('active');
  //   current.next('.calc__stepBlock').addClass('active');
  // });
  //
  // $('.calc__next').on('click', function () {
  //   var current = $(this).closest('.calc__stepBlock.active');
  //   if (current.next('.calc__stepBlock').length) {
  //     current.removeClass('active');
  //     current.next('.calc__stepBlock').addClass('active');
  //   } else {
  //     alert('THE END');
  //   }
  // });
  // $('.calc__prev').on('click', function () {
  //   var current = $(this).closest('.calc__stepBlock.active');
  //   if (current.prev('.calc__stepBlock').length) {
  //     current.removeClass('active');
  //     current.prev('.calc__stepBlock').addClass('active');
  //   } else {
  //     current.removeClass('active');
  //     $('.calc__mainStepBlock').addClass('active');
  //   }
  // });
  /*Calc navigation END*/



});
