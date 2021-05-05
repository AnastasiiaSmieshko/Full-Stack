<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$data['title']?></title>
    <meta name="description" content="<?=$data['title']?>">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/trip.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/menu.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/footer.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/button.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>
    <img src="/public/img/<?=$data['img_bg']?>" alt="<?=$data['title']?>">
    <a class="back" href="/catalog/">Назад</a>
    <div class="trip">
        <h1><?=$data['title']?></h1>

        <div class="info">

            <div>
                <img src="/public/img/<?=$data['img']?>" alt="<?=$data['title']?>">
            </div>

            <div>
                <h3>Страна тура: <?=$data['country']?></h3><br>
                <p><?=$data['text']?></p><br>
                <p>Уровень сложности : 
                    <?php if($data['level']==2):?>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <?php elseif($data['level']>2):?>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <?php else:?>
                        <i class="fas fa-star"></i>
                    <?php endif;?>
                </p>
                <p>Дата старта тура: <?=$data['time']?></p><br>
            </div>
            
            <div class="info_btn">
                <?php if($_COOKIE['login'] == ''): ?>
                    <form action="/user/auth" method="post">
                        <input type="hidden" name="item_id" value="<?=$data['id']?>">
                        <button class="btn">Купить за <?=$data['price']?> USD</button>
                    </form>
                <?php else: ?>
                    <form action="/basket/index" method="post">
                        <input type="hidden" name="item_id" value="<?=$data['id']?>">
                        <button class="btn">Купить за <?=$data['price']?> USD</button>
                    </form>
                <?php endif; ?> 
            </div>

        </div>

        <h2>Немного фотографий из тура</h2>

        <div class="gallery">

            <div id="slider">
                <img src="/public/img/<?=$data['img_1']?>" alt="<?=$data['title']?>">
                <img src="/public/img/<?=$data['img_2']?>" alt="<?=$data['title']?>">
                <img src="/public/img/<?=$data['img_3']?>" alt="<?=$data['title']?>">
                <img src="/public/img/<?=$data['img_4']?>" alt="<?=$data['title']?>">
            </div>

        </div>
        
    </div>

    <?php require 'public/blocks/footer.php' ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="/public/js/index.js"></script>
</body>
</html>