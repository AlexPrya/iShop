<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arResult)){
    foreach($arResult as $arItem){
        ?><li class="main-navbar__nav-item"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li><?
    }
}