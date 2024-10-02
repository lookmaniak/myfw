import '../../assets/js/mithril.min.js'
import '../../assets/js/bootstrap.bundle.min.js'
import { getUrl } from './helpers/utils.js'

const App = {
    message: null,
    oninit: function() {
        m.request({
            method: 'POST',
            url: getUrl('home'),
            body: {
                message: 'Hello server, i mean to be hello!',
                id: 50, 
            }
        }).then( req => {
            this.message = req.message
        }).catch( err => {
            this.message = err.response.message
        })
    },
    view: function()  {
        return m('h1', this.message)
    }
}


m.mount(document.getElementById("app"), App);