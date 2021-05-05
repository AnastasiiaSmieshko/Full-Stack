<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина товаров</title>
    <meta name="description" content="Корзина товаров">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/basket.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/menu.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/footer.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/button.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>

    <div class="products">
        <h1>Корзина товаров</h1>
        <?php if(count($data['trips']) == 0): ?>
            <p class="empty"><?=$data['empty']?></p>
        <?php else: ?>
            <div class="items">
                <?php
                    $sum = 0;
                    for($i = 0; $i < count($data['trips']); $i++):
                        $sum += $data['trips'][$i]['price'];
                ?>
                <div class="row">
                    <img src="/public/img/<?=$data['trips'][$i]['img']?>" alt="<?=$data['trips'][$i]['title']?>">
                    <h4><?=$data['trips'][$i]['title']?></h4>
                    <span><?=$data['trips'][$i]['price']?> USD</span>
                    <form action="/basket" method="post">
                        <input type="hidden" name="item_id_delete" value="<?=$data['trips'][$i]['id']?>">
                        <button class="btn">Удалить из корзины <i class="fas fa-trash-alt"></i></button>
                    </form>
                </div>
                <?php endfor; ?>

                <div class="btn_b">
                    <button class="btn buy">Приоребсти (<b><?=$sum?> USD</b>)</button>

                    <form action="/basket" method="post">
                        <button class=" btn del" name="delete_all">Удалить все товары <i class="fas fa-trash"></i></button>
                    </form>
                    
                </div>
            </div>
        <?php endif;?>
    </div>

    <?php require 'public/blocks/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="/public/js/index.js"></script>
</body>
</html>