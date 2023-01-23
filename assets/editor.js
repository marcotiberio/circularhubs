import './scripts/publicPath'
import './editor.scss'

function importAll (r) {
  r.keys().forEach(r)
}

importAll(require.context('../Components/', true, /\/editor\.js$/))
