var app = new Vue(
  {
    el: '#root',
    data: {
      songs: []
    },
    methods: {
      getFaqsFromAPI() {
        axios.get('http://localhost:8888/php-ajax-dischi/api.php')
        .then((response) => {
          this.songs = response.data;
        });
      }
    },
    mounted() {
      this.getFaqsFromAPI();
    }
  }
);