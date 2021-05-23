//console.log('ok');

const app = new Vue({
    el: '#app',
    data: {
        album: [],
        artisti:[],
        value: 'all',

    },
    created() {
        console.log(window.location);
        //http://localhost/php-ajax-dischi/milestone2/
        const apiURL = window.location.href + 'database.php'; 
        
        
        this.getData(apiURL);
            

    },
    methods:{
        getData(url){
            axios.get(url)
            .then(res =>{
                console.log(res.data);
                this.album = res.data;
            })
            .catch(err =>{
                console.log(err, 'Error');
            })
        },
        return(){
            console.log('ritorno');
        }

    }
});
