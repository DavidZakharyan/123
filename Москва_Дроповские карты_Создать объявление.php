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
        <form class="row justify-content-center" method="post" action="Москва_Дроповские карты_Создать объявление.php">
            <h2>Создать объявление</h2>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Укажите название вашей услуги </label>
                <input name="name" type="text" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Укажите описание услуги</label>
                <input name = "descr" type="text" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Напишите ваш Username</label>
                <input name = "uname" type="text" class="form-control" id="formGroupExampleInput" placeholder="В формате @username">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Укажите стоимость вашей услуги</label>
                <input name = "price" type="text" class="form-control" id="formGroupExampleInput" placeholder="Только цифры в рублях">
            </div>
            <button type="submit" class="btn btn-light">Подтвердить</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>