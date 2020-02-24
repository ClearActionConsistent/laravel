import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        tape: {
            movie_id: '',
            size: ''
        }
    },
    getters: {},
    mutations: {
        changeMovieId(state, id){
            state.tape.movie_id = id;
        },
        changeSize(state, size){
            state.tape.size = size;
        }
    },
    actions: {}
});