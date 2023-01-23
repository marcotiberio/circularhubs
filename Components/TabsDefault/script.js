import $ from 'jquery'

class TabsDefault extends window.HTMLElement {
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
    this.toggleContent({ currentTarget: $('.tab-title')[0] })
  }

  resolveElements () {
    this.$tab = $('.tab-title', this)
    this.$content = $('.tab-content', this)
  }

  bindFunctions () {
    this.toggleContent = this.toggleContent.bind(this)
  }

  bindEvents () {
    this.$tab.on('click', this.toggleContent)
  }

  toggleContent (e) {
    const $panel = $(e.currentTarget)
    const $panelContentFirst = this.$content.first()
    const $cla = e.currentTarget.className.split(/\s+/)[1]
    const $panelNext = $panel.next()

    $panel.toggleClass('tab-title--active').attr('aria-expanded', 'true')
    $panelContentFirst.toggleClass('tab-content--show')

    $panel.siblings().removeClass('tab-title--active').attr('aria-expanded', 'false')
    $('.tab-content').removeClass('tab-content--show').end()
    $(`.${$cla}.tab-content`).addClass('tab-content--show')
  }
}

window.customElements.define('flynt-tabs-default', TabsDefault, { extends: 'div' })
