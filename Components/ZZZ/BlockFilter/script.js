import $ from 'jquery'

class BlockFilter extends window.HTMLElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.resolveElements()
    this.bindFunctions()
    this.bindEvents()
  }

  resolveElements () {
    this.$filterArtists = $('.filter-artists', this)
    this.$postArtist = $('.grid-item--Artist', this)
  }

  bindFunctions () {
    this.toggleArtists = this.toggleArtists.bind(this)
  }

  bindEvents () {
    this.$filterArtists.on('click', this.toggleArtists)
  }

  toggleArtists (e) {
    this.$postArtist.fadeToggle()
    console.log('test')
  }
}

window.customElements.define('flynt-block-filter', BlockFilter, { extends: 'div' })
