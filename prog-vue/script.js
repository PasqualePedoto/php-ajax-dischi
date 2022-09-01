Vue.config.devtools = true;

const app = new Vue({
  el: "#root",
  data: {
    movies: [],
    search: "",
  },
  methods: {
    fetchData() {
      axios.get("../api/api.php").then((res) => {
        this.movies = res.data;
      });
    },
    fetchMovies() {
      axios.get(`../api/api.php/?search=${this.search}`).then((res) => {
        this.movies = res.data;
      });
    },
  },
  mounted() {
    this.fetchData();
  },
});
