<?php require 'api/core.php'; ?>
<?php date_default_timezone_set('America/Sao_Paulo'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saladenha</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js"></script>

    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
</head>

<body>

    <?php
    extract($_GET);
    require 'pages/' . $page . '.php';
    ?>


    <!-- JS -->
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="scripts/slide.js"></script>
</body>

</html>