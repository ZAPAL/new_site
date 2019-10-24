<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>



<div class="mainForm__container tripleContainer__center">
    <div class="pageTitle__number">08</div>
    <h2 class="pageTitle__text">Связатся с нами </h2>
    <? if (!empty($arResult["ERROR_MESSAGE"])) {
        foreach ($arResult["ERROR_MESSAGE"] as $v)
            ShowError($v);
    }
    //echo "<pre>", print_r($arResult), "</pre>";
    if (strlen($arResult["OK_MESSAGE"]) > 0) {
        ?>
        </br><div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div><?
    }
    ?></br>
    <form action="<?= POST_FORM_ACTION_URI ?>" method="POST" id="myForm2" class="popupForm">
        <?= bitrix_sessid_post() ?>
        <div class="input-wrapper">
            <input type="text" id="name" class="field" placeholder="Ваше имя" name="user_name"
                   value="<? //= $arResult["AUTHOR_NAME"] ?>">
            <p class="error" id="nameError"></p>
        </div>
        <div class="input-wrapper">
            <input type="email" id="mail" name="user_email" placeholder="Ваш Email" class="field"
                   value="<? //= $arResult["AUTHOR_EMAIL"] ?>">
            <p class="error" id="mailError"></p>
        </div>
        <div class="input-wrapper">
            <input type="text" id="message" class="field" placeholder="Ваше сообщение" name="MESSAGE"
                   value="<? //= $arResult["AUTHOR_NAME"] ?>">
            <p class="error" id="messageError"></p>
        </div>
        <? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
        <div class="mf-captcha">
            <div class="mf-text"><?= GetMessage("MFT_CAPTCHA") ?></div>
            <input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
            <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180" height="40"
                 alt="CAPTCHA">
            <div class="mf-text"><?= GetMessage("MFT_CAPTCHA_CODE") ?><span class="mf-req">*</span></div>
            <input type="text" name="captcha_word" size="30" maxlength="50" value="">
        </div>
        <? endif; ?>
        <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
        <!--<input type="hidden" name="submit" value="Y">-->
        <button class="mainForm-button cases__watch mainLink" id="send">Написать нам</button>
    </form>
</div>
