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
          <div id="theme-selection">
            <h2>Выбери свою тематику для дальнейшей публикации либо нахождения объявлений!</h2>
            <button class="btn btn-primary m-1" onclick="selectTheme('Дроповские карты')">Дроповские карты</button>
            <button class="btn btn-primary m-1" onclick="selectTheme('Работа')">Работа</button>
            <button class="btn btn-primary m-1" onclick="selectTheme('Техника')">Техника</button>
            <button class="btn btn-primary m-1" onclick="selectTheme('Одежда')">Одежда</button>
            <button class="btn btn-primary m-1" onclick="selectTheme('Процессинг')">Процессинг</button>
            <button class="btn btn-primary m-1" onclick="selectTheme('Реклама')">Реклама</button>
            <button class="btn btn-primary m-1" onclick="selectTheme('Машины')">Машины</button>
            <button class="btn btn-primary m-1" onclick="selectTheme('Задать вопрос')">Задать вопрос</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      function selectTheme(theme) {
        if (theme === 'Дроповские карты') {
          window.location.href = 'Москва_Дроповские карты.php';
        }
        if (theme === 'Работа') {
          window.location.href = 'Москва_Работа.php';
        }
        if (theme === 'Техника') {
          window.location.href = 'Москва_Техника.php';
        }
        if (theme === 'Одежда') {
          window.location.href = 'Москва_Одежда.php';
        }
        if (theme === 'Процессинг') {
          window.location.href = 'Москва_Процессинг.php';
        }
        if (theme === 'Реклама') {
          window.location.href = 'Москва_Реклама.php';
        }
        if (theme === 'Машины') {
          window.location.href = 'Москва_Машины.php';
        }
        if (theme === 'Задать вопрос') {
          window.location.href = 'Москва_Задать вопрос.php';
        }
      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
