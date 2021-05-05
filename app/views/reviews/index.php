<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отзывы о туре</title>
    <meta name="description" content="Отзывы о туре">
 
    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8"> 
    <link rel="stylesheet" href="/public/css/reviews.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/menu.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/footer.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/button.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>
    
<div class="main">
    <?php for($i = 0; $i < count($data['reviews']) ; $i++): ?> 
<h2>
    <?php if($i == 0) 
        echo "<h2>Отзывы наших клиентов</h2>";
    ?>
</h2>
      <br>
        <div class="reviews">
            <p >Имя: <?=$data['reviews'][$i]['name']?></p>
            <p >Название тура: <?=$data['reviews'][$i]['trip']?></p>
            <p >Сообщение: <?=$data['reviews'][$i]['review']?></p>
        </div>
    <?php endfor; ?> 
</div>
<div class="pagination">
    <?php if($data['pages'] > 1): ?>
            <br><br>
            <?php for($i = 0; $i < $data['pages']; $i++): ?>
                <?php
                    $url = $i == 0 ? '/reviews' : '/reviews/'.($i + 1);
                ?>
                <a href="<?=$url?>"><button class="btn_p"><?=($i + 1)?></button></a>
            <?php endfor; ?>
        <?php endif; ?>
</div>
<div>
    <p class="info">Оставить свой отзыв Вы можете перейдя по ссылке в личном кабинете</p>
</div>

  

  
  
    <?php require 'public/blocks/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="/public/js/index.js"></script>
</body>
</html>