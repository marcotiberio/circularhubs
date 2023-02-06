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

// Filters
var item = $('.grid-item')
$('.filterSection .category').on('click', function (e) {
  e.preventDefault()
  var $this = $(this)
  var category = $this.attr('data-term')
  item.filter(':visible').hide()
  item.filter('[data-term="' + category + '"]').show()
  $this.addClass('active')
  $('.category').not($this).removeClass('active')
  console.log(category)
})

$('.filterSection .category--all').on('click', function (e) {
  $('.grid-item').show()
})

// All to Alle
$('#wpgmza_filter_select option[value=0]').text($('#wpgmza_filter_select option[value=0]').text().replace('All', 'Alle'))
