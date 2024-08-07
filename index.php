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

  <header class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <h1>Выберите город</h1>
          <select id="city-dropdown" onchange="redirectToCityPage()">
              <option value="">--Выберите город--</option>
              <option value="Москва">Москва</option>
              <option value="Санкт-Петербург">Санкт-Петербург</option>
              <option value="Новосибирск">Новосибирск</option>
              <option value="Екатеринбург">Екатеринбург</option>
              <option value="Казань">Казань</option>
              <option value="Нижний Новгород">Нижний Новгород</option>
              <option value="Красноярск">Красноярск</option>
              <option value="Челябинск">Челябинск</option>
              <option value="Самара">Самара</option>
              <option value="Уфа">Уфа</option>
              <option value="Ростов-на-Дону">Ростов-на-Дону</option>
              <option value="Краснодар">Краснодар</option>
              <option value="Омск">Омск</option>
              <option value="Воронеж">Воронеж</option>
              <option value="Пермь">Пермь</option>
              <option value="Волгоград">Волгоград</option>
          </select>
        </div>
      </div>
    </div>
  </header>

  <script>
    function redirectToCityPage() {
      const city = document.getElementById('city-dropdown').value;
      if (city === 'Москва') {
        window.location.href = 'Москва.php';
      }
      if (city === 'Санкт-Петербург') {
      window.location.href = 'Санкт-Петербург.php';
      }
      if (city === 'Новосибирск') {
      window.location.href = 'Новосибирск.php';
      }
      if (city === 'Екатеринбург') {
      window.location.href = 'Екатеринбург.php';
      }
      if (city === 'Казань') {
      window.location.href = 'Казань.php';
      }
      if (city === 'Нижний Новгород') {
      window.location.href = 'Нижний Новгород.php';
      }
      if (city === 'Красноярск') {
      window.location.href = 'Красноярск.php';
      }
      if (city === 'Челябинск') {
      window.location.href = 'Челябинск.php';
      }
      if (city === 'Самара') {
      window.location.href = 'Самара.php';
      }
      if (city === 'Уфа') {
      window.location.href = 'Уфа.php';
      }
      if (city === 'Ростов-на-Дону') {
      window.location.href = 'Ростов-на-Дону.php';
      }
      if (city === 'Краснодар') {
      window.location.href = 'Краснодар.php';
      }
      if (city === 'Омск') {
      window.location.href = 'Омск.php';
      }
      if (city === 'Воронеж') {
      window.location.href = 'Воронеж.php';
      }
      if (city === 'Пермь') {
      window.location.href = 'Пермь.php';
      }
      if (city === 'Волгоград') {
      window.location.href = 'Волгоград.php';
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
