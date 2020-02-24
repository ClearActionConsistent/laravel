import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        tape: {
            movieId: '',
            size: ''
        }
    },
    getters: {},
    mutations: {
        changeMovieId(state, id){
            state.tape.movieId = id;
        },
        changeSize(state, size){
            state.tape.size = size;
        },
        changeTape(state, tape){
            state.tape.movieId = tape.movie_id;
            state.tape.size = tape.size;
        }
    },
    actions: {}
});