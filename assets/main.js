import './scripts/publicPath'
import 'console-polyfill'
import 'normalize.css/normalize.css'
import './main.scss'
import $ from 'jquery'
import feather from 'feather-icons'
import 'core-js/es/number'
import Swiper, { Navigation, A11y, Autoplay, Pagination, EffectFade, Thumbs } from 'swiper/swiper.esm'
import 'swiper/swiper-bundle.css'
import smoothscroll from 'smoothscroll-polyfill'
import './scripts/custom.js'
import './scripts/filters.js'
import './scripts/navigation.js'

import installCE from 'document-register-element/pony'

Swiper.use([Navigation, A11y, Autoplay, Pagination, EffectFade, Thumbs])

window.jQuery = $

window.lazySizesConfig = window.lazySizesConfig || {}
window.lazySizesConfig.preloadAfterLoad = true
require('lazysizes')

$(document).ready(function () {
  feather.replace({
    'stroke-width': 1
  })
})

installCE(window, {
  type: 'force',
  noBuiltIn: true
})

function importAll (r) {
  r.keys().forEach(r)
}

smoothscroll.polyfill()

// main.js
// var msnry = new Masonry('.grid', {
//   itemSelector: '.grid-item',
//   columnWidth: 200
// })

importAll(require.context('../Components/', true, /\/script\.js$/))
require.resolve('./scripts/custom.js')
require.resolve('./scripts/filters.js')
require.resolve('./scripts/navigation.js')
