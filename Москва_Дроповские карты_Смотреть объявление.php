<!doctype html>

<?php
    include "apps/controlers/users.php";
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styling -->
    <link rel="stylesheet" href="css/style.css">
     
    <title>Test site</title>
  </head>
  <body>
    <div class="container">
        <form class="row justify-content-center" method="post">
            <div class="row title-table">
                <h2>Объявления</h2>
                <div class="col-1">Номер Объявления</div>
                <div class="col-1">Название услуги</div>
                <div class="col-3">Описание услуги</div>
                <div class="col-2">Username</div>
                <div class="col-2">Цена</div>
            </div>
            <?php foreach ($adds as $key => $add): ?>
            <div class="row post">
                <div class="id col-1"><?=$key + 1; ?></div>
                <div class="col-1"><?=$add['name_of_service']; ?></div>
                <div class="col-3"><?=$add['descr_of_service']; ?></div>
                <div class="col-2"><?=$add['username']; ?></div>
                <div class="col-2"><?=$add['cost']; ?></div>
            </div>
            <?php endforeach; ?>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>