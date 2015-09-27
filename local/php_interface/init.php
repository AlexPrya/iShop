<?php

$sPath = '/local/php_interface/custom/';


#
# ���������
#
include_once($_SERVER['DOCUMENT_ROOT'].$sPath.'constants.php');

#
# ��������� ��������� ������ � �������
#
CModule::AddAutoloadClasses(
    '',
    array(
        'CISEventHandlers' => $sPath.'classes/CISEventHandlers.php',
        'CISCity' => $sPath.'classes/CISCity.php'
    )
);

#
# ������� (������� ��������� ������ �����)
#
include_once($_SERVER['DOCUMENT_ROOT'].$sPath.'functions.php');

#
# ����������� �������
#
include_once($_SERVER['DOCUMENT_ROOT'].$sPath.'handlers.php');