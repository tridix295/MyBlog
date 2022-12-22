<div class="carousel-main">
        <!--Carrousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./Assets/img/sql.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./Assets/img/python.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./Assets/img/php.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="public">
                    <?php foreach($data as $data):?>
                    <div class="titulo" id="titulo">
                        <div class="user" style="background-image: url(./Assets/img/sql.jpg);"></div>
                        <span><?=$data['UsNombre']?></span>
                    </div>
                    <div class="card bg-dark text-white">
                        <img src="./Assets/img/sql.jpg" class="card-img" alt="..." style="height: 250px; ">
                        <div class="card-img-overlay">
                            <h5 class="card-title"><?=$data['PoTitulo']?></h5>
                        </div>
                    </div>
                    <div class="post-text">
                        <div class="category">
                            <span><?=$data['CaNombre']?></span>
                        </div>
                        <p class="card-text"><?=$data['PotText']?></p>
                        <div class="boton">
                            <a href="/Post/Viewer/<?=$data['PoId']?>" class="btn btn-primary">Leer</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
                   
