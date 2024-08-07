<!doctype html>
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
      <div class="content row">
        <div class="main-content col-md-9 col-12">
            <div class="d-grid gap-2 col-6 mx-auto" id="theme-options">
                <button class="btn btn-primary" type="button" id="createAdButton">Создать объявление</button>
                <button class="btn btn-primary" type="button" id="watchAdButton">Смотреть объявление</button>
                <button class="btn btn-primary" type="button">Отзывы</button>
            </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      document.getElementById('createAdButton').addEventListener('click', function() {
        window.location.href = 'Москва_Дроповские карты_Создать объявление.php';
      });
    </script>
    <script>
      document.getElementById('watchAdButton').addEventListener('click', function() {
        window.location.href = 'Москва_Дроповские карты_Смотреть объявление.php';
      });
    </script>
  </body>
</html>
