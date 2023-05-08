<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- APP -->
    <div id="app">
        <div class="wrapper">
            <header>
                <div class="container">
                    <img src="img/logo.png" alt="logo" class="logo">
                </div>
            </header>
            <div class="container">
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1">
                    <div class="col" v-for="(disco,index) in dischi" :for="index" @click="richiediInformazioni(index)">
                        <div class="card">
                            <img :src="disco.poster" :alt="disco.name">
                            <div class="card-body">
                                <h2>{{ disco.title }}</h2>
                                <h4>{{ disco.author }}</h4>
                                <h3>{{ disco.year }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="discoCliccato">
                <div class="disco-info">
                    <div class="card-info">
                        <img :src="elementoSelezionato.poster" :alt="elementoSelezionato.name">
                        <h2>{{ elementoSelezionato.title }}</h2>
                        <h4>{{ elementoSelezionato.author }}</h4>
                        <h3>{{ elementoSelezionato.year }}</h3>
                    </div>
                    <button @click="discoCliccato=false" class="exit">x</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fine APP -->

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Il mio Script -->
    <script src="js/script.js"></script>
</body>

</html>