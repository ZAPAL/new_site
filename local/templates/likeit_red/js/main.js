'use strict';

$(document).ready(function () {

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
  var handlesSlider = $('.layout-slider')[0];
  var rangeSlider = noUiSlider.create(handlesSlider, {
    start: [300, 1000],
    tooltips: true,
    format: {
      // 'to' the formatted value. Receives a number.
      to: function to(value) {
        return parseInt(value);
      },
      // 'from' the formatted value.
      // Receives a string, should return a number.
      from: function from(value) {
        return parseInt(value);
      }
    },
    range: {
      'min': [0],
      'max': [1500]
    },
    connect: true
  }).on('change.one', function (values) {
    console.log(values);
    $('.calc__rangeValue_first').val(values[0]);
    $('.calc__rangeValue_last').val(values[1]);
  });

  $('.calc__rangeValue_first').on('change', function () {
    handlesSlider.noUiSlider.setHandle(0, Number($(this).val()), true);
  });
  $('.calc__rangeValue_last').on('change', function () {
    handlesSlider.noUiSlider.setHandle(1, Number($(this).val()), true);
  });
  /*Price range END*/

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
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm1haW4uanMiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJpbml0UGFyYWxsYXgiLCJwYXJhbGxheENvbnRhaW5lciIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJwYXJhbGxheEl0ZW1zIiwiY29uc29sZSIsImxvZyIsImZpeGVyIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50IiwicGFnZVgiLCJnZXRCb3VuZGluZ0NsaWVudFJlY3QiLCJ3aWR0aCIsInBhZ2VZIiwiaGVpZ2h0IiwiaSIsImxlbmd0aCIsIml0ZW0iLCJzcGVlZFgiLCJnZXRBdHRyaWJ1dGUiLCJzcGVlZFkiLCJUd2VlbkxpdGUiLCJzZXQiLCJ4Iiwib2Zmc2V0TGVmdCIsInkiLCJvZmZzZXRUb3AiLCJnZXRTY3JvbGxiYXJXaWR0aCIsIndpbmRvdyIsImlubmVyV2lkdGgiLCJkb2N1bWVudEVsZW1lbnQiLCJjbGllbnRXaWR0aCIsIm9uIiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyIsInNsaWNrIiwic2V0VGltZW91dCIsImluZmluaXRlIiwiZG90cyIsImZhZGUiLCJzcGVlZCIsInNsaWRlVG9TaG93IiwiYXJyb3dzIiwiY3VycmVudFNsaWRlIiwibmV4dFNsaWRlIiwiZXEiLCJyZXNwb25zaXZlIiwiYnJlYWtwb2ludCIsInNldHRpbmdzIiwic2xpZGVzVG9TY3JvbGwiLCJ0b2dnbGVDbGFzcyIsInBhcmVudCIsImhhc0NsYXNzIiwiZmluZCIsInNsaWRlVXAiLCJzbGlkZURvd24iLCJjbGljayIsIiRpZnJhbWUiLCJhdHRyIiwiZGF0YSIsImFwcGVuZCIsInNob3dPdmVybGF5IiwiY3NzIiwiaGlkZU92ZXJsYXkiLCJ0YXJnZXQiLCJuZXh0IiwiaW5kZXgiLCJmb2N1c09uU2VsZWN0IiwiY2VudGVyTW9kZSIsImNlbnRlclBhZGRpbmciLCJzbGlkZXNUb1Nob3ciLCJoYW5kbGVzU2xpZGVyIiwicmFuZ2VTbGlkZXIiLCJub1VpU2xpZGVyIiwiY3JlYXRlIiwic3RhcnQiLCJ0b29sdGlwcyIsImZvcm1hdCIsInRvIiwidmFsdWUiLCJwYXJzZUludCIsImZyb20iLCJyYW5nZSIsImNvbm5lY3QiLCJ2YWx1ZXMiLCJ2YWwiLCJzZXRIYW5kbGUiLCJOdW1iZXIiLCJjdXJyZW50IiwiY2xvc2VzdCIsImFsZXJ0IiwicHJldiJdLCJtYXBwaW5ncyI6Ijs7QUFBQUEsRUFBRUMsUUFBRixFQUFZQyxLQUFaLENBQWtCLFlBQVk7QUFDNUI7QUFDQSxXQUFTQyxZQUFULEdBQXdCOztBQUV0QjtBQUNBLFFBQUlDLG9CQUFvQkgsU0FBU0ksc0JBQVQsQ0FBZ0MsUUFBaEMsRUFBMEMsQ0FBMUMsQ0FBeEI7O0FBRUE7QUFDQSxRQUFJQyxnQkFBZ0JMLFNBQVNJLHNCQUFULENBQWdDLGtCQUFoQyxDQUFwQjtBQUNBRSxZQUFRQyxHQUFSLENBQVlGLGFBQVo7O0FBRUE7QUFDQSxRQUFJRyxRQUFRLE1BQVo7O0FBRUFSLGFBQVNTLGdCQUFULENBQTBCLFdBQTFCLEVBQXVDLFVBQVNDLEtBQVQsRUFBZTs7QUFFcEQ7QUFDQSxVQUFJQyxRQUFTRCxNQUFNQyxLQUFOLEdBQWVSLGtCQUFrQlMscUJBQWxCLEdBQTBDQyxLQUExQyxHQUFrRCxHQUE5RTs7QUFFQTtBQUNBLFVBQUlDLFFBQVNKLE1BQU1JLEtBQU4sR0FBZVgsa0JBQWtCUyxxQkFBbEIsR0FBMENHLE1BQTFDLEdBQW1ELEdBQS9FOztBQUdBLFdBQUssSUFBSUMsSUFBSSxDQUFiLEVBQWdCQSxJQUFJWCxjQUFjWSxNQUFsQyxFQUEwQ0QsR0FBMUMsRUFBK0M7QUFDN0MsWUFBSUUsT0FBT2IsY0FBY1csQ0FBZCxDQUFYO0FBQ0EsWUFBSUcsU0FBU0QsS0FBS0UsWUFBTCxDQUFrQixjQUFsQixDQUFiO0FBQ0EsWUFBSUMsU0FBU0gsS0FBS0UsWUFBTCxDQUFrQixjQUFsQixDQUFiOztBQUVBO0FBQ0E7QUFDQUUsa0JBQVVDLEdBQVYsQ0FBY0wsSUFBZCxFQUFvQjtBQUNsQk0sYUFBRyxFQUFFTixLQUFLTyxVQUFMLEdBQWtCZCxRQUFR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QUUsYUFBRixFQUFpQmtDLEVBQWpCLENBQW9CLE9BQXBCLEVBQTZCLFlBQVk7QUFDdkMsUUFBSXdELFVBQVUxRixFQUFFLElBQUYsRUFBUTJGLE9BQVIsQ0FBZ0IseUJBQWhCLENBQWQ7QUFDQSxRQUFJRCxRQUFRdkIsSUFBUixDQUFhLGtCQUFiLEVBQWlDakQsTUFBckMsRUFBNkM7QUFDM0N3RSxjQUFRdkQsV0FBUixDQUFvQixRQUFwQjtBQUNBdUQsY0FBUXZCLElBQVIsQ0FBYSxrQkFBYixFQUFpQy9CLFFBQWpDLENBQTBDLFFBQTFDO0FBQ0QsS0FIRCxNQUdPO0FBQ0x3RCxZQUFNLFNBQU47QUFDRDtBQUNGLEdBUkQ7QUFTQTVGLElBQUUsYUFBRixFQUFpQmtDLEVBQWpCLENBQW9CLE9BQXBCLEVBQTZCLFlBQVk7QUFDdkMsUUFBSXdELFVBQVUxRixFQUFFLElBQUYsRUFBUTJGLE9BQVIsQ0FBZ0IseUJBQWhCLENBQWQ7QUFDQSxRQUFJRCxRQUFRRyxJQUFSLENBQWEsa0JBQWIsRUFBaUMzRSxNQUFyQyxFQUE2QztBQUMzQ3dFLGNBQVF2RCxXQUFSLENBQW9CLFFBQXBCO0FBQ0F1RCxjQUFRRyxJQUFSLENBQWEsa0JBQWIsRUFBaUN6RCxRQUFqQyxDQUEwQyxRQUExQztBQUNELEtBSEQsTUFHTztBQUNMc0QsY0FBUXZELFdBQVIsQ0FBb0IsUUFBcEI7QUFDQW5DLFFBQUUsc0JBQUYsRUFBMEJvQyxRQUExQixDQUFtQyxRQUFuQztBQUNEO0FBQ0YsR0FURDtBQVVBO0FBQ0QsQ0FuVkQiLCJmaWxlIjoibWFpbi5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcclxuICAvKkluaXQgcGFyYWxsYXggZnVuY3Rpb24gU1RBUlQqL1xyXG4gIGZ1bmN0aW9uIGluaXRQYXJhbGxheCgpIHtcclxuXHJcbiAgICAvLyBDb250YWlucyB0aGUgaXRlbXMgeW91IHdhbnQgdG8gcGFyYWxsYXguXHJcbiAgICB2YXIgcGFyYWxsYXhDb250YWluZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdoZWFkZXInKVswXTtcclxuXHJcbiAgICAvLyBUaGUgZWxlbWVudHMgeW91IHdhbnQgdG8gcGFyYWxsYXguXHJcbiAgICB2YXIgcGFyYWxsYXhJdGVtcyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ2hlYWRlcl9fcGFyYWxsYXgnKTtcclxuICAgIGNvbnNvbGUubG9nKHBhcmFsbGF4SXRlbXMpO1xyXG5cclxuICAgIC8vIFVzZSB0aGlzIHZhbHVlIHRvIGFkanVzdCB0aGUgYW1vdW50IG9mIHBhcmFsbGF4IGluIHJlc3BvbnNlIHRvIG1vdXNlIG1vdmVtZW50LlxyXG4gICAgdmFyIGZpeGVyID0gMC4wMDYwO1xyXG5cclxuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJtb3VzZW1vdmVcIiwgZnVuY3Rpb24oZXZlbnQpe1xyXG5cclxuICAgICAgLy8gZ2V0IHRoZSBtb3VzZVggLSBuZWdhdGl2ZSBvbiBsZWZ0LCBwb3NpdGl2ZSBvbiByaWdodFxyXG4gICAgICB2YXIgcGFnZVggPSAgZXZlbnQucGFnZVggLSAocGFyYWxsYXhDb250YWluZXIuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCkud2lkdGggKiAwLjUpO1xyXG5cclxuICAgICAgLy8gc2FtZSBoZXJlLCBnZXQgdGhlIHkuIHVzZSBjb25zb2xlLmxvZyhwYWdlWSkgdG8gc2VlIHRoZSB2YWx1ZXNcclxuICAgICAgdmFyIHBhZ2VZID0gIGV2ZW50LnBhZ2VZIC0gKHBhcmFsbGF4Q29udGFpbmVyLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpLmhlaWdodCAqIDAuNSk7XHJcblxyXG5cclxuICAgICAgZm9yIChsZXQgaSA9IDA7IGkgPCBwYXJhbGxheEl0ZW1zLmxlbmd0aDsgaSsrKSB7XHJcbiAgICAgICAgdmFyIGl0ZW0gPSBwYXJhbGxheEl0ZW1zW2ldO1xyXG4gICAgICAgIHZhciBzcGVlZFggPSBpdGVtLmdldEF0dHJpYnV0ZShcImRhdGEtc3BlZWQteFwiKTtcclxuICAgICAgICB2YXIgc3BlZWRZID0gaXRlbS5nZXRBdHRyaWJ1dGUoXCJkYXRhLXNwZWVkLXlcIik7XHJcblxyXG4gICAgICAgIC8vIEluc3RlYWQgb2YgdXNpbmcgJ1R3ZWVuTGl0ZS5zZXQnIHlvdSBjYW4gdXNlICdUd2VlbkxpdGUudG8nIHdoaWNoIHJlc3VsdHMgaW4gYSBzbW9vdGhlciBpbml0aWFsIHRyYW5zaXRpb24gKHdoZW4gdGhlIG1vdXNlIGVudGVycykgYXQgdGhlIGNvc3Qgb2Ygc29tZSBwcmVmb3JtYW5jZS5cclxuICAgICAgICAvLyBDaGFuZ2UgdGhlICcrJyB0byAnLScgaWYgeW91IHdhbnQgdG8gaW52ZXJ0IHRoZSBwYXJhbGxheCBtb3Rpb24gaW4gcmVsYXRpb24gdG8gdGhlIG1vdXNlIG1vdmVtZW50LlxyXG4gICAgICAgIFR3ZWVuTGl0ZS5zZXQoaXRlbSwge1xyXG4gICAgICAgICAgeDogLShpdGVtLm9mZnNldExlZnQgKyBwYWdlWCAqIHNwZWVkWCApICogZml4ZXIsXHJcbiAgICAgICAgICB5OiAtKGl0ZW0ub2Zmc2V0VG9wICsgcGFnZVkgKiBzcGVlZFkpICogZml4ZXJcclxuICAgICAgICB9KTtcclxuICAgICAgfVxyXG4gICAgfSk7XHJcbiAgfTtcclxuICAvKkluaXQgcGFyYWxsYXggZnVuY3Rpb24gRU5EKi9cclxuXHJcbiAgLypEaWZmZXJlbnQgc3RhcnQqL1xyXG4gIGZ1bmN0aW9uIGdldFNjcm9sbGJhcldpZHRoKCkge1xyXG4gICAgcmV0dXJuIHdpbmRvdy5pbm5lcldpZHRoIC0gZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LmNsaWVudFdpZHRoO1xyXG4gIH1cclxuICAvKkRpZmZlcmVudCBlbmQqL1xyXG4gIC8qTGFuZyBzd2l0Y2ggU1RBUlQqL1xyXG4gICQoJy5sYW5nU3dpdGNoX19pdGVtJykub24oJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xyXG4gICAgJCgnLmxhbmdTd2l0Y2hfX2l0ZW1fYWN0aXZlJykucmVtb3ZlQ2xhc3MoJ2xhbmdTd2l0Y2hfX2l0ZW1fYWN0aXZlJyk7XHJcbiAgICAkKHRoaXMpLmFkZENsYXNzKCdsYW5nU3dpdGNoX19pdGVtX2FjdGl2ZScpO1xyXG4gIH0pO1xyXG4gIC8qTGFuZyBzd2l0Y2ggRU5EKi9cclxuXHJcbiAgLypNYWluIFNsaWRlciBTVEFSVCovXHJcbiAgJCgnLm1haW5TbGlkZXInKS5vbignaW5pdCcsIGZ1bmN0aW9uIChldmVudCwgc2xpY2spIHtcclxuICAgIHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xyXG4gICAgICAkKCcuaGVhZGVyIC5qcy11bmxvYWQnKS5yZW1vdmVDbGFzcygnanMtdW5sb2FkJyk7XHJcbiAgICAgIHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIGluaXRQYXJhbGxheCgpO1xyXG4gICAgICB9LCAxMDAwKVxyXG4gICAgfSwgMjAwKTtcclxuICB9KS5zbGljayh7XHJcbiAgICBpbmZpbml0ZTogdHJ1ZSxcclxuICAgIGRvdHM6IHRydWUsXHJcbiAgICBmYWRlOiB0cnVlLFxyXG4gICAgc3BlZWQ6IDgwMCxcclxuICAgIHNsaWRlVG9TaG93OiAxLFxyXG4gICAgYXJyb3dzOiBmYWxzZVxyXG4gIH0pLm9uKCdiZWZvcmVDaGFuZ2UnLCBmdW5jdGlvbiAoZXZlbnQsIHNsaWNrLCBjdXJyZW50U2xpZGUsIG5leHRTbGlkZSkge1xyXG4gICAgJCgnLm1haW5TbGlkZXJfX2NvbnRlbnQnKS5lcShjdXJyZW50U2xpZGUpLmFkZENsYXNzKCdqcy1yZW1vdmVkJyk7XHJcbiAgICAkKCcuaGVhZGVyX19pbWFnZScpLmFkZENsYXNzKCdqcy1hbmltYXRlZCcpO1xyXG4gICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XHJcbiAgICAgICQoJy5tYWluU2xpZGVyX19jb250ZW50JykuZXEobmV4dFNsaWRlKS5yZW1vdmVDbGFzcygnanMtcmVtb3ZlZCcpO1xyXG4gICAgfSwgMzAwKTtcclxuICB9KS5vbignYWZ0ZXJDaGFuZ2UnLCBmdW5jdGlvbiAoZXZlbnQsIHNsaWNrLCBjdXJyZW50U2xpZGUpIHtcclxuICAgICQoJy5oZWFkZXJfX2ltYWdlJykucmVtb3ZlQ2xhc3MoJ2pzLWFuaW1hdGVkJyk7XHJcbiAgfSk7XHJcbiAgLypNYWluIFNsaWRlciBFTkQqL1xyXG5cclxuICAvKkNsaWVudHMgc2xpZGVyIFNUQVJUKi9cclxuICAkKCcuY2xpZW50c19fbGlzdF9zbGlkZXInKS5zbGljayh7XHJcbiAgICByZXNwb25zaXZlOiBbXHJcbiAgICAgIHtcclxuICAgICAgICBicmVha3BvaW50OiA2NjEsXHJcbiAgICAgICAgc2V0dGluZ3M6IHtcclxuICAgICAgICAgIHNsaWRlVG9TaG93OiAyLFxyXG4gICAgICAgICAgc2xpZGVzVG9TY3JvbGw6IDEsXHJcbiAgICAgICAgICBhcnJvd3M6IGZhbHNlLFxyXG4gICAgICAgICAgZG90czogdHJ1ZVxyXG4gICAgICAgIH1cclxuICAgICAgfVxyXG4gICAgXVxyXG4gIH0pLm9uKCdhZnRlckNoYW5nZScsIGZ1bmN0aW9uIChldmVudCwgc2xpY2ssIGN1cnJlbnRTbGlkZSkge1xyXG4gICAgJCgnLmNsaWVudHNfX2xpc3Rfc2xpZGVyIC5jbGllbnRzX19pdGVtLmNsaWNrZWQnKS5yZW1vdmVDbGFzcygnY2xpY2tlZCcpO1xyXG4gIH0pO1xyXG4gICQoJy5jbGllbnRzX19saXN0X3NsaWRlciAuY2xpZW50c19faXRlbScpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcclxuICAgICQodGhpcykudG9nZ2xlQ2xhc3MoJ2NsaWNrZWQnKTtcclxuICB9KTtcclxuICAvKkNsaWVudHMgc2xpZGVyIEVORCovXHJcblxyXG4gIC8qQWNjb3JkaW9ucyBmdW5jdGlvbmFsaXR5IFNUQVJUKi9cclxuICAkKCcub3Bwb3J0dW5pdGllc19fbGFiZWwnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XHJcbiAgICBpZiAoISQodGhpcykucGFyZW50KCkuaGFzQ2xhc3MoJ2FjdGl2ZScpKSB7XHJcbiAgICAgICQoJy5vcHBvcnR1bml0aWVzX19pdGVtLmFjdGl2ZScpLnJlbW92ZUNsYXNzKCdhY3RpdmUnKS5maW5kKCcub3Bwb3J0dW5pdGllc19fdGV4dCcpLnNsaWRlVXAoKTtcclxuICAgICAgJCh0aGlzKS5wYXJlbnQoKS5hZGRDbGFzcygnYWN0aXZlJykuZmluZCgnLm9wcG9ydHVuaXRpZXNfX3RleHQnKS5zbGlkZURvd24oKTtcclxuICAgIH1cclxuICB9KTtcclxuICAvKkFjY29yZGlvbnMgZnVuY3Rpb25hbGl0eSBFTkQqL1xyXG5cclxuICAvKldhdGNoIHZpZGVvIHNjcmlwdCBTVEFSVCovXHJcbiAgJChcIi5vcHBvcnR1bml0aWVzX192aWRlb1wiKS5jbGljayhmdW5jdGlvbiAoKSB7XHJcbiAgICBpZiAoISQoJy52aWRlb0ZyYW1lJykubGVuZ3RoKSB7XHJcbiAgICAgIGxldCAkaWZyYW1lID0gJChcIjxpZnJhbWUgY2xhc3M9J3ZpZGVvRnJhbWUnPlwiKS5hdHRyKFwic3JjXCIsICQodGhpcykuZGF0YShcInVybFwiKSk7XHJcbiAgICAgICQoXCIucG9wdXBWaWRlb1wiKS5hcHBlbmQoJGlmcmFtZSk7XHJcbiAgICB9XHJcbiAgICBzaG93T3ZlcmxheSgpO1xyXG4gICAgJCgnLnBvcHVwVmlkZW8nKS5hZGRDbGFzcygnYWN0aXZlJyk7XHJcbiAgfSk7XHJcbiAgLypXYXRjaCB2aWRlbyBzY3JpcHQgRU5EKi9cclxuXHJcbiAgLyogUG9wdXAgZnVuY3Rpb25zIFNUQVJUICovXHJcbiAgZnVuY3Rpb24gc2hvd092ZXJsYXkoKSB7XHJcbiAgICAkKCcucG9wdXBXcmFwcGVyJykuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gICAgJCgnYm9keScpLmNzcygncGFkZGluZy1yaWdodCcsIGdldFNjcm9sbGJhcldpZHRoKCkpLmFkZENsYXNzKCdvdmVybGF5ZWQnKTtcclxuICB9XHJcbiAgZnVuY3Rpb24gaGlkZU92ZXJsYXkoKSB7XHJcbiAgICAkKCcucG9wdXBXcmFwcGVyJykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gICAgJCgnLnBvcHVwV3JhcHBlciA+IConKS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XHJcbiAgICAkKCdib2R5JykucmVtb3ZlQ2xhc3MoJ292ZXJsYXllZCcpLmNzcygncGFkZGluZy1yaWdodCcsIDApO1xyXG4gIH1cclxuXHJcbiAgJCgnLnBvcHVwV3JhcHBlcicpLm9uKCdjbGljaycsIGZ1bmN0aW9uIChldmVudCkge1xyXG4gICAgaWYgKHRoaXMgPT09IGV2ZW50LnRhcmdldCkge1xyXG4gICAgICBoaWRlT3ZlcmxheSgpO1xyXG4gICAgfVxyXG4gIH0pO1xyXG4gIC8qIFBvcHVwIGZ1bmN0aW9ucyBFTkQgKi9cclxuXHJcbiAgLypNYWluIG1lbnUgU1RBUlQqL1xyXG4gICQoJy5oZWFkZXJfX21lbnVCdXR0b24nKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XHJcbiAgICBzaG93T3ZlcmxheSgpO1xyXG4gICAgJCgnLm1haW5NZW51JykuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gIH0pO1xyXG4gICQoJy5tYWluTWVudV9fY2xvc2UnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XHJcbiAgICBoaWRlT3ZlcmxheSgpO1xyXG4gICAgJCgnLm1haW5NZW51JykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gIH0pO1xyXG4gICQoJy5tYWluTWVudV9fbGFiZWxfdGFiJykub24oJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xyXG4gICAgaWYgKCQodGhpcykucGFyZW50KCkuaGFzQ2xhc3MoJ2FjdGl2ZScpKSB7XHJcbiAgICAgICQoJy5tYWluTWVudV9faXRlbS5hY3RpdmUnKS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XHJcbiAgICAgICQodGhpcykubmV4dCgpLnNsaWRlVXAoKTtcclxuICAgIH0gZWxzZSB7XHJcbiAgICAgICQoJy5tYWluTWVudV9faXRlbS5hY3RpdmUnKS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XHJcbiAgICAgICQodGhpcykucGFyZW50KCkuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gICAgICAkKHRoaXMpLm5leHQoKS5zbGlkZURvd24oZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICQodGhpcykuY3NzKCdkaXNwbGF5JywgJ2ZsZXgnKTtcclxuICAgICAgfSk7XHJcbiAgICAgICQoJy5tYWluTWVudV9faXRlbTpub3QoLmFjdGl2ZSkgLm1haW5NZW51X19zdWJMaXN0Jykuc2xpZGVVcCgpO1xyXG4gICAgfVxyXG4gIH0pO1xyXG4gIC8qTWFpbiBtZW51IEVORCovXHJcblxyXG4gIC8qUmVhbG1zIGNoYW5nZSBTVEFSVCovXHJcbiAgJCgnLnJlYWxtX193cmFwcGVyJykub24oJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xyXG4gICAgY29uc3QgaW5kZXggPSAkKHRoaXMpLmluZGV4KCk7XHJcbiAgICAkKCcucmVhbG1fX2l0ZW0uYWN0aXZlJykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gICAgJCgnLnJlYWxtX19pbWFnZUl0ZW0nKS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XHJcbiAgICAkKHRoaXMpLmZpbmQoJy5yZWFsbV9faXRlbScpLmFkZENsYXNzKCdhY3RpdmUnKTtcclxuICAgICQoJy5yZWFsbV9faW1hZ2VJdGVtJykuZXEoaW5kZXgpLmFkZENsYXNzKCdhY3RpdmUnKTtcclxuICB9KTtcclxuICAvKlJlYWxtcyBjaGFuZ2UgRU5EKi9cclxuXHJcbiAgLypDYXNlcyBzbGlkZXIgU1RBUlQqL1xyXG4gICQoJy5jYXNlc19fc2xpZGVyOm5vdCguY2FzZXNfX3NsaWRlcl9pbm5lciknKS5zbGljayh7XHJcbiAgICBmb2N1c09uU2VsZWN0OiB0cnVlLFxyXG4gICAgY2VudGVyTW9kZTogdHJ1ZSxcclxuICAgIGNlbnRlclBhZGRpbmc6ICc2JScsXHJcbiAgICBzbGlkZXNUb1Nob3c6IDMsXHJcbiAgICBhcnJvd3M6IGZhbHNlLFxyXG4gICAgcmVzcG9uc2l2ZTogW1xyXG4gICAgICB7XHJcbiAgICAgICAgYnJlYWtwb2ludDogMTQ0MSxcclxuICAgICAgICBzZXR0aW5nczoge1xyXG4gICAgICAgICAgY2VudGVyTW9kZTogdHJ1ZSxcclxuICAgICAgICAgIHNsaWRlc1RvU2hvdzogMyxcclxuICAgICAgICAgIGNlbnRlclBhZGRpbmc6ICcwJ1xyXG4gICAgICAgIH1cclxuICAgICAgfSxcclxuICAgICAge1xyXG4gICAgICAgIGJyZWFrcG9pbnQ6IDkwMSxcclxuICAgICAgICBzZXR0aW5nczoge1xyXG4gICAgICAgICAgY2VudGVyTW9kZTogZmFsc2UsXHJcbiAgICAgICAgICBzbGlkZXNUb1Nob3c6IDJcclxuICAgICAgICB9XHJcbiAgICAgIH0sXHJcbiAgICAgIHtcclxuICAgICAgICBicmVha3BvaW50OiA2MDEsXHJcbiAgICAgICAgc2V0dGluZ3M6IHtcclxuICAgICAgICAgIHNsaWRlc1RvU2hvdzogMVxyXG4gICAgICAgIH1cclxuICAgICAgfVxyXG4gICAgXVxyXG4gIH0pO1xyXG4gIC8qQ2FzZXMgc2xpZGVyIEVORCovXHJcbiAgLypDYXNlcyBzbGlkZXIgaW5uZXIgU1RBUlQqL1xyXG4gICQoJy5jYXNlc19fc2xpZGVyX2lubmVyJykuc2xpY2soe1xyXG4gICAgZm9jdXNPblNlbGVjdDogdHJ1ZSxcclxuICAgIGNlbnRlck1vZGU6IHRydWUsXHJcbiAgICBjZW50ZXJQYWRkaW5nOiAnMCUnLFxyXG4gICAgc2xpZGVzVG9TaG93OiAzLFxyXG4gICAgYXJyb3dzOiBmYWxzZSxcclxuICAgIHJlc3BvbnNpdmU6IFtcclxuICAgICAge1xyXG4gICAgICAgIGJyZWFrcG9pbnQ6IDE3MDEsXHJcbiAgICAgICAgc2V0dGluZ3M6IHtcclxuICAgICAgICAgIGNlbnRlck1vZGU6IHRydWUsXHJcbiAgICAgICAgICBzbGlkZXNUb1Nob3c6IDIsXHJcbiAgICAgICAgICBjZW50ZXJQYWRkaW5nOiAnMCdcclxuICAgICAgICB9XHJcbiAgICAgIH0sXHJcbiAgICAgIHtcclxuICAgICAgICBicmVha3BvaW50OiAxMjUxLFxyXG4gICAgICAgIHNldHRpbmdzOiB7XHJcbiAgICAgICAgICBjZW50ZXJNb2RlOiBmYWxzZSxcclxuICAgICAgICAgIHNsaWRlc1RvU2hvdzogMVxyXG4gICAgICAgIH1cclxuICAgICAgfSxcclxuICAgICAge1xyXG4gICAgICAgIGJyZWFrcG9pbnQ6IDc2OSxcclxuICAgICAgICBzZXR0aW5nczoge1xyXG4gICAgICAgICAgc2xpZGVzVG9TaG93OiAyXHJcbiAgICAgICAgfVxyXG4gICAgICB9LFxyXG4gICAgICB7XHJcbiAgICAgICAgYnJlYWtwb2ludDogNjAxLFxyXG4gICAgICAgIHNldHRpbmdzOiB7XHJcbiAgICAgICAgICBzbGlkZXNUb1Nob3c6IDFcclxuICAgICAgICB9XHJcbiAgICAgIH1cclxuICAgIF1cclxuICB9KTtcclxuICAvKkNhc2VzIHNsaWRlciBpbm5lciBFTkQqL1xyXG5cclxuICAvKk1lbnUgYnVyZ2VyIGFuaW1hdGlvbiB0b2dnbGUgU1RBUlQqL1xyXG4gICQoJy5tZW51QW5pbWF0ZWRCdXR0b24nKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAkKCcubWVudUFuaW1hdGVkQnV0dG9uJykudG9nZ2xlQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gIH0pO1xyXG4gIC8qTWVudSBidXJnZXIgYW5pbWF0aW9uIHRvZ2dsZSBFTkQqL1xyXG5cclxuICAvKkRpcmVjdGlvbnMgaW1hZ2UgY2hhbmdlIG9uIGhvdmVyIFNUQVJUKi9cclxuICAkKCcuZGlyZWN0aW9ucyAuZGlyT3B0aW9uJykub24oJ21vdXNlZW50ZXInLCBmdW5jdGlvbiAoZXZlbnQpIHtcclxuICAgIGlmICgkKHRoaXMpLmhhc0NsYXNzKCdhY3RpdmUnKSkgcmV0dXJuIGZhbHNlO1xyXG4gICAgJCgnLmRpck9wdGlvbi5hY3RpdmUnKS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XHJcbiAgICBsZXQgaW5kZXggPSAkKHRoaXMpLmFkZENsYXNzKCdhY3RpdmUnKS5pbmRleCgpO1xyXG4gICAgJCgnLmRpcmVjdGlvbnNfX3BpY3R1cmUuYWN0aXZlJykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gICAgJCgnLmRpcmVjdGlvbnNfX3BpY3R1cmUnKS5lcShpbmRleCkuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gICAgJCgnLmRpcmVjdGlvbnNfX2ltYWdlJykucmVtb3ZlQ2xhc3MoJ2pzLWFuaW1hdGVkJyk7XHJcbiAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uICgpIHtcclxuICAgICAgJCgnLmRpcmVjdGlvbnNfX2ltYWdlJykuYWRkQ2xhc3MoJ2pzLWFuaW1hdGVkJyk7XHJcbiAgICB9LCAxMDApO1xyXG4gIH0pO1xyXG4gIC8qRGlyZWN0aW9ucyBpbWFnZSBjaGFuZ2Ugb24gaG92ZXIgRU5EKi9cclxuXHJcbiAgLypTZXJ2aWNlSXRlbSBtZW51IGFjY29yZGlvbiBTVEFSVCovXHJcbiAgJCgnLnNlcnZpY2VJdGVtX19pdGVtTGFiZWwnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XHJcbiAgICBpZiAoISQodGhpcykucGFyZW50KCkuaGFzQ2xhc3MoJ2FjdGl2ZScpKSB7XHJcbiAgICAgICQoJy5zZXJ2aWNlSXRlbV9faXRlbS5hY3RpdmUnKS5yZW1vdmVDbGFzcygnYWN0aXZlJykuZmluZCgnLnNlcnZpY2VJdGVtX19zdWJsaXN0Jykuc2xpZGVVcCgpO1xyXG4gICAgICAkKHRoaXMpLnBhcmVudCgpLmFkZENsYXNzKCdhY3RpdmUnKS5maW5kKCcuc2VydmljZUl0ZW1fX3N1Ymxpc3QnKS5zbGlkZURvd24oKTtcclxuICAgIH1cclxuICB9KTtcclxuICAkKCcuc2VydmljZUl0ZW1fX2l0ZW0uYWN0aXZlIC5zZXJ2aWNlSXRlbV9fc3VibGlzdCcpLnNsaWRlRG93bigwKTtcclxuICAvKlNlcnZpY2VJdGVtIG1lbnUgYWNjb3JkaW9uIEVORCovXHJcblxyXG4gIC8qUHJpY2UgcmFuZ2UgU1RBUlQqL1xyXG4gIHZhciBoYW5kbGVzU2xpZGVyID0gJCgnLmxheW91dC1zbGlkZXInKVswXTtcclxuICB2YXIgcmFuZ2VTbGlkZXIgPSBub1VpU2xpZGVyLmNyZWF0ZShoYW5kbGVzU2xpZGVyLCB7XHJcbiAgICBzdGFydDogWzMwMCwgMTAwMF0sXHJcbiAgICB0b29sdGlwczogdHJ1ZSxcclxuICAgIGZvcm1hdDoge1xyXG4gICAgICAvLyAndG8nIHRoZSBmb3JtYXR0ZWQgdmFsdWUuIFJlY2VpdmVzIGEgbnVtYmVyLlxyXG4gICAgICB0bzogZnVuY3Rpb24gKHZhbHVlKSB7XHJcbiAgICAgICAgcmV0dXJuIHBhcnNlSW50KHZhbHVlKTtcclxuICAgICAgfSxcclxuICAgICAgLy8gJ2Zyb20nIHRoZSBmb3JtYXR0ZWQgdmFsdWUuXHJcbiAgICAgIC8vIFJlY2VpdmVzIGEgc3RyaW5nLCBzaG91bGQgcmV0dXJuIGEgbnVtYmVyLlxyXG4gICAgICBmcm9tOiBmdW5jdGlvbiAodmFsdWUpIHtcclxuICAgICAgICByZXR1cm4gcGFyc2VJbnQodmFsdWUpO1xyXG4gICAgICB9XHJcbiAgICB9LFxyXG4gICAgcmFuZ2U6IHtcclxuICAgICAgJ21pbic6IFswXSxcclxuICAgICAgJ21heCc6IFsxNTAwXVxyXG4gICAgfSxcclxuICAgIGNvbm5lY3Q6IHRydWVcclxuICB9KS5vbignY2hhbmdlLm9uZScsIGZ1bmN0aW9uICh2YWx1ZXMpIHtcclxuICAgIGNvbnNvbGUubG9nKHZhbHVlcyk7XHJcbiAgICAkKCcuY2FsY19fcmFuZ2VWYWx1ZV9maXJzdCcpLnZhbCh2YWx1ZXNbMF0pO1xyXG4gICAgJCgnLmNhbGNfX3JhbmdlVmFsdWVfbGFzdCcpLnZhbCh2YWx1ZXNbMV0pO1xyXG4gIH0pO1xyXG5cclxuICAkKCcuY2FsY19fcmFuZ2VWYWx1ZV9maXJzdCcpLm9uKCdjaGFuZ2UnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICBoYW5kbGVzU2xpZGVyLm5vVWlTbGlkZXIuc2V0SGFuZGxlKDAsICBOdW1iZXIoJCh0aGlzKS52YWwoKSksIHRydWUpO1xyXG4gIH0pO1xyXG4gICQoJy5jYWxjX19yYW5nZVZhbHVlX2xhc3QnKS5vbignY2hhbmdlJywgZnVuY3Rpb24gKCkge1xyXG4gICAgaGFuZGxlc1NsaWRlci5ub1VpU2xpZGVyLnNldEhhbmRsZSgxLCAgTnVtYmVyKCQodGhpcykudmFsKCkpLCB0cnVlKTtcclxuICB9KTtcclxuICAvKlByaWNlIHJhbmdlIEVORCovXHJcblxyXG4gIC8qQ2FsYyBuYXZpZ2F0aW9uIFNUQVJUKi9cclxuICAkKCcuY2FsY19fbWFpblN0ZXBCbG9jayAuY2FsY19fb3B0aW9uSXRlbScpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcclxuICAgIGxldCBpbmRleCA9ICQoJy5jYWxjX19tYWluU3RlcEJsb2NrIC5jYWxjX19vcHRpb25JdGVtJykuaW5kZXgodGhpcyk7XHJcbiAgICAkKCcuY2FsY19fbWFpblN0ZXBCbG9jaycpLnJlbW92ZUNsYXNzKCdhY3RpdmUnKTtcclxuICAgICQoJy5jYWxjX19ibG9jaycpLmVxKGluZGV4KS5maW5kKCcuY2FsY19fc3RlcEJsb2NrJykuZXEoMCkuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gIH0pO1xyXG5cclxuICAkKCcuY2FsY19fc3RlcEJsb2NrIC5jYWxjX19vcHRpb25JdGVtJykub24oJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xyXG4gICAgbGV0IGN1cnJlbnQgPSAkKHRoaXMpLmNsb3Nlc3QoJy5jYWxjX19zdGVwQmxvY2suYWN0aXZlJyk7XHJcbiAgICBjdXJyZW50LnJlbW92ZUNsYXNzKCdhY3RpdmUnKTtcclxuICAgIGN1cnJlbnQubmV4dCgnLmNhbGNfX3N0ZXBCbG9jaycpLmFkZENsYXNzKCdhY3RpdmUnKTtcclxuICB9KTtcclxuXHJcbiAgJCgnLmNhbGNfX25leHQnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XHJcbiAgICBsZXQgY3VycmVudCA9ICQodGhpcykuY2xvc2VzdCgnLmNhbGNfX3N0ZXBCbG9jay5hY3RpdmUnKTtcclxuICAgIGlmIChjdXJyZW50Lm5leHQoJy5jYWxjX19zdGVwQmxvY2snKS5sZW5ndGgpIHtcclxuICAgICAgY3VycmVudC5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XHJcbiAgICAgIGN1cnJlbnQubmV4dCgnLmNhbGNfX3N0ZXBCbG9jaycpLmFkZENsYXNzKCdhY3RpdmUnKTtcclxuICAgIH0gZWxzZSB7XHJcbiAgICAgIGFsZXJ0KCdUSEUgRU5EJyk7XHJcbiAgICB9XHJcbiAgfSk7XHJcbiAgJCgnLmNhbGNfX3ByZXYnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XHJcbiAgICBsZXQgY3VycmVudCA9ICQodGhpcykuY2xvc2VzdCgnLmNhbGNfX3N0ZXBCbG9jay5hY3RpdmUnKTtcclxuICAgIGlmIChjdXJyZW50LnByZXYoJy5jYWxjX19zdGVwQmxvY2snKS5sZW5ndGgpIHtcclxuICAgICAgY3VycmVudC5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XHJcbiAgICAgIGN1cnJlbnQucHJldignLmNhbGNfX3N0ZXBCbG9jaycpLmFkZENsYXNzKCdhY3RpdmUnKTtcclxuICAgIH0gZWxzZSB7XHJcbiAgICAgIGN1cnJlbnQucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gICAgICAkKCcuY2FsY19fbWFpblN0ZXBCbG9jaycpLmFkZENsYXNzKCdhY3RpdmUnKTtcclxuICAgIH1cclxuICB9KTtcclxuICAvKkNhbGMgbmF2aWdhdGlvbiBFTkQqL1xyXG59KTsiXX0=
