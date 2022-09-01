Vue.config.devtools = true;

const app = new Vue({
  el: "#root",
  data: {
    movies: [],
    search: "",
  },
  methods: {
    fetchData() {
      axios.get("http://localhost:8888/demo/php-ajax-dischi/api/api.php/").then(() => {
        this.movies = res.data;
      });
    },
  },
  mounted() {
    this.fetchData();
  },
});
