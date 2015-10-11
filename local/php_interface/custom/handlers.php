<? if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true) die();
#
# Обработчики событий
# (файл подключается в php_interface/init.php)
#
AddEventHandler('main', 'OnProlog', array('CISEventHandlers', 'CheckUserCity'));