<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?//_show_array($arResult['AUTH_REGISTER_URL']);
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>
<?if($arResult["FORM_TYPE"] == "login") {?>
    <li class="main-navbar__login">
        <div class="main-navbar__login-button">
            <a class="main-navbar__login-link" href="#" data-toggle="modal" data-target="#modal-enter"><?=GetMessage("AUTH_LOGIN_TITLE")?></a>
        </div>
        <div class="main-navbar__login-button">
            <a class="main-navbar__login-link" href="/register/"><?=GetMessage("AUTH_REGISTER")?></a>
        </div>
    </li>
    <div class="modal fade modal-enter" id="modal-enter" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="modal-form" name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
                        <?if($arResult["BACKURL"] <> ''):?>
                            <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                        <?endif?>
                        <input type="hidden" name="AUTH_FORM" value="Y" />
                        <input type="hidden" name="TYPE" value="AUTH" />
                        <div class="form__section">
                            <div class="form-head">
                                <h3><?=GetMessage("AUTH_LOGIN_TITLE")?></h3>
                            </div>
                            <div class="form-content">
                                <div class="form-group">
                                    <label>
                                        <span><?=GetMessage("AUTH_LOGIN")?></span>
                                        <input type="text" name="USER_LOGIN" value="<?=$arResult["USER_LOGIN"]?>" class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span><?=GetMessage("AUTH_PASSWORD")?></span>
                                        <input type="password" class="form-control">
                                    </label>
                                </div>
                                <div class="form-group form-group--offset spaceBetween">
                                    <div class="form-remember-me checkbox-group">
                                        <label for="USER_REMEMBER_frm" title="<?=GetMessage("AUTH_REMEMBER_ME")?>">
                                            <input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" />
                                            <?echo GetMessage("AUTH_REMEMBER_SHORT")?>

                                        </label>
                                    </div>

                                    <a href="#" class="forgot-password-link">
                                        <?echo GetMessage("AUTH_FORGOT_PASSWORD_2")?>
                                    </a>
                                </div>
                                <div class="form-group form-group--offset">
                                    <input class="btn btn--black" type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" />
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <a href="/register/" class="modal-form-large-btn">
                    <?=GetMessage("AUTH_REGISTER")?>
                </a>

                <button type="button" class="modal-close" data-dismiss="modal"></button>
            </div>
        </div>
    </div>
<?} elseif($arResult["FORM_TYPE"] == "logout"){
?>
    <li class="main-navbar__login">
        <form action="<?=$arResult["AUTH_URL"]?>">
            <div class="main-navbar__login-button">
                <a class="main-navbar__login-link" href="<?=$arResult["PROFILE_URL"]?>"><?=GetMessage("AUTH_PROFILE")?></a>
            </div>
            <div class="main-navbar__login-button">
                <?foreach ($arResult["GET"] as $key => $value):?>
                    <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
                <?endforeach?>
                <input type="hidden" name="logout" value="yes" />
                <input class="main-navbar__login-link"  type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
            </div>

        </form>
    </li>
<?}?>

