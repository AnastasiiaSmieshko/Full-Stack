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
    <link rel="stylesheet" href="/public/css/review.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/menu.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/footer.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/button.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>
    <div class="main">
        <h2>Здесь Вы можете написать Ваш отзыв</h1>
        
        <form action="/review/index" method="post" class="form-controll">
            <input type="text" name="name" placeholder="Введите имя"  value="<?=$_POST['name']?>"><br>
            <input type="text" name="trip" placeholder="Введите название тура" value="<?=$_POST['trip']?>"><br>
            <textarea name="review" placeholder="Введите Ваш отзыв" value="<?=$_POST['review']?>"></textarea><br>
            <div class="error"><?=$data['message']?></div>
            <button class="btn" id="send">Добавить</button>
        </form>
    </div>

    <?php require 'public/blocks/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="/public/js/index.js"></script>
</body>
</html>

