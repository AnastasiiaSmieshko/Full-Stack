<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Кабинет пользователя</title>
    <meta name="description" content="Кабинет пользователя">
    
    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/user.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/dashboard.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/menu.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/footer.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/button.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>

    <div class="container">

        <h1>Кабинет пользователя</h1>

        <div class="user-info">
            <p>Привет, <b><?=$data['name']?></b></p>
            <br><br>
            <form action="/user/dashboard" method="post">
                <input type="hidden" name="exit_btn">
                <button type="submit" class="btn">Выйти</button>
            </form>
        </div>

        <div class="four_steps">

            <h2> Как организовать отдых в четыре простых шага ?</h2>

            <div class="step">
                <h3>Шаг первый</h3>
                <p>Определитесь со странной отдыха. На нашем сайте представлены туры по всему миру.</p>
                <img src="/public/img/earth.png" alt="earth">
            </div>

            <div class="step">
                <h3>Шаг второй</h3>
                <p>Выберите тур на свой вкус. Не нашли тур который Вам подойдет? Наши менеджеры с радостью подберут для Вас индивидуальный вариант.</p>
                <img src="/public/img/list.png" alt="List">
            </div>

            <div class="step">
                <h3>Шаг третий</h3>
                <p>Оплачиваете тур удобным для Вас способом. У Вас есть возможность оплатить тур прямо на сайте или наш менеджер проконсультирует Вас по этому вопросу.</p>
                <img src="/public/img/payment.png" alt="payment">
            </div>

            <div class="step">
                <h3>Шаг четвертый</h3>
                <p>Покуете чемоданы и отправляетесь в долгожданное путешествие и наслаждаетесь отдыхом.</p>
                <img src="/public/img/travel.png" alt="travel">
            </div>

        </div>

       <div class="review">

            <h2>Уже приехали с отпуска?</h1>
            <p>Не упустите возможность <a href="../review/index">оставить отзыв </a> о Вашем отпуске на нашем сайте. Это кому-то поможет осуществить свою мечту.</p>
            
        </div>
    </div>

    <?php require 'public/blocks/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="/public/js/index.js"></script>
</body>
</html>

