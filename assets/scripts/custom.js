import $ from 'jquery'

$(document).ready(function () {
  var headerHeight = $('header').outerHeight() // Target your header navigation here
  $('.menu-submenu li a').click(function (e) {
    var targetHref = $(this).attr('href')

    targetHref = targetHref.substring(targetHref.indexOf('#'))

    // Store hash
    // var hashWithoutDash = this.hash.replace('/', '') // remove dash from hash to make $(hashWithoutDash).offset() worked

    $('html, body').animate({
      scrollTop: $(targetHref).offset().top - headerHeight // Add it to the calculation here
    }, 500)

    e.preventDefault()
  })
})

$(document).ready(function () {
  $('.accessibility-toggle').click(function () {
    $('.accessibility').toggleClass('inView')
  })
  $('.blackWhite').click(function () {
    $('html').toggleClass('high-contrast')
  })
  $('.fontSizebigger').click(function () {
    $('html').toggleClass('font-bigger')
    $('html').removeClass('font-smaller')
  })
  $('.fontSizesmaller').click(function () {
    $('html').toggleClass('font-smaller')
    $('html').removeClass('font-bigger')
  })
})

$(document).ready(function () {
  $('.overlay-toggle').click(function () {
    $('.pageWrapper').toggleClass('about-open')
    $('.overlay-toggle').toggle()
    $('.overlay-close').toggle()
    $('.overlay-about').toggle()
  })
  $('.overlay-close').click(function () {
    $('.pageWrapper').toggleClass('about-open')
    $('.overlay-toggle').toggle()
    $('.overlay-close').toggle()
    $('.overlay-about').toggle()
  })
})

// Play Button
$(document).ready(function () {
  $('.playButton').click(function () {
    $('.player').toggle()
  })
})

// Filters
var itemsTopic = $('.grid-item')
$('.filterSection .category').on('click', function (e) {
  e.preventDefault()
  var $this = $(this)
  var catTopic = $this.attr('data-term')
  itemsTopic.filter(':visible').hide()
  itemsTopic.filter('[data-term="' + catTopic + '"]').show()
  $this.toggleClass('active')
  console.log(catTopic)
})

// Filters
// var itemsFormat = $('.grid-item')
// $('.filterSection .category').on('click', function (e) {
//   e.preventDefault()
//   var $this = $(this)
//   var catFormat = $this.attr('data-format')
//   itemsFormat.filter(':visible').hide()
//   itemsFormat.filter('[data-format="' + catFormat + '"]').show()
//   $this.toggleClass('active')
//   console.log(catFormat)
// })
