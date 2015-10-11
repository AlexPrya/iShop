<?
/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @global CUserTypeManager $USER_FIELD_MANAGER
 * @param array $arParams
 * @param CBitrixComponent $this
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

$arResult = array();

$arResult['CITIES'] = CISCity::GetCityList();

$req = $_REQUEST;

if ($req['newCity'] && $req['newCity'] != '' && !empty($arResult['CITIES'][$req['newCity']])) {
    $_SESSION['USER_CITY'] = $req['newCity'];
    $_SESSION['USER_PRICE_TYPE'] = CISCity::GetPriceTypeByCode($req['newCity']);

}

$arResult['USER_CITY'] = $_SESSION['USER_CITY'];

$this->IncludeComponentTemplate();