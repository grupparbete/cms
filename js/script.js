'use strict'

$(window).scroll(function (event) {
  let scroll = $(window).scrollTop()
  if (scroll === 0) {
    $('.navbar').removeClass('scrolling')
  } else {
    $('.navbar').addClass('scrolling')
  }
})
