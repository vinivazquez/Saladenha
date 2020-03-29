<div class="intro-tabs">
    <div class="container p-4">
        <br>
        <h3 class="text-center">Escolha o seu</h3>
        <br>
        <div class="pills-area d-flex justify-content-center">
            <ul class="nav">
                <li class="nav-item">
                    <a data-toggle="pill" class="nav-link active" href="#destaques">Destaques</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="pill" class="nav-link" href="#novidades">Novidades</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="pill" class="nav-link" href="#veganos">Veganos</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="tab-content">
    <div id="destaques" class="tab-pane active">
        <?php require('slide1.php') ?>
    </div>



    <div id="novidades" class="tab-pane fade">
        <?php require('slide2.php') ?>
    </div>



    <div id="veganos" class="tab-pane fade">
        <?php require('slide3.php') ?>
    </div>
</div>



<div class="btn-area text-center">
    <a class="btn btn-primary" href="#" role="button">Cardápio Completo <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
</div>
<br><br><br>