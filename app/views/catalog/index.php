<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог туров</title>
    <meta name="description" content="Каталог туров">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8"> 
    <link rel="stylesheet" href="/public/css/catalog.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/menu.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/footer.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/button.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>
    <?php require 'public/blocks/menu.php' ?>
  

    <div class="catalog">
        <h1><?=$data['title']?></h1>
        <div class="trips">
        
            <?php for($i = 0; $i < count($data['trips']) ; $i++): ?> 
                <div class="trip">
                    <div class="image">
                        <img src="/public/img/<?=$data['trips'][$i]['img']?>" alt="<?=$data['trips'][$i]['title']?>">
                    </div>
                    <div class="introduse">
                    <h3><?=$data['trips'][$i]['title']?></h3>
                    <p>О туре : <?=$data['trips'][$i]['intro']?></p>
                    <p id="date">Начало тура: <?=$data['trips'][$i]['time']?></p>
                    <p id="day">Количество дней в туре: <?=$data['trips'][$i]['period']?></p>
                    
                    <p id="hard">Сложность тура: 
                        <?php if($data['trips'][$i]['level']==2):?>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <?php elseif($data['trips'][$i]['level']>2):?>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <?php else:?>
                            <i class="fas fa-star"></i>
                        <?php endif;?>      
                    </p>
                    <a href="/trip/index/<?=$data['trips'][$i]['id']?>"><button class="btn">Детальнее</button></a>
            </div>
                </div>
            <?php endfor; ?>
            
        </div>
  
<div class="pagination">
    <?php if($data['pages'] > 1): ?>
            <br><br>
            <?php for($i = 0; $i < $data['pages']; $i++): ?>
                <?php
                    $url = $i == 0 ? '/catalog' : '/catalog/'.($i + 1);
                ?>
            <a href="<?=$url?>"><button class="btn_p"><?=($i + 1)?></button></a>
        <?php endfor; ?>
    <?php endif; ?>
</div>
    <?php require 'public/blocks/footer.php' ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="/public/js/index.js"></script>
</body>
</html>