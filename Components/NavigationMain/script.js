import $ from 'jquery'

class NavigationMain extends window.HTMLElement {
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
    this.$buttonSubmenu = $('.open-submenu', this)
    this.$submenu = $('.menu-submenu', this)
  }

  bindFunctions () {
    this.toggleSubmenu = this.toggleSubmenu.bind(this)
  }

  bindEvents () {
    this.$buttonSubmenu.on('click', this.toggleSubmenu)
  }

  toggleSubmenu (e) {
    this.$submenu.toggle()
  }
}

window.customElements.define('flynt-navigation-main', NavigationMain, { extends: 'nav' })
