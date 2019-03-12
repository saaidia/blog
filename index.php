<?php include "header.php"; ?>

<style>
    .separateur,
    separateur1 {
        margin-top: 5px
    }

    .formatslide {
        height: 250px;
/*        width: 500px*/
    }
    .imgsami{
        height: 70px
           
    }
    
    
</style>




<div class="container ">

    <div id="carouselExampleIndicators" class="carousel slide separateur separateur1 container-flud" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/0.jpg?00000" class="d-block w-100 formatslide" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/mac.jpg?" class="d-block w-100 formatslide" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="img/4.jpg" class="d-block w-100 formatslide" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row">

        <div class="col-sm-4 separateur">
            <div class="card">
                <img src="img/0.jpg" class="card-img-top imgsami" alt="...">
                <div class="card-body">

                    <h5 class="card-title">Acer</h5>
                    <p class="card-text">14" Full HD (35,6 cm) - 1,5 kg
                        Intel Core i5-8250U: 1,6 GHz ; Turbo 3,4 GHz 128 Go 6 Mo de mémoire
                    </p>
                    <a href="ficheproduit1.php" class="btn btn-outline-primary">Voir produit</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 separateur">
            <div class="card">
                <img src="img/1.jpg" class="card-img-top imgsami" alt="... ">
                <div class="card-body">

                    <h5 class="card-title">Asus</h5>
                    <p class="card-text">13" (33,02 cm) - 1,1 kg
                        Intel Core i5-8265U : 1,6 GHz ; Turbo 3,4 GHz / 6 Mo de mémoire cache
                        .</p>
                    <a href="#" class="btn btn-outline-primary">Voir produit</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4  separateur">
            <div class="card">
                <img src="img/2.jpg" class="card-img-top imgsami" alt="...">
                <div class="card-body">

                    <h5 class="card-title">Dell</h5>
                    <p class="card-text">15,6" Full HD (39,6 cm) - 2,1 kg
                        Intel Core i5-8250U : 1,6 GHz ; Turbo 3,4 GHz /
                        Disque dur 1 To
                        o.</p>

                    <a href="#" class="btn btn-outline-primary">Voir produit</a>
                </div>
            </div>
        </div>




        <div class="jumbotron jumbotron-fluid separateur">
            <div class="container">
                <p class="lead" aria-atomic="true"> Si vous êtes à la recherche d’un ordinateur portable pour vous accompagner au quotidien, vous trouverez forcément votre bonheur dans cette sélection dont les différents modèles sont à la fois légers, transportables et puissants. Toutes les marques incontournables d’ordinateurs portables sont présentes, des <b> MacBook </b> d’Apple au leader du marché <b>HP</b> , en passant par les marques <b>Dell, LG, Acer et Asus</b>, entre autres...</p>
            </div>
        </div>



    </div>
    <?php include "footer.php"?>
