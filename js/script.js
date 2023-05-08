const { createApp } = Vue;

createApp({
    data() {
        return {
            dischi: [],
        }
    },
    mounted() {
        axios
            .get("http://localhost:8888/boolean/php-dischi-json/server.php")
            .then((resp) => {
                console.log(resp.data.results);
                this.dischi = resp.data.results;
            })
    }
}).mount("#app");