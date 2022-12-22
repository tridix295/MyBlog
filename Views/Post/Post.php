<?php Modal("Post","Editar",$data)?>
<div class="container">
        <div class="row">
            <hr>
            <div class="col-8">
                <div class="public">
                    <div class="titulo" id="titulo">
                        <div class="user" style="background-image: url(./Assets/img/sql.jpg);"></div>
                        <span><?=$data['data']['UsNombre']?></span>
                        <div class="col-9">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" style="float: right;"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                        </div>
                    </div>
                    <div class="card bg-dark text-white">
                        <img src="./Assets/img/sql.jpg" class="card-img" alt="..." style="height: 250px; ">
                        <div class="card-img-overlay">
                            <h5 class="card-title"><?=$data['data']['PoTitulo']?></h5>
                        </div>
                    </div>
                    <div class="post-text">
                        <div class="category">
                            <span><?=$data['data']['Categoria']?></span>
                        </div>
                        <p class="card-text"><?=$data['data']['PotText']?></p>
                    </div>
                </div>
            </div>