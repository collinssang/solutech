import Vue from 'vue'
import Vuex from 'vuex'
import actions from './actions'
import mutations from './mutations'
import getters from './getters'
import state from "./state";
// import store from './store';


Vue.use(Vuex);

export default new Vuex.Store({
    state,
    mutations,
    getters,
    actions
})