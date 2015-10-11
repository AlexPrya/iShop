<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<li class="dropdown main-navbar__nav-item">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$arResult['CITIES'][$arResult['USER_CITY']]?> <span
            class="glyphicon glyphicon-menu-down"></span></a>
    <ul class="dropdown-menu">
        <?foreach ($arResult['CITIES'] as $cityCode => $cityName):?>
        <li <?=$cityCode == $arResult['USER_CITY'] ? 'class="active"' : ''?>><a href="?newCity=<?=$cityCode?>"><?=$cityName?></a></li>
        <?endforeach;?>
    </ul>
</li>