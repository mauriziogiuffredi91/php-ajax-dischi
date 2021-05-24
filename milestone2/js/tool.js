//console.log('ok');

const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        artists: [],
        filterArtist: 'all',
        

    },
    created() {
        console.log(window.location);
        //http://localhost/php-ajax-dischi/milestone2/
        const apiURL = window.location.href + 'database.php'; 

        axios
            .get(apiURL)
            .then(res => {
                console.log(res.data);
                this.albums = res.data.albums;
                this.artists = res.data.artists;
            })
            .catch(err =>{
                console.log(err);
            });
        
    },  
    methods: {
        getFiltered(){
            axios
            //qui non funziona semplicemente mettere this.apiURL
            //la const non è globale
            .get( window.location.href + 'database.php',{
                params:{
                    artist: this.filterArtist,
                }
            })


            .then(res => {
                this.albums = res.data.albums;
                
            })
                
            .catch(err =>{
                console.log(err);
            });
        
        }
    }  
    //     this.getData(apiURL);
            

    // },
    // methods:{
    //     getData(url){
    //         axios.get(url)
    //         .then(res =>{
    //             console.log(res.data);
    //             this.album = res.data;
    //         })
    //         .catch(err =>{
    //             console.log(err, 'Error');
    //         })
    //     },
    //     return(){
    //         console.log('ritorno');
    //     }

    // }
});
