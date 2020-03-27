<div class="intro-tabs">
    <div class="container p-4">
        <h3 class="text-center">Escolha o seu</h3>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
            <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
        </ul>
    </div>
</div>

<div class="tab-content">
    <div id="home" class="tab-pane active">
        <?php require('slide1.php') ?>
    </div>



    <div id="menu1" class="tab-pane fade">
        <?php require('slide2.php') ?>
    </div>



    <div id="menu2" class="tab-pane fade">
        <?php require('slide3.php') ?>
    </div>
</div>