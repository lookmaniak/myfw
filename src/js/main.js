import '../../assets/js/mithril.min.js'
import '../../assets/js/bootstrap.bundle.min.js'
import { getUrl } from './helpers/utils.js'

const App = {
    message: null,
    oninit: function() {
        m.request({
            method: 'GET',
            url: getUrl('posts?id=6'),
            headers: {
                'Accept' : 'application/json'
            },
            body: {
                message: 'Hello world!',
                id: 50, 
            }
        }).then( req => {
            if(!req) {
                console.log(req)

            }


        }).catch( err => {
                console.log(err)
                this.message = err.response?.message ?? err
        })
    },
    view: function()  {
        return m('h1', this.message)
    }
}


m.mount(document.getElementById("app"), App);