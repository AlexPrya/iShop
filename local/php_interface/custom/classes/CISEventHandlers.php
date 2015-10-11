<?
/**
 *
 * Обработчики событий
 *
 */
class CISEventHandlers {

    function CheckUserCity() {
        global $USER;

        if (empty($_SESSION['USER_CITY']) || !isset($_SESSION['USER_CITY'])) {

            if($USER->IsAuthorized()) {

                $rsUser = $USER->GetList(($by="personal_country"), ($order="desc"), array('ID' => $USER->GetId()));

                if ($arUser = $rsUser->Fetch()) {

                    if (isset($arUser['PERSONAL_CITY']) && $arUser['PERSONAL_CITY'] != '') {
                        $_SESSION['USER_CITY'] = $arUser['PERSONAL_CITY'];
                        $_SESSION['USER_PRICE_TYPE'] = CISCity::GetPriceTypeByCode($arUser['PERSONAL_CITY']);
                        return;
                    }

                }
            }

            if ($cityCode = CISCity::CheckAddr($_SERVER['REMOTE_ADDR'])) {
                $_SESSION['USER_CITY'] = $cityCode;
                $_SESSION['USER_PRICE_TYPE'] = CISCity::GetPriceTypeByCode($cityCode);

            } else {
                $_SESSION['USER_CITY'] = DEFAULT_CITY_CODE;
                $_SESSION['USER_PRICE_TYPE'] = CISCity::GetPriceTypeByCode(DEFAULT_CITY_CODE);

            }

        }

    }



}