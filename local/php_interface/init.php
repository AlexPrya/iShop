<?php

$sPath = '/local/php_interface/custom/';


#
# Константы
#
include_once($_SERVER['DOCUMENT_ROOT'].$sPath.'constants.php');

#
# Подключим кастомные классы и функции
#
CModule::AddAutoloadClasses(
    '',
    array(
        'CISEventHandlers' => $sPath.'classes/CISEventHandlers.php',
        'CISCity' => $sPath.'classes/CISCity.php'
    )
);

#
# Функции (функции объявлять только здесь)
#
include_once($_SERVER['DOCUMENT_ROOT'].$sPath.'functions.php');

#
# Обработчики событий
#
include_once($_SERVER['DOCUMENT_ROOT'].$sPath.'handlers.php');