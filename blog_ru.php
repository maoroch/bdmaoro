<?php
require 'connection.php';
require 'connection.php';
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    // Проверка на пустое значение и валидация email
    if (empty($email)) {
        echo "Пожалуйста, введите email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Введите корректный email адрес.";
    } else {
        // Используем подготовленное выражение для безопасной вставки
        $stmt = $conn->prepare("INSERT INTO email_рассылка (email) VALUES (?)");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();

        // Перенаправление пользователя на другую страницу
        header("Location: success_ru_email.php");
        exit(); // Убедитесь, что после перенаправления вызывается exit()
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
<style> /* Убрать текст в верхнем регистре для кнопок */
.btn {
  text-transform: none !important;
}

</style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

 <style>
        .navbar-toggler {
          border-color: rgba(255,255,255,0.1); /* Опционально: изменение цвета границы кнопки */
        }
      

      </style>

    <style>body {
      font-family: 'Montserrat', sans-serif;
    }
    h1 {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700; /* Bold */
    }
    p {
      font-family: 'Montserrat', sans-serif;
      font-weight: 400; /* Regular */
    } 
      img {max-width: 100%; max-height: auto;} </style>     
    </head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <!-- Логотип или название сайта -->
      <a class="navbar-brand" href="index.php"> <img class="col-7 col-lg-8 offset-xl-11" style="border-radius: 0 !important;" src="media/Logo.svg"> </a>
  
      <!-- Кнопка для мобильных устройств -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
    <!-- Навигационные ссылки и языковые ссылки в одном коллапсируемом блоке -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="index.php">Главное</a>

        <!-- Добавление логотипа и других ссылок в пункт "Прайс-лист" -->
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Прайс-лист
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="logo_ru.php">Логотипы</a></li>
            <li>
              <a class="dropdown-item" href="corporate-style_ru.php">Фирменный стили</a>
          </li>
            <li><a class="dropdown-item" href="website_ru.php">Веб-сайты</a></li>
          </ul>
        </div>
        <a class="nav-item nav-link active" href="blog_ru.php">Блог</a>
      </div>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="face parallax cas" style="width: 100%; height: 990px;"></div>
    <div class="text-center text-white centered-text">
            <h1 class="big-h1">Введение блога <br>для нашей аудитории
        </div>
  </div>
</div>

<div class="container-fluid" style="margin-top: 100px;">
  <div class="row"> 
    <p class="offset-lg-4 col-lg-6">Подписывайтесь в инстаграм <a href="https://www.instagram.com/maoro_one/" class="highlight">@maoro_one</a> и присоединяйтесь <br> к <a href="#e-mail" class="highlight"> e-mail рассылке</a>, чтобы не пропустить новую статью!
</p>
</div>
</div>



<div class="container-fluid" style="margin-top: 100px;">
  <div class="row justify-content-center">
    <!-- First card wrapped in a link -->
    <div class="col-lg-4">
      <a href="https://example.com/link-for-first-card" class="card-link">
        <div class="card border-0">
          <img src="blog/news_1.jpg" class="card-img-top" alt="Waterfall"/>
          <div class="card-body">
            <h5>Thursday, 26 April</h5>
            <h2 class="card-title special-card-text" style="font-weight: 600 !important;">Какими сайтами пользоваться для изучения веб-дизайна?</h2>
<p class="card-text special-card-text">Лучшие онлайн-ресурсы для изучения веб-дизайна: Путеводитель для начинающих</p>

            
            <div class="invisible" style="height: 40px;"></div>
          </div>
        </div>
      </a>
    </div>
    <!-- Second card wrapped in a link -->
    <div class="col-lg-4">
      <a href="https://example.com/link-for-second-card" class="card-link">
        <div class="card border-0">
          <img src="blog/news_2.jpg" class="card-img-top" alt="Forest"/>
          <div class="card-body">
          <h5>Wednesday, 10 April</h5>
            <h2 class="card-title special-card-text" style="font-weight: 600 !important;">Как находить клиентов фрилансеру?</h2>
            <p class="card-text special-card-text">Эффективные стратегии и советы, которые помогут фрилансерам наладить постоянный поток клиентов</p>
            <div class="invisible" style="height: 40px;"></div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="invis21"></div>

<div class="container-fluid">
  <div class="row justify-content-center">
    <!-- First card wrapped in a link -->
    <div class="col-lg-4">
      <a href="https://example.com/link-for-first-card" class="card-link">
        <div class="card border-0">
          <img src="blog/news_3.jpg" class="card-img-top" alt="Waterfall"/>
          <div class="card-body">
            <h5>Sunday, 15 March</h5>
            <h2 class="card-title special-card-text" style="font-weight: 600 !important;">Важность фирменного <br> стиля в построении бренда</h2>
            <p class="card-text special-card-text">Как правильно разработанный фирменный стиль помогает привлекать клиентов, укреплять доверие <br> и узнаваемость бренда </p>
<!-- <p class="card-text special-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
 -->
            
            <div class="invisible" style="height: 40px;"></div>
          </div>
        </div>
      </a>
    </div>
    <!-- Second card wrapped in a link -->
    <div class="col-lg-4">
      <a href="https://example.com/link-for-second-card" class="card-link">
        <div class="card border-0">
          <img src="blog/news_4.jpg" class="card-img-top" alt="Forest"/>
          <div class="card-body">
          <h5>Thursday, 1 February</h5>
            <h2 class="card-title special-card-text" style="font-weight: 600 !important;">Полезные сайты для дизайнеров</h2>
<p class="card-text special-card-text"> В этой статье мы собрали лучшие онлайн-ресурсы для дизайнеров</p>
        <div class="invisible" style="height: 40px;"></div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<header></header>
<div class="container-fluid">
  <div class="row">
    <h2 class="text-center">Подпишитесь на нашу рассылку <br>
       для получения новостей <br>
    </h2>
    <form action="" method="POST">
    <div class="container d-flex justify-content-center" style="margin-top: 30px">
  <div class="mb-3 d-flex align-items-center">
    <input type="text" placeholder="email" class="form-control me-2" name="email" id="emailInput" style="padding: 20px; border: solid 2px; border-radius: 100px; width: 100%; height: 60px;" required>
    <button type="submit" name="submit" id="submit" class="btn btn-dark " style="border-radius: 100px; width: 100%; height: 60px">Подписаться</button>
  </div>
</div>
    </form>


  </div>
</div>
<header></header>
<footer class="footer">

  <!-- Widgets - Bootstrap Brain Component -->
  <div class="bg-dark py-3 py-md-5 py-xl-8 border-top border-light-subtle ">
    <div class="container overflow-hidden">
      <div class="row gy-3 gy-md-5 gy-xl-0 align-items-sm-center">
        <div class="col-xs-12 col-sm-6 col-xl-3 order-0 order-xl-0">
          <div class="footer-logo-wrapper text-center text-sm-start">
          <li class="nav-item ">
      <a style="text-decoration: none;" class="text-white mb-0">© All rights reserved 2024</a> <!-- Добавленный текст -->
      </li>   
          </div>
        </div>

        <div class="col-xs-12 col-xl-6 order-2 order-xl-1 ">
          <ul class=" nav justify-content-center ">
            <li class="nav-item ">
              <a class="text-white nav-link link-secondary px-2 px-md-3" href="#!">Maoro1.m@gmail.com</a>
            </li>
            <li class="nav-item">
              <a class="text-white nav-link link-secondary px-2 px-md-3" href="#!">+7 (777) 298 4789</a>
            </li>
          </ul>
        </div>

        <div class="col-xs-12 col-sm-6 col-xl-3 order-1 order-xl-2">
          <ul class="nav justify-content-center justify-content-sm-end">
            <li class="nav-item">
              <a class="nav-link link-dark px-3 text-white" href="#!">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class=" bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-dark px-3 text-white" href="#!">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-dark px-3 text-white" href="#!">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-dark px-3 text-white" href="#!">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<style>   /* Стиль для иконок по умолчанию */
.nav-link .bi {
  fill: #FFFFFF; /* или другой цвет, который вы используете для иконок */
}

/* Стиль для иконок при наведении курсора */
.nav-link:hover .bi {
  fill: #FFFFFF; /* поддерживать иконки белыми при наведении */
}

.nav-link:hover .bi {
  background-color: transparent; /* Убрать фоновый цвет при наведении */
  fill: #FFFFFF;                 /* Сохранить белый цвет иконки */
} </style>

</footer>
<style>

@media (max-width: 767.98px) {
  .invis21 {height: 0 !important;}
  #exampleFormControlInput1,
  .btn {
    width: 100% !important; /* Автоматическая ширина на маленьких экранах */
  }
}
.invis21 {height: 100px;}
.img, .card {border-radius: 10px !important;}

      .parallax {
        background-attachment: fixed;
        background-position: none; 
        background-repeat: no-repeat;
        background-size: cover; /* Добавляем это свойство */
        position: relative;
      }
      .cas
      { 
        filter: brightness(50%);
        --fill-layer-image-opacity: 1;
          --fill-layer-background-media-position: fixed;
          --fill-layer-background-media-pointer-events: none;
          --bg-overlay-color: rgb(var(--color_11));
          --bg-gradient: none;
          --column-width: 489px;
          --column-flex: 489;
      
        background-image: url('media/blog_face.jpg');}
      @media (max-width: 785px) {
        .cas {
          background-image: url('media/blog_face-785.jpg');
        }
      }

  /* Добавление прозрачности к фону навбара */
  .navbar {
    background-color: rgba(255, 255, 255, 0.9) !important; /* Белый цвет фона с 50% прозрачностью */
  }
  
.navbar .dropdown-toggle::after {
    display: none;
  }
  a {    text-decoration: none; }
  
/* Убрать фон и границы выпадающего меню */
.navbar .dropdown-menu {
  border: none; /* Убрать границы */
  background-color: rgba(255, 255, 255, 0.9) !important; /* Белый цвет фона с 50% прозрачностью */
 
}

.highlight {
color: #ff8562 ;
}

.collapse {
  transition: height 0.3s ease; /* Плавный переход для свойства height */
}

/* Дополнительно, если элементы находятся внутри элементов списка */
.dropdown-item:focus, .dropdown-item:active {
  background-color: #bbb; /* Прозрачный фон */
  outline: none; /* Убрать контур, если он есть */
}
input:focus {
  outline: none !important;
  box-shadow: none !important;
}
  </style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"> </script>

</body>
</html>