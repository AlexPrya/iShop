<?
/**
 *
 * Класс для работы с городами
 *
 */

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

if (!CModule::IncludeModule('highloadblock'))
{
    ShowError(GetMessage("Не установлены необходимые модули!"));
    return 0;
}

class CISCity {

    //
    // Получаем массив со списком городов
    //
    public static function GetCityList() {

        $arResult = array();

        $rsData = \Bitrix\Highloadblock\HighloadBlockTable::getList(array('filter'=>array('NAME'=>CITY_LIST_HLB)));
        if ( !($arData = $rsData->fetch()) ){
            echo 'Инфоблок не найден';
        } else {
            $Entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arData);

            $Query = new \Bitrix\Main\Entity\Query($Entity);
            $Query->setSelect(array('*'));

            $result = $Query->exec();
            $result = new CDBResult($result);

            while ($row = $result->Fetch()){
                $arResult[$row['UF_CITY_CODE']] = $row['UF_CITY_NAME'];
            }

        }
        return $arResult;

    }


    //
    // Название города по коду
    //
    public static function GetCityNameByCode($code) {
        $code = intval($code);

        $сityList = self::GetCityList();

        return $сityList[$code];
    }


    //
    // Тип цены по коду города
    //
    public static function GetPriceTypeByCode($code) {

        CModule::IncludeModule("catalog");
        $code = intval($code);

        $arResult = array();

        $rsData = \Bitrix\Highloadblock\HighloadBlockTable::getList(array('filter'=>array('NAME'=>CITY_LIST_HLB)));
        if ( !($arData = $rsData->fetch()) ){
            echo 'Инфоблок не найден';
        } else {
            $Entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arData);

            $Query = new \Bitrix\Main\Entity\Query($Entity);
            $Query->setSelect(array('UF_PRICE_TYPE_ID'));
            $Query->setFilter(array('UF_CITY_CODE' => $code));

            $result = $Query->exec();
            $result = new CDBResult($result);

            while ($row = $result->Fetch()){

                $price = CCatalogGroup::GetByID($row['UF_PRICE_TYPE_ID']);
                $arResult['NAME'] = $price['NAME'];
                $arResult['ID'] = $price['ID'];

            }

        }
        return $arResult;
    }

    //
    // нормализация окончания ip адреса
    //
    public static function NormalizeIp($ip) {

        $arIp = explode(".",$ip);
        $countIpEnd = sizeof(str_split($arIp[sizeof($arIp)-1]));


        while ($countIpEnd++ < 3) {
            $arIp[sizeof($arIp) - 1] .= 0;

        }

        $ip = join('.', $arIp);

        return $ip;
    }

    //
    // проверка адреса
    //
    public static function CheckAddr($ip) {

        $gb = new IPGeoBase();
        $data = $gb->getRecord($ip);

        $cityList = self::GetCityList();

        if (!empty($cityList[$data['city_code']])) {
            return $data['city_code'];
        }
        return false;
    }


}