<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <meta name="description" content="Главная страница">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/reg.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/menu.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/footer.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/button.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>

   

    <div class="container main">
       
            <h1>Скоро в отпуск ?</h1>
            <p>Мы поможем Вам подобрать тур! Прежде чем это сделать зарегистрируйтесь на сайте</p>
      
        <form action="/user/reg" method="post" class="form-controll">
            <input type="text" name="name" placeholder="Введите логин" value="<?=$_POST['name']?>"><br>
            <input type="email" name="email" placeholder="Введите email" value="<?=$_POST['email']?>"><br>
            <input type="password" name="pass" placeholder="Введите пароль" value="<?=$_POST['pass']?>"><br>
            <input type="password" name="re_pass" placeholder="Повторите пароль" value="<?=$_POST['re_pass']?>"><br>
            <div class="error"><?=$data['message']?></div>
            <button class="btn" id="send">Зарегистрироваться</button>
            <br><br>
        </form>
    </div>
    
    <?php require 'public/blocks/footer.php' ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="/public/js/index.js"></script>
</body>
</html>