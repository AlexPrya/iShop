<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<html>
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title><?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/vendor/bootstrap/css/bootstrap.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/animate.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/vendor/slick/slick-theme.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/vendor/slick/slick.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/vendor/rangeslider/css/ion.rangeSlider.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/vendor/rangeslider/css/ion.rangeSlider.skinHTML5.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/vendor/lightGallery/dist/css/lightgallery.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css");

    $APPLICATION->AddHeadScript('https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/slick/slick.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/bootstrap/js/bootstrap.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/smoothscroll.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/scrollReveal.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/rangeslider/js/ion-rangeSlider/ion.rangeSlider.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/lightGallery/dist/js/lightgallery.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/jquery.inputmask.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/script.js');
    ?>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">

<?$APPLICATION->ShowPanel()?>
<header class="main-header">
    <nav class="main-navbar">
        <div class="container">
            <div class="flex-row">
                <div class="main-navbar__logo">
                    <a href="#">
                        iShop
                    </a>
                    <h1>
                        Ваш эксперт<br>
                        Apple
                    </h1>
                </div>
                <a href="#" class="main-navbar__nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <ul class="main-navbar__nav">
                    <li class="dropdown main-navbar__nav-item">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Владивосток <span class="glyphicon glyphicon-menu-down"></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="#">Владивосток</a></li>
                            <li><a href="#">Хабаровск</a></li>
                            <li><a href="#">Находка</a></li>
                            <li><a href="#">Южно-Сахалинск</a></li>
                            <li><a href="#">Петропавловск-Камчатский</a></li>
                        </ul>
                    </li>
                    <li class="main-navbar__nav-item"><a href="#">О компании</a></li>
                    <li class="main-navbar__nav-item"><a href="#">Оплата и доставка</a></li>
                    <li class="main-navbar__nav-item"><a href="#">Где купить</a></li>
                    <li class="main-navbar__nav-item"><a href="#">Акции</a></li>
                    <li class="main-navbar__login">
                        <div>
                            <a href="#">Вход</a>
                        </div>
                        <div>
                            <a href="#">Регистрация</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="catalog-navbar">
        <div class="container">
            <div class="flex-row">
                <ul class="catalog-navbar__nav">
                    <li class="catalog-navbar__nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mac<span class="glyphicon glyphicon-menu-down"></span></a>
                        <div class="catalog-navbar__nav-item__dropdown dropdown-menu">
                            <div class="container">
                                <ul class="catalog-navbar__nav-item__dropdown-menu catalog-navbar__nav-item__dropdown-menu--images">
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-imac.png" height="63" width="76" alt="">
                                            <span>iMac</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcbpro.png" height="52" width="88" alt="">
                                            <span>MacBook Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-air.png" height="52" width="88" alt="">
                                            <span>MacBook Air</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcb.png" height="52" width="88" alt="">
                                            <span>Mac Book</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcbpro.png" height="52" width="88" alt="">
                                            <span>Mac Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-macmini.png" height="59" width="55" alt="">
                                            <span>Mac mini</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-cinema.png" height="63" width="76" alt="">
                                            <span>Cinema Display</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-accessory.png" height="76" width="76" alt="">
                                            <span>Аксессуары Mac</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="catalog-navbar__nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">iPad<span class="glyphicon glyphicon-menu-down"></span></a>
                        <div class="catalog-navbar__nav-item__dropdown dropdown-menu">
                            <div class="container">
                                <ul class="catalog-navbar__nav-item__dropdown-menu catalog-navbar__nav-item__dropdown-menu--images">
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-imac.png" height="63" width="76" alt="">
                                            <span>iMac</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcbpro.png" height="52" width="88" alt="">
                                            <span>MacBook Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-air.png" height="52" width="88" alt="">
                                            <span>MacBook Air</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcb.png" height="52" width="88" alt="">
                                            <span>Mac Book</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcbpro.png" height="52" width="88" alt="">
                                            <span>Mac Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-macmini.png" height="59" width="55" alt="">
                                            <span>Mac mini</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-cinema.png" height="63" width="76" alt="">
                                            <span>Cinema Display</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-accessory.png" height="76" width="76" alt="">
                                            <span>Аксессуары iPad</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="catalog-navbar__nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">iPhone<span class="glyphicon glyphicon-menu-down"></span></a>
                        <div class="catalog-navbar__nav-item__dropdown dropdown-menu">
                            <div class="container">
                                <ul class="catalog-navbar__nav-item__dropdown-menu catalog-navbar__nav-item__dropdown-menu--images">
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-imac.png" height="63" width="76" alt="">
                                            <span>iMac</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcbpro.png" height="52" width="88" alt="">
                                            <span>MacBook Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-air.png" height="52" width="88" alt="">
                                            <span>MacBook Air</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcb.png" height="52" width="88" alt="">
                                            <span>Mac Book</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcbpro.png" height="52" width="88" alt="">
                                            <span>Mac Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-macmini.png" height="59" width="55" alt="">
                                            <span>Mac mini</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-cinema.png" height="63" width="76" alt="">
                                            <span>Cinema Display</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-accessory.png" height="76" width="76" alt="">
                                            <span>Аксессуары iPhone</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="catalog-navbar__nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">iPod<span class="glyphicon glyphicon-menu-down"></span></a>
                        <div class="catalog-navbar__nav-item__dropdown dropdown-menu">
                            <div class="container">
                                <ul class="catalog-navbar__nav-item__dropdown-menu catalog-navbar__nav-item__dropdown-menu--images">
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-imac.png" height="63" width="76" alt="">
                                            <span>iMac</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcbpro.png" height="52" width="88" alt="">
                                            <span>MacBook Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-air.png" height="52" width="88" alt="">
                                            <span>MacBook Air</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcb.png" height="52" width="88" alt="">
                                            <span>Mac Book</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcbpro.png" height="52" width="88" alt="">
                                            <span>Mac Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-macmini.png" height="59" width="55" alt="">
                                            <span>Mac mini</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-cinema.png" height="63" width="76" alt="">
                                            <span>Cinema Display</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-accessory.png" height="76" width="76" alt="">
                                            <span>Аксессуары iPod</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="catalog-navbar__nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Watch<span class="glyphicon glyphicon-menu-down"></span></a>
                        <div class="catalog-navbar__nav-item__dropdown dropdown-menu">
                            <div class="container">
                                <ul class="catalog-navbar__nav-item__dropdown-menu catalog-navbar__nav-item__dropdown-menu--images">
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-imac.png" height="63" width="76" alt="">
                                            <span>iMac</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcbpro.png" height="52" width="88" alt="">
                                            <span>MacBook Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-air.png" height="52" width="88" alt="">
                                            <span>MacBook Air</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcb.png" height="52" width="88" alt="">
                                            <span>Mac Book</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-mcbpro.png" height="52" width="88" alt="">
                                            <span>Mac Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-macmini.png" height="59" width="55" alt="">
                                            <span>Mac mini</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-cinema.png" height="63" width="76" alt="">
                                            <span>Cinema Display</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/navimg-accessory.png" height="76" width="76" alt="">
                                            <span>Аксессуары Watch</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="catalog-navbar__nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Аксессуары<span class="glyphicon glyphicon-menu-down"></span></a>
                        <div class="catalog-navbar__nav-item__dropdown catalog-navbar__nav-item__dropdown--links dropdown-menu">
                            <div class="container">
                                <div class="flex-row">
                                    <div class="catalog-navbar__nav-item__dropdown-menu catalog-navbar__nav-item__dropdown-menu--links">
                                        <h4>Для Mac</h4>
                                        <ul>
                                            <li><a href="#">Флэш-накопители</a></li>
                                            <li><a href="#">Аккумуляторы и источники питания</a></li>
                                            <li><a href="#">Внешние накопители</a></li>
                                            <li><a href="#">Графические планшеты</a></li>
                                            <li><a href="#">Зарядные устройства</a></li>
                                            <li><a href="#">Кабели, переходники и разветвители</a></li>
                                            <li><a href="#">Клавиатуры, мышки, коврики</a></li>
                                            <li><a href="#">Модули памяти</a></li>
                                            <li><a href="#">Программное обеспечение</a></li>
                                            <li><a href="#">Сервисная поддержка </a></li>
                                            <li><a href="#">Сетевое оборудование</a></li>
                                            <li><a href="#">Сумки</a></li>
                                            <li><a href="#">Чехлы</a></li>
                                        </ul>
                                    </div>
                                    <div class="catalog-navbar__nav-item__dropdown-menu catalog-navbar__nav-item__dropdown-menu--links">
                                        <h4>Для iPad</h4>
                                        <ul>
                                            <li><a href="#">Держатели</a></li>
                                            <li><a href="#">Аккумуляторы и источники питания</a></li>
                                            <li><a href="#">Док-станции</a></li>
                                            <li><a href="#">Зарядные устройства</a></li>
                                            <li><a href="#">Защитные пленки</a></li>
                                            <li><a href="#">Игрушки</a></li>
                                            <li><a href="#">Кабели, переходники и разветвители</a></li>
                                            <li><a href="#">Стилусы</a></li>
                                            <li><a href="#">Чехлы</a></li>
                                        </ul>
                                    </div>
                                    <div class="catalog-navbar__nav-item__dropdown-menu catalog-navbar__nav-item__dropdown-menu--links">
                                        <h4>Для iPhone</h4>
                                        <ul>
                                            <li><a href="#">Флэш-накопители</a></li>
                                            <li><a href="#">Аккумуляторы и источники питания</a></li>
                                            <li><a href="#">Внешние накопители</a></li>
                                            <li><a href="#">Графические планшеты</a></li>
                                            <li><a href="#">Зарядные устройства</a></li>
                                            <li><a href="#">Кабели, переходники и разветвители</a></li>
                                            <li><a href="#">Клавиатуры, мышки, коврики</a></li>
                                            <li><a href="#">Модули памяти</a></li>
                                            <li><a href="#">Программное обеспечение</a></li>
                                            <li><a href="#">Сервисная поддержка </a></li>
                                            <li><a href="#">Сетевое оборудование</a></li>
                                            <li><a href="#">Сумки</a></li>
                                            <li><a href="#">Чехлы</a></li>
                                        </ul>
                                    </div>
                                    <div class="catalog-navbar__nav-item__dropdown-menu catalog-navbar__nav-item__dropdown-menu--links">
                                        <h4>iPod</h4>
                                        <ul>
                                            <li><a href="#">Держатели</a></li>
                                            <li><a href="#">Аккумуляторы и источники питания</a></li>
                                            <li><a href="#">Док-станции</a></li>
                                            <li><a href="#">Зарядные устройства</a></li>
                                            <li><a href="#">Защитные пленки</a></li>
                                            <li><a href="#">Игрушки</a></li>
                                            <li><a href="#">Кабели, переходники и разветвители</a></li>
                                            <li><a href="#">Стилусы</a></li>
                                            <li><a href="#">Чехлы</a></li>
                                        </ul>
                                    </div>
                                    <div class="catalog-navbar__nav-item__dropdown-menu catalog-navbar__nav-item__dropdown-menu--links">
                                        <h4>Для Watch</h4>
                                        <ul>
                                            <li><a href="#">Флэш-накопители</a></li>
                                            <li><a href="#">Аккумуляторы и источники питания</a></li>
                                            <li><a href="#">Внешние накопители</a></li>
                                            <li><a href="#">Графические планшеты</a></li>
                                            <li><a href="#">Зарядные устройства</a></li>
                                            <li><a href="#">Кабели, переходники и разветвители</a></li>
                                            <li><a href="#">Клавиатуры, мышки, коврики</a></li>
                                            <li><a href="#">Модули памяти</a></li>
                                            <li><a href="#">Программное обеспечение</a></li>
                                            <li><a href="#">Сервисная поддержка </a></li>
                                            <li><a href="#">Сетевое оборудование</a></li>
                                            <li><a href="#">Сумки</a></li>
                                            <li><a href="#">Чехлы</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div>
                    <a href="#" class="catalog-navbar__cart-link">
                        Корзина <span>(2)</span>
                    </a>
                    <a href="#" class="catalog-navbar__search-btn"></a>
                </div>
            </div>
        </div>
        <form class="main-header__form-search">
            <div class="container">
                <div class="flex-row">
                    <input type="text" class="main-header__form-search__field" placeholder="Что вы хотели бы найти?">
                    <button type="submit" class="main-header__form-search__button"></button>
                </div>
            </div>
        </form>
    </nav>
</header>
<main class="main">
