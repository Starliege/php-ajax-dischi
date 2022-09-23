var app = new Vue({
  el: "#app",
  data: {
    albumArr: [],
    loading: true,
  },
  created() {
    this.getAlbum();
  },
  methods: {
    getAlbum() {
      axios
        .get("http://localhost/php-ajax-dischi/versione_2/api.php")
        .then((response) => {
          // handle success
          console.log(response.data);
          this.albumArr = response.data;
          console.log(this.albumArr);
          this.loading = false;
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        });
    },
  },
});
