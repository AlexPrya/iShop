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
                    <?if ($APPLICATION->GetCurDir() != '/') {?>
                        <a class="main-navbar__logo-link" href="/">
                            iShop
                        </a>
                    <?} else {?>
                        <span class="main-navbar__logo-link">
                            iShop
                        </span>
                    <?}?>
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
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "main-navbar",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "ROOT_MENU_TYPE" => "mainnavbar",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "N",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        )
                    );?>
<!--                    <li class="main-navbar__nav-item"><a href="#">О компании</a></li>-->
<!--                    <li class="main-navbar__nav-item"><a href="#">Оплата и доставка</a></li>-->
<!--                    <li class="main-navbar__nav-item"><a href="#">Где купить</a></li>-->
<!--                    <li class="main-navbar__nav-item"><a href="#">Акции</a></li>-->
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:system.auth.form",
                        "auth.header",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "REGISTER_URL" => "/register/",
                            "FORGOT_PASSWORD_URL" => "/forgot-password/",
                            "PROFILE_URL" => "/personal/",
                            "SHOW_ERRORS" => "Y"
                        )
                    );?>
<!--                    <li class="main-navbar__login">-->
<!--                        <div class="main-navbar__login-button">-->
<!--                            <a class="main-navbar__login-link" href="#">Вход</a>-->
<!--                        </div>-->
<!--                        <div class="main-navbar__login-button">-->
<!--                            <a class="main-navbar__login-link" href="#">Регистрация</a>-->
<!--                        </div>-->
<!--                    </li>-->
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
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "main.banners",
    Array(
        "COMPONENT_TEMPLATE" => ".default",
        "IBLOCK_TYPE" => "services",
        "IBLOCK_ID" => "4",
        "NEWS_COUNT" => "5",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array("",""),
        "PROPERTY_CODE" => array("BANNER_SHORT_DESCR","BANNER_LINK",""),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "PAGER_TEMPLATE" => ".default",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => ""
    )
);?>