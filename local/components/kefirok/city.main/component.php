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

if (!$USER->IsAuthorized()) {
    $arResult['ERROR'][] = '����������������� �� ����� ��� �������������';
} else {
    $arResult = array();

    $remoteAddr = $_SERVER['REMOTE_ADDR'];
//    _show_array($remoteAddr);
}

$this->IncludeComponentTemplate();
