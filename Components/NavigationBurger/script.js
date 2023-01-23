import $ from 'jquery'
import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock'

class NavigationBurger extends window.HTMLElement {
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
    this.$menu = $('.menu', this)
    this.$menuButton = $('.hamburger', this)
    // this.$openSubmenu = $('.open-submenu', this)
    // this.$submenu = $('.menu-submenu', this)
  }

  bindFunctions () {
    this.triggerMenu = this.triggerMenu.bind(this)
    // this.toggleSubmenu = this.toggleSubmenu.bind(this)
  }

  bindEvents () {
    this.$.on('click', '[data-toggle-menu]', this.triggerMenu)
    // this.$openSubmenu.on('click', this.toggleSubmenu)
  }

  connectedCallback () {}

  triggerMenu (e) {
    this.$.toggleClass('flyntComponent-menuIsOpen')
    this.$menuButton.attr('aria-expanded', this.$menuButton.attr('aria-expanded') === 'false' ? 'true' : 'false')
    if (this.$.hasClass('flyntComponent-menuIsOpen')) {
      disableBodyScroll(this.$menu.get(0))
    } else {
      enableBodyScroll(this.$menu.get(0))
    }
  }

  // toggleSubmenu (e) {
  //   this.$submenu.slideToggle()
  // }
}

window.customElements.define('flynt-navigation-burger', NavigationBurger, {
  extends: 'nav'
})
