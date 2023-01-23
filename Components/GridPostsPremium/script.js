/* eslint-disable comma-dangle */
/* eslint-disable semi */
/* eslint-disable space-before-function-paren */
import $ from 'jquery'
import queryString from 'query-string'

class GridPostsPremium extends window.HTMLDivElement {
  // eslint-disable-next-line space-before-function-paren
  constructor(...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init() {
    this.$ = $(this)
    this.resolveElements()
    this.bindFunctions()
    this.bindEvents()
  }

  resolveElements() {
    // this.$list = $('ul.grid', this)
    // this.$loader = $('.api-loader', this)
    // this.$loadMoreButton = $('[data-action="loadMore"]', this)
  }

  bindFunctions() {
    // this.onLoadMore = this.onLoadMore.bind(this)
    // this.filterItems = this.filterItems.bind(this)
  }

  bindEvents() {
    // this.$.on('click', '[data-action="loadMore"]', this.onLoadMore)
    // this.$.on('click', '[data-term]', this.filterItems)
  }
}

window.customElements.define('flynt-grid-posts-premium', GridPostsPremium, {
  extends: 'div'
})
