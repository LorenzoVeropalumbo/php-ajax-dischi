var app = new Vue(
  {
    el: '#root',
    data: {
      songs: [],
      genres: [],
      noDuplicateGenre: ['All',],
    },
    methods: {
      getSongs(value) {
        axios.get(`http://localhost:8888/php-ajax-dischi/api.php?value=${value}`)
        .then((response) => {       
          this.songs = response.data;        
        });
      },
      genreArray() {
        axios.get('http://localhost:8888/php-ajax-dischi/api.php')
        .then((response) => {
          this.genres = response.data;
          
          this.genres = this.genres.filter(genre => {
            if(!this.noDuplicateGenre.includes(genre.genre)){
              this.noDuplicateGenre.push(genre.genre)
              console.log(this.noDuplicateGenre);
            }
          })
        });
      },
      value(select){        
        getSongs(select.target.value);
      }
    },
    mounted() {
      this.getSongs();
      this.genreArray();
    }
  }
);