<header class="d-none d-xl-block">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container p-3">
            <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Ínicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cardápio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Institucional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<header class="d-xl-none">
    <div class="container p-4">
        <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt="logo"></a>
        <button type="button" class="navbar-toggler float-right" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <p>X</p>
                </button>
            </div>
            <div class="modal-body">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><img src="assets/images/mobile-icon1.png" alt=""> Ínicio </a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="assets/images/mobile-icon2.png" alt=""> Cardápio</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="assets/images/mobile-icon3.png" alt=""> Institucional</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="assets/images/mobile-icon4.png" alt=""> Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include('pages/partials/social.php') ?>