<?php
require 'connection.php';
if (isset($_POST["submit"])) {
    $Firstname = $_POST["Firstname"]; 
    $Phonenumber = $_POST["Phonenumber"];
    $Email = $_POST["Email"];
    $Message = $_POST["Message"];
    $query = "INSERT INTO Contact_us (Firstname, Phonenumber, Email, Message) 
              VALUES ('$Firstname', '$Phonenumber', '$Email', '$Message')";
    mysqli_query($conn, $query);

    // Перенаправление пользователя на другую страницу
    header("Location: success_ru.php");
    exit(); // Убедитесь, что после перенаправления вызывается exit(), чтобы остановить выполнение текущего скрипта
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
img {border-radius: 10px;}
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
      <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
    <!-- Навигационные ссылки и языковые ссылки в одном коллапсируемом блоке -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="index.php">Главное</a>

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
        <a class="nav-item nav-link" href="blog_ru.php">Блог</a>
        <!-- Языковые ссылки -->
        <a class="nav-item nav-link" href="en/index_en.php">En</a>
        <a class="nav-item nav-link" href="index.php">Ru</a>
      </div>
    </div>
  </div>
</nav>
 
  
      <div class="container-fluid bg-dark">
        <div class="row">
          <div class="text-center text-white">
            <div class="invise" style="width: 15px; height: 200px;"></div>
            <h1>Maoro studio</h1>
          <h2>Создание визуала, который отражает <br>
            идею вашего бренда</h2>
            <button class="btn btn-light" style="border-radius: 50px; margin-top: 10px;"><a href="#остудии" class="text-dark" style="text-decoration: none">Подробнее</a></button>
          </div>
            <div class="col-lg-6 col-md-6" style="margin-top: 150px;">
                <div class="image-container">
                    <img src="media/face1.jpg" class="img-fluid" alt="...">
                    <!-- <div class="centered-text"> <h1 class="text-white">Центральный текст</h1> </div> -->
                </div>
            </div>
            <div class="col-lg-4 offset-xl-1 dv-face" style="margin-top: 130px;">
              <div class="image-container mt-3">
                  <img src="media/Face2.jpg" class="rounded" alt="Face 2">
                  <div class="centered-text"> <h1 class="text-white">Дизайны</h1> </div>
              </div>
              <div class="image-container mt-3" style="margin-top: 40px !important;">
                  <img src="media/face3.jpg" class="rounded" alt="Group 57">
                  <div class="centered-text"><h1  class=" text-white">Веб-сайты</h1></div>
              </div>
          </div>
      </div>
      <div id="остудии" class="dsasadsad" style="height: 140px; width: 15px;"></div>
    </div>
</div>

<header></header>
<div class="container-fluid">
    <div class="row">
        <div class="text-center">
            <h1 > О студии</h1>
            <p>Был запущен в начале 2023 года командой из двух специалистов, наша студия быстро перешла <br>
               от создания наружной рекламы и логотипов к разработке фирменных стилей и веб-сайтов. <br> 
               Мы предлагаем предпринимателям и любителям дизайна инновационные решения, <br>
                которые помогут выделить
                  их бизнес среди конкурентов</p >
    <a href="#cont"> <button  class="btn btn-dark" style="border-radius: 80px;">Связаться</button> </a>
            </div>
    </div>
</div>
<header></header>
<div class="container-fluid" >
    <div class="row">
        <h1 class="text-center">Портфолио</h1>
        <div class="col-lg-12 text-center">
            <img  src="media/pf-1.jpg" style="margin-top: 10px;">
            <img src="media/pf-2.jpg" style="margin-top: 10px;">
        </div>

        <div class="col-lg-12 text-center">
            <img src="media/pf-3.jpg" style="margin-top: 10px;">
            <img src="media/pf-4.jpg" style="margin-top: 10px;">
        </div>
        
        <div class="col-lg-12 text-center">
            <img src="media/pf-5.jpg" style="margin-top: 10px;">
            <img src="media/pf-6.jpg" style="margin-top: 10px;">
        </div>
    </div>

    

    
</div>
<header></header>
<div class="container-fluid bg-dark">
<div class="container my-5 py-10" >
  <div class="row text-white">
    <div class="invis" style="height: 50px;"></div>
    <!-- Колонка для текста -->
    <div class="col-md-4 my-auto">
      <h1 >Что говорят наши клиенты о нас</h1>


   </div>
    <!-- Колонка для слайдера -->
    <div class="col-md-8">
    <div class="row d-flex justify-content-center">
      <div class="col-md-11">
        <div class="text-center mb-4 pb-2">
          <i class="fas fa-quote-left fa-3x text-white"></i>
        </div>

        <div class="card">
          <div class="card-body px-3 py-5">
            <!-- Carousel wrapper -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner pb-4">
                <!-- Single item -->
                <div class="carousel-item active">
                  <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                      <div class="row">
                        <div class="col-lg-4 d-flex justify-content-center">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                            class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="woman avatar" width="150"
                            height="150" />
                        </div>
                        <div
                          class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                          <h4 class="mb-4">Maria Smantha - Web Developer</h4>
                          <p class="mb-0 pb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                            aliquam amet animi blanditiis consequatur debitis dicta
                            distinctio, enim error eum iste libero modi nam natus
                            perferendis possimus quasi sint sit tempora voluptatem. Est,
                            exercitationem id ipsa ipsum laboriosam perferendis.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                  <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                      <div class="row">
                        <div class="col-lg-4 d-flex justify-content-center">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                            class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="woman avatar" width="150"
                            height="150" />
                        </div>
                        <div
                          class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                          <h4 class="mb-4">Lisa Cudrow - Graphic Designer</h4>
                          <p class="mb-0 pb-3">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto
                            beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                            quia voluptas sit aspernatur.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                  <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                      <div class="row">
                        <div class="col-lg-4 d-flex justify-content-center">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                            class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="woman avatar" width="150"
                            height="150" />
                        </div>
                        <div
                          class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                          <h4 class="mb-4">John Smith - Marketing Specialist</h4>
                          <p class="mb-0 pb-3">
                            At vero eos et accusamus et iusto odio dignissimos qui
                            blanditiis praesentium voluptatum deleniti atque corrupti quos
                            dolores et quas molestias excepturi sint occaecati cupiditate
                            non provident, similique sunt in culpa qui officia mollitia
                            animi id laborum et dolorum fuga.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Inner -->
              </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<style>
/* Стили для всех индикаторов */
.carousel-indicators button {
  opacity: 1; /* Устанавливает полную непрозрачность для всех индикаторов */
  background-color: #999 !important; /* Цвет фона для неактивных индикаторов */
}

/* Стили для активного индикатора */
.carousel-indicators .active {
  background-color: #fff; /* Если хочешь поменять цвет */
}


  .carousel-control-prev {
  left: 20px; /* Расстояние слева для левой кнопки */
}

.carousel-control-next {
  right: 20px; /* Расстояние справа для правой кнопки */
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  background: none !important;
}

.carousel-control-prev-icon:before,
.carousel-control-next-icon:before {
  content: '';
  font-size: 24px;
  color: transparent;
}

.carousel-control-prev-icon:after {
  content: '<';
  font-size: 24px;
  color: black;
  font-weight: bold !important;
}

.carousel-control-next-icon:after {
  content: '>';
  font-size: 24px;
  color: black;
}

.carousel-control-prev-icon:after,
.carousel-control-next-icon:after {
  font-family: "Bootstrap Icons";
  font-weight: bold;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Добавляемые стили для центрирования кнопок */
.carousel-control-prev,
.carousel-control-next {
  top: 50%;
  transform: translateY(-50%);
}

/* Дополнительные стили по необходимости */
</style>

            </div>
            <!-- Carousel wrapper -->
          </div>
        </div>

        <div class="text-center mt-4 pt-2">
          <i class="fas fa-quote-right fa-3x text-white"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="invis" style="height: 70px;"></div>
</section>
    </div>
  </div>
</div>
</div>
<style> 
/* Стили для кнопок навигации слайдера */
.carousel-control-prev,
.carousel-control-next {
  
  /* Цвет фона кнопки */
  background-color: rgba(0, 0, 0, 0.5);

  /* Делаем кнопки круглыми */
  border-radius: 50%;

  /* Устанавливаем размеры кнопок */
  width: 35px;
  height: 35px;

  /* Отображение иконок по центру кнопки */
  display: flex;
  align-items: center;
  justify-content: center;

  /* Другие стили для красоты */
  border: none;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
}

/* Стилизация иконок внутри кнопок */
.carousel-control-prev-icon,
.carousel-control-next-icon {
  
  /* Изменение размеров и цвета иконок */
  font-size: 20px;
  color: white;
}

/* Стили для изменения вида кнопок при наведении */
.carousel-control-prev:hover,
.carousel-control-next:hover {
  background-color: rgba(0, 0, 0, 0.7); /* Темнее при наведении */
  cursor: pointer;
}

/* Стили для активного состояния кнопок */
.carousel-control-prev:active,
.carousel-control-next:active {
  background-color: rgba(0, 0, 0, 0.8); /* Ещё темнее при нажатии */
}
.carousel-indicators button {
  background-color: #ffffff; /* Белый цвет индикаторов */
  border-color: #ffffff;
  box-shadow: none !important;
  border-radius: 10%;        /* Делаем индикаторы круглыми */
}
.carousel-indicators button.active {
  background-color: #000000; /* Цвет активного индикатора */
}
.carousel-indicators button {
  box-shadow: none !important;
}</style>
    </div>
</div>
<header></header>
<div class="container-fluid">
  <h1 class="text-center">Участники студии</h1>
  <div class="row text-center">
    <!-- Контейнер для участника -->
    <div class="col">
      <div class="wheels ilyas"></div>
      <p>Салимов Ильяс</p>
      <p style="font-size: 1rem !important; font-weight: 300 !important; margin-top: 5px;">
       Основатель, Веб-дизайнер, Front-end <br>
разработчик, Графический <br>
дизайнер</p></div>
    <!-- Контейнер для участника -->
    <div class="col">
      <div class="wheels vladimir"></div>
      <p >Лысенко Владимир</p>
      <p style="font-size: 1rem !important; font-weight: 300 !important; margin-top: 5px;">Back-end разработчик,
      <br>  Java developer</p>
    </div>
    <!-- Контейнер для участника -->
    <div class="col">
      <div class="wheels lina"></div>
      <p>Нестерова Ангелина</p>
      <p style="font-size: 1rem !important; font-weight: 300 !important; margin-top: 5px;">
     Графический дизайнер</p>  
    </div>
    <!-- Контейнер для участника -->
    <div class="col">
      <div class="wheels"></div>
      <p>Белялова Амина</p>
      <p style="font-size: 1rem !important; font-weight: 300 !important; margin-top: 5px;">SMM менеджер,
      <br id="cont">  Менеджер студии</p>
    </div>
  </div>
  <style>.col {margin-top: 50px;} .col p {margin-top: 20px;
     font-weight: bold; font-size: 1.4rem !important;} </style>
</div>
</div>

<header>
<div class="container-fluid">
<div class="container">
  <div class="row">
    <!-- Левая колонка для информации о контактах -->
    <div class="col-lg-6 mb-5">
      <h1>КОНТАКТЫ</h1>
      <h2>Опишите пожалуйста, что вас <br>
интересует и мы обязательно <br>
обсудим с вами все детали</h2>
    </div>

    <!-- Правая колонка для формы обратной связи -->
    <div class="col-lg-6">
      <form action="" method="post" autocomplete="off">
        <div class="mb-5">
          <label for="firstnameInput">ФИО</label>
          <input type="text" name="Firstname" class="form-control" id="firstnameInput" required>
        </div>

        <div class="mb-5">
          <label for="phonenumber">Номер телефона</label>
          <input type="text" name="Phonenumber" class="form-control" id="phonenumber" required>
        </div>

        <div class="mb-5">
          <label for="Email">Email адрес</label>
          <input type="text" name="Email" class="form-control" id="Email" required>
        </div>

        <div class="mb-5">
          <label for="exampleFormControlTextarea1">Сообщение</label>
          <textarea id="exampleFormControlTextarea1" class="form-control" name="Message" rows="3" required></textarea>
        </div>

        <div class="">
          <button class="btn btn-dark" type="submit" name="submit">Отправить</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
document.getElementById('phonenumber').addEventListener('input', function (e) {
  this.value = this.value.replace(/[^0-9]/g, '');
});
</script>
</div>
</header>
<header>
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
</header>
<style>

.custom-textarea {
  border-radius: 15px;
  box-shadow: none;
  display: block;

  overflow: hidden; 
}

.custom-textarea:focus {
  outline: none;
  border-bottom: 2px solid #000000;
}


      .form-control:focus {
          outline: none !important;
          box-shadow: none !important;
      }
      
          
          /* Убираем границы и добавляем нижнюю линию для полей ввода и текстовой области */
          .form-control {
            border: none; /* Убираем границы */
            border-bottom: 1px solid #000000; /* Добавляем нижнюю границу, цвет можно поменять */
            border-radius: 0; /* Убираем скругление, если оно есть */
            width: 620px;
            max-width: 100%;
  margin-right: auto;
          }
          /* Стиль для фокуса на элементах ввода */
          .form-control:focus {
            outline: none; /* Убираем контур при фокусе */
            border-bottom: 1px solid #000000; /* Добавляем более заметную нижнюю границу при фокусе */
          }
        
          /* Опционально: Можете задать фон для полей ввода, если это необходимо */
          .form-control {
            background-color: transparent; /* Делаем фон поля ввода прозрачным */
          }

          .btn-dark {width: 312px !important; height: 70px !important; margin-top: 30px;}


           </style>

<style>
  /* Добавление прозрачности к фону навбара */
  .navbar {
    background-color: rgba(255, 255, 255, 0.9) !important; /* Белый цвет фона с 50% прозрачностью */
  }
  
.navbar .dropdown-toggle::after {
    display: none;
  }
  
/* Убрать фон и границы выпадающего меню */
.navbar .dropdown-menu {
  border: none; /* Убрать границы */
  background-color: rgba(255, 255, 255, 0.9) !important; /* Белый цвет фона с 50% прозрачностью */
 
}

.collapse {
  transition: height 0.3s ease; /* Плавный переход для свойства height */
}


/* Дополнительно, если элементы находятся внутри элементов списка */
.dropdown-item:focus, .dropdown-item:active {
  background-color: #bbb; /* Прозрачный фон */
  outline: none; /* Убрать контур, если он есть */
}

  </style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"> </script>

</body>
</html>