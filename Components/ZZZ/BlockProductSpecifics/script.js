import $ from 'jquery'
import 'core-js/es/number'
import Swiper, {
  Navigation,
  A11y,
  Autoplay,
  Pagination,
  EffectFade,
  Thumbs
} from 'swiper/swiper.esm'
import 'swiper/swiper-bundle.css'

Swiper.use([Navigation, A11y, Autoplay, Pagination, Thumbs])

class BlockProductSpecifics extends window.HTMLDivElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.props = this.getInitialProps()
    this.resolveElements()
  }

  getInitialProps () {
    let data = {}
    try {
      data = JSON.parse($('script[type="application/json"]', this).text())
    } catch (e) {}
    return data
  }

  resolveElements () {
    this.$sliderTop = $('.sliderTop', this)
    this.$sliderThumb = $('.sliderThumb', this)
    this.$sliderItems = $('.swiper-slide', this)
    this.$buttonNext = $('[data-slider-button="next"]', this)
    this.$buttonPrev = $('[data-slider-button="prev"]', this)
    this.$pagination = $('[data-slider-pagination]', this)
  }

  // connectedCallback () {
  //   this.initSlider()
  //   this.initSliderThumb()
  // }

  connectedCallback () {
    if (this.$sliderItems.length > 1) {
      this.initSlider()
    }
  }

  initSliderThumb () {
    const config = {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true
    }
    this.slider = new Swiper(this.$sliderThumb.get(0), config)
  }

  initSlider () {
    const config = {
      pagination: {
        el: this.$pagination.get(0),
        type: 'bullets',
        clickable: true
      },
      navigation: {
        nextEl: this.$buttonNext.get(0),
        prevEl: this.$buttonPrev.get(0)
      },
      slidesPerView: 1,
      centeredSlides: true,
      loop: true,
      effect: 'fade',
      // speed: 1000,
      // watchSlidesProgress: true,
      thumbs: {
        swiper: this.sliderThumb
      }
    }
    this.slider = new Swiper(this.$sliderTop.get(0), config)
  }
}

window.customElements.define('flynt-block-product-specifics', BlockProductSpecifics, { extends: 'div' })
