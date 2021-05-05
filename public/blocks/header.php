<header>
    <div class="container top-menu">
    
        <div class="logo">
            <span><a href="/" class="log">WishTrip</a></span>
        </div>

        <div class="nav">

            <a href="/">Главная</a>
            <a href="/contact">Контакты</a>
            <a href="/contact/about">О компании</a>
            <a href="/reviews/index">Отзывы</a>

            <?php if($_COOKIE['login'] == ''): ?>
                <a href="/user/auth">Войти</a>
            <?php else: ?>
                <a href="/user/dashboard">Личный кабинет</a>
            <?php endif; ?>

        <span class="menu" id="show-menu">Туры</span>
            <div id="hidden-menu">
                <span class="close">
                    <i class="fas fa-times"></i>
                </span>
                    <ul>
                        <li><a href="/catalog/index">Все туры</a></li>
                        <li><a href="/catalog/australia">Автралия</a></li>
                        <li><a href="/catalog/ausia">Азия</a></li>
                        <li><a href="/catalog/africa">Африка</a></li>
                        <li><a href="/catalog/europe">Европа</a></li>
                        <li><a href="/catalog/canada">Канада</a></li>
                        <li><a href="/catalog/america_latina">Латинская Америка</a></li>
                        <li><a href="/catalog/usa">США</a></li>
                    </ul>
            <?php if($_COOKIE['login'] != ''): ?>
                <a href="/basket">
                    <button class="btn basket">Корзина</button>
                </a><br>
            <?php endif; ?>
            
            </div>
            
        </div> 

    </div>
</header>


