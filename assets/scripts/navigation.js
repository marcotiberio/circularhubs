import $ from 'jquery'

// $(document).ready(function () {
//   var scrollPos = 0
//   var navDesktop = document.querySelector('header')

//   function checkScrollUp () {
//     var windowY = window.scrollY
//     console.log([windowY, scrollPos])
//     var showHeader

//     if (windowY < scrollPos) {
//       // Scrolling UP - SHOWS THE HEADER
//       showHeader = true
//     } else {
//       // Scrolling DOWN - HIDES THE HEADER
//       showHeader = false
//     }

//     if (windowY < 40) {
//       showHeader = true
//     }

//     if (showHeader) {
//       navDesktop.classList.remove('mainHeaderOut')
//     } else {
//       navDesktop.classList.add('mainHeaderOut')
//     }

//     scrollPos = windowY
//   }

//   window.addEventListener('scroll', checkScrollUp)
// })

// $(document).ready(function () {
//   $('.filter-events').click(function (e) {
//     $('.grid-item--podcast').fadeToggle()
//     $('.grid-item--article').fadeToggle()
//     $(this).toggleClass('filter--active')
//     if ($(this).is('.filter--active')) {
//       $('.grid-item--event').css({ position: 'initial' })
//     } else if ($(this).not('.filter--active')) {
//       $('.grid-item--event').css({ position: 'absolute' })
//     }
//   })

//   $('.filter-articles').click(function (e) {
//     $('.grid-item--event').fadeToggle()
//     $('.grid-item--podcast').fadeToggle()
//     $('.grid-item--article').css('position', 'static')
//     $(this).toggleClass('filter--active')
//     if ($(this).is('.filter--active')) {
//       $('.grid-item--article').css({ position: 'initial' })
//     } else if ($(this).not('.filter--active')) {
//       $('.grid-item--article').css({ position: 'absolute' })
//     }
//   })

//   $('.filter-podcasts').click(function (e) {
//     $('.grid-item--event').fadeToggle()
//     $('.grid-item--article').fadeToggle()
//     $(this).toggleClass('filter--active')
//     if ($(this).is('.filter--active')) {
//       $('.grid-item--podcast').css({ position: 'initial' })
//     } else if ($(this).not('.filter--active')) {
//       $('.grid-item--podcast').css({ position: 'absolute' })
//     }
//   })
// })
