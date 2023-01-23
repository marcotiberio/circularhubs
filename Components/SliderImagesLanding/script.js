import $ from 'jquery'
import 'core-js/es/number'
import Swiper, { Navigation, A11y, Autoplay } from 'swiper/swiper.esm'
import 'swiper/swiper-bundle.css'

Swiper.use([Navigation, A11y, Autoplay])

class SliderImagesLanding extends window.HTMLDivElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.props = this.getInitialProps()
    this.resolveElements()
    this.bindFunctions()
    this.bindEvents()
  }

  getInitialProps () {
    let data = {}
    try {
      data = JSON.parse($('script[type="application/json"]', this).text())
    } catch (e) {}
    return data
  }

  resolveElements () {
    this.$slider = $('[data-slider]', this)
    this.$buttonNext = $('[data-slider-button="next"]', this)
    this.$buttonPrev = $('[data-slider-button="prev"]', this)

    // this.$buttonAbout = $('.overlay-toggle', this)
    // this.$closeAbout = $('.overlay-close', this)
    // this.$about = $('.overlay-about', this)
  }

  bindFunctions () {
    // this.toggleAbout = this.toggleAbout.bind(this)
    // this.closeAbout = this.closeAbout.bind(this)
  }

  bindEvents () {
    // this.$buttonAbout.on('click', this.toggleAbout)
    // this.$closeAbout.on('click', this.closeAbout)
  }

  connectedCallback () {
    this.initSlider()
  }

  initSlider () {
    const { options } = this.props
    const config = {
      navigation: {
        nextEl: this.$buttonNext.get(0),
        prevEl: this.$buttonPrev.get(0)
      },
      a11y: options.a11y,
      speed: 1,
      effect: 'fade'
    }
    if (options.autoplay && options.autoplaySpeed) {
      config.autoplay = {
        delay: options.autoplaySpeed
      }
    }
    this.slider = new Swiper(this.$slider.get(0), config)
  }

  // toggleAbout (e) {
  //   this.$about.css('display', 'flex')
  //   this.$closeAbout.toggle()
  // }

  // closeAbout (e) {
  //   this.$about.css('display', 'none')
  //   this.$closeAbout.toggle()
  // }
}

window.customElements.define('flynt-slider-images-landing', SliderImagesLanding, { extends: 'div' })
