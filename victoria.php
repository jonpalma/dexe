<?php $thispage="fraccionamiento" ?>
<?php include('header.php'); ?>
<div class="wrapper fraccionamiento victoria">

    <div class="banner"></div>

    <div class="light-spacing main-header">
        <div class="container text-center">
            <h1 class="title white">HACIENDA VICTORIA</h1>
            <div class="col-sm-2">
                <img src="img/equipment/vigilance.png" alt="Caseta de vigilancia">
                <p class="text white">Caseta de vigilancia</p>
            </div>
            <div class="col-sm-2">
                <img src="img/equipment/park.png" alt="Parques y áreas verdes">
                <p class="text white">Parques y áreas verdes</p>
            </div>
            <div class="col-sm-2">
                <img src="img/equipment/neighbors.png" alt="Reglamento y Asociación de vecinos">
                <p class="text white">Reglamento y asociación de vecinos</p>
            </div>
            <div class="col-sm-2">
                <img src="img/equipment/wall.png" alt="Barda perimetral">
                <p class="text white">Barda perimetral</p>
            </div>
            <div class="col-sm-2">
                <img src="img/equipment/court.png" alt="Canchas">
                <p class="text white">Canchas</p>
            </div>
            <div class="col-sm-2">
                <img src="img/equipment/basement.png" alt="Servicios subterraneos">
                <p class="text white">Servicios subterraneos</p>
            </div>
        </div>
    </div>

    <div class="container center spacing">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" id="lightgallery">
                <div class="item active">
                    <div class="carousel-caption center-block">
                        <div class="col-xs-4 img-spacing">
                            <a class="item" href="img/victoria/028.jpg"><img class="img-responsive center-block" src="img/victoria/28.jpg" alt=""></a>
                        </div>
                        <div class="col-xs-4 img-spacing">
                            <a class="item" href="img/victoria/029.jpg"><img class="img-responsive center-block" src="img/victoria/29.jpg" alt=""></a>
                        </div>
                        <div class="col-xs-4 img-spacing">
                            <a class="item" href="img/victoria/030.jpg"><img class="img-responsive center-block" src="img/victoria/30.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-caption center-block">
                        <div class="col-xs-4 img-spacing">
                            <a class="item" href="img/victoria/031.jpg"><img class="img-responsive center-block" src="img/victoria/31.jpg" alt=""></a>
                        </div>
                        <div class="col-xs-4 img-spacing">
                            <a class="item" href="img/victoria/032.jpg"><img class="img-responsive center-block" src="img/victoria/32.jpg" alt=""></a>
                        </div>
                        <div class="col-xs-4 img-spacing">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="modelos spacing" id="modelos">
        <div class="container center">
            <h1 class="title light-black">MODELOS</h1>
            <p class="text-content">En <span class="orange">DEXE</span>, desarrollamos espacios de que se adaptan a tus necesidades, te invitamos a conocer nuestros modelos.</p>
            <div class="row models-container">
                <div class="col-sm-4">
                    <img class="no-drag" src="img/index/modelos/cambridge.png" alt="Cambridge">
                    <h2 class="title purple">CAMBRIDGE</h2>
                    <p class="text-content">Terreno 120 m² / Const. 166 m²</p>
                    <a class="center-block purple-btn" href="pdf/victoria/cambridge.pdf" target="_blank">Ver PDF</a>
                </div>
                <div class="col-sm-4">
                    <img class="no-drag" src="img/index/modelos/oxford.png" alt="Oxford">
                    <h2 class="title green">OXFORD</h2>
                    <p class="text-content">Terreno 120 m² / Const. 153 m²</p>
                    <a class="center-block green-btn" href="pdf/victoria/oxford.pdf" target="_blank">Ver PDF</a>
                </div>
                <div class="col-sm-4">
                    <img class="no-drag" src="img/index/modelos/sheffield.png" alt="Sheffield">
                    <h2 class="title orange">SHEFFIELD</h2>
                    <p class="text-content">Terreno 120 m² / Const. 123 m²</p>
                    <a class="center-block orange-btn" href="pdf/victoria/sheffield.pdf" target="_blank">Ver PDF</a>
                </div>
            </div>
        </div>
    </div>

    <div class="map" id="googleMap" fracc="victoria">
        <a href="https://www.google.com.mx/maps/place/28%C2%B035'37.7%22N+106%C2%B009'26.8%22W/@28.5938207,-106.1596327,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x0?hl=es" target="_blank">
            <img src="img/victoria/map/map.png" alt="Mapa">
        </a>
    </div>
</div>
<?php include('footer.php'); ?>