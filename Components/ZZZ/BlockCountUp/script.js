
/* globals IntersectionObserver */
import $ from 'jquery'
import 'intersection-observer'
import { CountUp } from 'countup.js'

class BlockCountUp extends window.HTMLDivElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.resolveElements()
  }

  resolveElements () {
    this.$items = $('.item', this)
    this.$blockCountContainer = $('.blockCountUp', this)
  }

  connectedCallback () {
    this.observer = new IntersectionObserver(this.triggerAnimation.bind(this), {
      threshold: 1.0
    })
    $.each(this.$items, (i, item) => {
      this.observer.observe(item)
    })

    this.separators = {
      decimal: this.$blockCountContainer.data('separator-decimal'),
      thousands: this.$blockCountContainer.data('separator-thousands')
    }

    if (!this.separators.decimal) {
      this.separators.decimal = ','
    }

    if (!this.separators.thousands) {
      this.separators.thousands = '.'
    }
  }

  countDecimals (number) {
    if (Math.floor(number.valueOf()) === number.valueOf()) return 0
    return number.toString().split('.')[1].length || 0
  }

  triggerAnimation (entries) {
    entries.forEach(entry => {
      if (entry.intersectionRatio > 0) {
        this.observer.unobserve(entry.target)
        const $numbers = $(entry.target).find('.number')

        $.each($numbers, (i, number) => {
          const $number = $(number)
          const displayNumber = Number($number.data('number'))
          const displaySuffix = $number.data('suffix')
          const displayPrefix = $number.data('prefix')
          const duration = 2
          const count = new CountUp(number, displayNumber, {
            duration: duration,
            decimalPlaces: this.countDecimals(displayNumber),
            prefix: displayPrefix,
            suffix: displaySuffix,
            separator: this.separators.thousands,
            decimal: this.separators.decimal
          })
          count.start()
        })
      }
    })
  }
}

window.customElements.define('flynt-block-count-up', BlockCountUp, { extends: 'div' })
