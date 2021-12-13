import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    products: []
  },
  mutations: {
    setProducts(state, payload) {
      state.products = payload
    }
  },
  actions: {
    async getProducts({commit}) {
      try {
        const res = await fetch('http://laika.test/backend/public/products')
        const data = await res.json()
        const arrayProducts = []
        for(let id in data) {
          arrayProducts.push(data[id])
        }
        console.log(data)
        commit('setProducts', arrayProducts)
      } catch (error) {
        console.log(error)
      }
    }
  },
  modules: {
  }
})
