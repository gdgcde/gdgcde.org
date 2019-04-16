import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    drawer: false,
    items: [
      { text: "Inicio", to: "/", icon: "home" },
      { text: "Eventos", to: "/eventos", icon: "rounded_corner" },
      { text: "Team", to: "/equipo", icon: "group" },
      { text: "Acerca", to: "/acerca", icon: "toc" },
      { text: "Contacto", to: "/contacto", icon: "person" }
    ]
  },
  getters: {
    links: state => {
      return state.items;
    }
  },
  mutations: {
    setDrawer: (state, payload) => (state.drawer = payload),
    toggleDrawer: state => (state.drawer = !state.drawer)
  },
  actions: {}
});
