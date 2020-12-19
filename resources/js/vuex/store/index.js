import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

import productsModule from '../modules/products'
import cartModule from '../modules/cart'
import courseModule from '../modules/courses'

export default new Vuex.Store({

    modules:{
        products: productsModule,
        cart: cartModule,
        course: courseModule
    }

})
