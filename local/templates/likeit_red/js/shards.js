'use strict';

$(document).ready(function () {
  /*facts count animation START*/
  function startCount() {
    if (!$('.facts__value .done').length) {
      $('.facts__value span').each(function (index, elem) {
        $(elem).addClass('done');
        var initValue = Number(elem.dataset.goal),
            step = Number(elem.dataset.step);
        var countInterval = setInterval(function () {
          var currentVal = Number($(elem).text());
          if (currentVal >= initValue) {
            clearInterval(countInterval);
          } else {
            $(elem).text(currentVal + step);
          }
        }, 100);
      });
    }
  }
  /*facts count animation END*/

  /*facts shard load START*/
  var factsTop = $('.facts').offset().top;
  function checkFactsOffset() {
    if (window.pageYOffset > factsTop) {
      $('.facts .js-unload').removeClass('js-unload');
    }
    if (window.pageYOffset > factsTop - 200) {
      startCount();
    }
  };
  checkFactsOffset();
  $(window).on('scroll', function () {
    checkFactsOffset();
  });
  /*facts shard load END*/

  /* parallax START*/
  $(".image_small, .header__elements .header__image_small img, .facts__image_small img").paroller({ factor: 0.08, type: 'foreground', direction: 'vertical', transition: 'transform 0.3s' });
  $(".image_big, .header__elements .header__image_big img, .facts__image_big img").paroller({ factor: 0.3, type: 'foreground', direction: 'vertical', transition: 'transform 0.3s' });
  $(".image_blur, .header__elements .header__image_blur img, .facts__image_blur img").paroller({ factor: 0.1, type: 'foreground', direction: 'vertical', transition: 'transform 0.3s' });
  // $(".header__elements .header__image:not(.header__image_bgLeft):not(.header__image_bgRight) img, .directions__elements .directions__image img, .facts__elements .facts__image img").paroller({ factor: 0.2, factorXs: 0.1, type: 'foreground', direction: 'vertical', transition: 'transform 0.3s' });
  // $(".header__elements .header__image.header__image_bgLeft img, .header__elements .header__image.header__image_bgRight img").paroller({ factor: 0.2, factorXs: 0.1, type: 'foreground', direction: 'vertical',transition: 'transform 0.3s' });
  /*var currentX = '';
  var currentY = '';
  var movementConstant = .005;
  $(document).on('mousemove', function(e) {
    console.log('asd');
    if(currentX == '') currentX = e.pageX;
    var xdiff = e.pageX - currentX;
    currentX = e.pageX;
    if(currentY == '') currentY = e.pageY;
    var ydiff = e.pageY - currentY;
    currentY = e.pageY;
    $('.header__elements .header__image').each(function(i, el) {
      var movement = (i + 1) * (xdiff * movementConstant);
      var movementy = (i + 1) * (ydiff * movementConstant);
      var newX = $(el).position().left + movement;
      var newY = $(el).position().top + movementy;
      $(el).css('left', newX + 'px');
      $(el).css('top', newY + 'px');
    });
  });*/
  /* parallax END*/
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNoYXJkcy5qcyJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsInN0YXJ0Q291bnQiLCJsZW5ndGgiLCJlYWNoIiwiaW5kZXgiLCJlbGVtIiwiYWRkQ2xhc3MiLCJpbml0VmFsdWUiLCJOdW1iZXIiLCJkYXRhc2V0IiwiZ29hbCIsInN0ZXAiLCJjb3VudEludGVydmFsIiwic2V0SW50ZXJ2YWwiLCJjdXJyZW50VmFsIiwidGV4dCIsImNsZWFySW50ZXJ2YWwiLCJmYWN0c1RvcCIsIm9mZnNldCIsInRvcCIsImNoZWNrRmFjdHNPZmZzZXQiLCJ3aW5kb3ciLCJwYWdlWU9mZnNldCIsInJlbW92ZUNsYXNzIiwib24iLCJwYXJvbGxlciIsImZhY3RvciIsImZhY3RvclhzIiwidHlwZSIsImRpcmVjdGlvbiJdLCJtYXBwaW5ncyI6Ijs7QUFBQUEsRUFBRUMsUUFBRixFQUFZQyxLQUFaLENBQWtCLFlBQVk7QUFDNUI7QUFDQSxXQUFTQyxVQUFULEdBQXNCO0FBQ3BCLFFBQUksQ0FBQ0gsRUFBRSxxQkFBRixFQUF5QkksTUFBOUIsRUFBc0M7QUFDcENKLFFBQUUsb0JBQUYsRUFBd0JLLElBQXhCLENBQTZCLFVBQVVDLEtBQVYsRUFBaUJDLElBQWpCLEVBQXVCO0FBQ2xEUCxVQUFFTyxJQUFGLEVBQVFDLFFBQVIsQ0FBaUIsTUFBakI7QUFDQSxZQUFNQyxZQUFZQyxPQUFPSCxLQUFLSSxPQUFMLENBQWFDLElBQXBCLENBQWxCO0FBQUEsWUFDRUMsT0FBT0gsT0FBT0gsS0FBS0ksT0FBTCxDQUFhRSxJQUFwQixDQURUO0FBRUEsWUFBSUMsZ0JBQWdCQyxZQUFZLFlBQVk7QUFDMUMsY0FBSUMsYUFBYU4sT0FBT1YsRUFBRU8sSUFBRixFQUFRVSxJQUFSLEVBQVAsQ0FBakI7QUFDQSxjQUFJRCxjQUFjUCxTQUFsQixFQUE2QjtBQUMzQlMsMEJBQWNKLGFBQWQ7QUFDRCxXQUZELE1BRU87QUFDTGQsY0FBRU8sSUFBRixFQUFRVSxJQUFSLENBQWFELGFBQWFILElBQTFCO0FBQ0Q7QUFDRixTQVBtQixFQU9qQixHQVBpQixDQUFwQjtBQVFELE9BWkQ7QUFhRDtBQUNGO0FBQ0Q7O0FBRUE7QUFDQSxNQUFJTSxXQUFXbkIsRUFBRSxRQUFGLEVBQVlvQixNQUFaLEdBQXFCQyxHQUFwQztBQUNBLFdBQVNDLGdCQUFULEdBQTRCO0FBQzFCLFFBQUlDLE9BQU9DLFdBQVAsR0FBcUJMLFFBQXpCLEVBQW1DO0FBQ2pDbkIsUUFBRSxtQkFBRixFQUF1QnlCLFdBQXZCLENBQW1DLFdBQW5DO0FBQ0Q7QUFDRCxRQUFJRixPQUFPQyxXQUFQLEdBQXFCTCxXQUFXLEdBQXBDLEVBQXlDO0FBQ3ZDaEI7QUFDRDtBQUNGO0FBQ0RtQjtBQUNBdEIsSUFBRXVCLE1BQUYsRUFBVUcsRUFBVixDQUFhLFFBQWIsRUFBdUIsWUFBWTtBQUNqQ0o7QUFDRCxHQUZEO0FBR0E7O0FBRUE7QUFDQXRCLElBQUUsK0tBQUYsRUFBbUwyQixRQUFuTCxDQUE0TCxFQUFFQyxRQUFRLEdBQVYsRUFBZUMsVUFBVSxHQUF6QixFQUE4QkMsTUFBTSxZQUFwQyxFQUFrREMsV0FBVyxVQUE3RCxFQUE1TDtBQUNBL0IsSUFBRSx1SEFBRixFQUEySDJCLFFBQTNILENBQW9JLEVBQUVDLFFBQVEsR0FBVixFQUFlQyxVQUFVLEdBQXpCLEVBQThCQyxNQUFNLFlBQXBDLEVBQWtEQyxXQUFXLFVBQTdELEVBQXBJO0FBQ0E7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBb0JBO0FBQ0QsQ0E3REQiLCJmaWxlIjoic2hhcmRzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xyXG4gIC8qZmFjdHMgY291bnQgYW5pbWF0aW9uIFNUQVJUKi9cclxuICBmdW5jdGlvbiBzdGFydENvdW50KCkge1xyXG4gICAgaWYgKCEkKCcuZmFjdHNfX3ZhbHVlIC5kb25lJykubGVuZ3RoKSB7XHJcbiAgICAgICQoJy5mYWN0c19fdmFsdWUgc3BhbicpLmVhY2goZnVuY3Rpb24gKGluZGV4LCBlbGVtKSB7XHJcbiAgICAgICAgJChlbGVtKS5hZGRDbGFzcygnZG9uZScpO1xyXG4gICAgICAgIGNvbnN0IGluaXRWYWx1ZSA9IE51bWJlcihlbGVtLmRhdGFzZXQuZ29hbCksXHJcbiAgICAgICAgICBzdGVwID0gTnVtYmVyKGVsZW0uZGF0YXNldC5zdGVwKTtcclxuICAgICAgICBsZXQgY291bnRJbnRlcnZhbCA9IHNldEludGVydmFsKGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgIGxldCBjdXJyZW50VmFsID0gTnVtYmVyKCQoZWxlbSkudGV4dCgpKTtcclxuICAgICAgICAgIGlmIChjdXJyZW50VmFsID49IGluaXRWYWx1ZSkge1xyXG4gICAgICAgICAgICBjbGVhckludGVydmFsKGNvdW50SW50ZXJ2YWwpO1xyXG4gICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgJChlbGVtKS50ZXh0KGN1cnJlbnRWYWwgKyBzdGVwKTtcclxuICAgICAgICAgIH1cclxuICAgICAgICB9LCAxMDApO1xyXG4gICAgICB9KTtcclxuICAgIH1cclxuICB9XHJcbiAgLypmYWN0cyBjb3VudCBhbmltYXRpb24gRU5EKi9cclxuXHJcbiAgLypmYWN0cyBzaGFyZCBsb2FkIFNUQVJUKi9cclxuICBsZXQgZmFjdHNUb3AgPSAkKCcuZmFjdHMnKS5vZmZzZXQoKS50b3A7XHJcbiAgZnVuY3Rpb24gY2hlY2tGYWN0c09mZnNldCgpIHtcclxuICAgIGlmICh3aW5kb3cucGFnZVlPZmZzZXQgPiBmYWN0c1RvcCkge1xyXG4gICAgICAkKCcuZmFjdHMgLmpzLXVubG9hZCcpLnJlbW92ZUNsYXNzKCdqcy11bmxvYWQnKTtcclxuICAgIH1cclxuICAgIGlmICh3aW5kb3cucGFnZVlPZmZzZXQgPiBmYWN0c1RvcCAtIDIwMCkge1xyXG4gICAgICBzdGFydENvdW50KCk7XHJcbiAgICB9XHJcbiAgfTtcclxuICBjaGVja0ZhY3RzT2Zmc2V0KCk7XHJcbiAgJCh3aW5kb3cpLm9uKCdzY3JvbGwnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICBjaGVja0ZhY3RzT2Zmc2V0KCk7XHJcbiAgfSk7XHJcbiAgLypmYWN0cyBzaGFyZCBsb2FkIEVORCovXHJcblxyXG4gIC8qIHBhcmFsbGF4IFNUQVJUKi9cclxuICAkKFwiLmhlYWRlcl9fZWxlbWVudHMgLmhlYWRlcl9faW1hZ2U6bm90KC5oZWFkZXJfX2ltYWdlX2JnTGVmdCk6bm90KC5oZWFkZXJfX2ltYWdlX2JnUmlnaHQpIGltZywgLmRpcmVjdGlvbnNfX2VsZW1lbnRzIC5kaXJlY3Rpb25zX19pbWFnZSBpbWcsIC5mYWN0c19fZWxlbWVudHMgLmZhY3RzX19pbWFnZSBpbWdcIikucGFyb2xsZXIoeyBmYWN0b3I6IDAuMiwgZmFjdG9yWHM6IDAuMSwgdHlwZTogJ2ZvcmVncm91bmQnLCBkaXJlY3Rpb246ICd2ZXJ0aWNhbCcgfSk7XHJcbiAgJChcIi5oZWFkZXJfX2VsZW1lbnRzIC5oZWFkZXJfX2ltYWdlLmhlYWRlcl9faW1hZ2VfYmdMZWZ0IGltZywgLmhlYWRlcl9fZWxlbWVudHMgLmhlYWRlcl9faW1hZ2UuaGVhZGVyX19pbWFnZV9iZ1JpZ2h0IGltZ1wiKS5wYXJvbGxlcih7IGZhY3RvcjogMC4yLCBmYWN0b3JYczogMC4xLCB0eXBlOiAnZm9yZWdyb3VuZCcsIGRpcmVjdGlvbjogJ3ZlcnRpY2FsJyB9KTtcclxuICAvKnZhciBjdXJyZW50WCA9ICcnO1xyXG4gIHZhciBjdXJyZW50WSA9ICcnO1xyXG4gIHZhciBtb3ZlbWVudENvbnN0YW50ID0gLjAwNTtcclxuICAkKGRvY3VtZW50KS5vbignbW91c2Vtb3ZlJywgZnVuY3Rpb24oZSkge1xyXG4gICAgY29uc29sZS5sb2coJ2FzZCcpO1xyXG4gICAgaWYoY3VycmVudFggPT0gJycpIGN1cnJlbnRYID0gZS5wYWdlWDtcclxuICAgIHZhciB4ZGlmZiA9IGUucGFnZVggLSBjdXJyZW50WDtcclxuICAgIGN1cnJlbnRYID0gZS5wYWdlWDtcclxuICAgIGlmKGN1cnJlbnRZID09ICcnKSBjdXJyZW50WSA9IGUucGFnZVk7XHJcbiAgICB2YXIgeWRpZmYgPSBlLnBhZ2VZIC0gY3VycmVudFk7XHJcbiAgICBjdXJyZW50WSA9IGUucGFnZVk7XHJcbiAgICAkKCcuaGVhZGVyX19lbGVtZW50cyAuaGVhZGVyX19pbWFnZScpLmVhY2goZnVuY3Rpb24oaSwgZWwpIHtcclxuICAgICAgdmFyIG1vdmVtZW50ID0gKGkgKyAxKSAqICh4ZGlmZiAqIG1vdmVtZW50Q29uc3RhbnQpO1xyXG4gICAgICB2YXIgbW92ZW1lbnR5ID0gKGkgKyAxKSAqICh5ZGlmZiAqIG1vdmVtZW50Q29uc3RhbnQpO1xyXG4gICAgICB2YXIgbmV3WCA9ICQoZWwpLnBvc2l0aW9uKCkubGVmdCArIG1vdmVtZW50O1xyXG4gICAgICB2YXIgbmV3WSA9ICQoZWwpLnBvc2l0aW9uKCkudG9wICsgbW92ZW1lbnR5O1xyXG4gICAgICAkKGVsKS5jc3MoJ2xlZnQnLCBuZXdYICsgJ3B4Jyk7XHJcbiAgICAgICQoZWwpLmNzcygndG9wJywgbmV3WSArICdweCcpO1xyXG4gICAgfSk7XHJcbiAgfSk7Ki9cclxuICAvKiBwYXJhbGxheCBFTkQqL1xyXG59KTsiXX0=
