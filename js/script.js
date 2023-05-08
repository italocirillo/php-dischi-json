const { createApp } = Vue;

createApp({
    data() {
        return {
            dischi: [],
            discoCliccato: false,
            elementoSelezionato: 0,
        }
    },
    mounted() {
        axios
            .get("http://localhost:8888/boolean/php-dischi-json/server.php")
            .then((resp) => {
                console.log(resp.data.results);
                this.dischi = resp.data.results;
            })
    },
    methods: {
        richiediInformazioni(elemento) {
            axios
                .get("http://localhost:8888/boolean/php-dischi-json/server.php")
                .then((resp) => {
                    console.log(resp.data.results[elemento]);
                    this.elementoSelezionato = resp.data.results[elemento];
                    this.discoCliccato = true;
                })
        }
    }
}).mount("#app");