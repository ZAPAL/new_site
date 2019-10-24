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



<div class="tripleContainer__center">
    <div class="popupForm__close">
        <span id="popupClose">&#10006;</span>
    </div>
    <div class="popupFormWrapper">
        <h2 class="popupTitle">Рассчитать проект</h2>
        <p>Для рассчета проекта оставьте свои контакты, наш менеджер свяжется с вами для уточнения деталей.</p>
        <? if (!empty($arResult["ERROR_MESSAGE"])) {
            foreach ($arResult["ERROR_MESSAGE"] as $v)
                ShowError($v);
        }
        if (strlen($arResult["OK_MESSAGE"]) > 0) {
            ?>
        <div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div></br><?
        }
        ?>
        <!--<form action="" class="popupForm">
            <div class="input-wrapperCalc">
                <div class="select-wrapperCalc">
                    <select name="selector" id="selector" class="fieldCalc">
                        <option value="0" selected disabled>Выбирите направление</option>
                        <option value="1">Разработка web&mobile</option>
                        <option value="3">UX/Ui дизайн</option>
                        <option value="2">Digital-маркетинг</option>
                        <option value="3">CRM автоматизация</option>
                    </select>
                </div>
                <p class="error" id="selectError"></p>
            </div>
            <div class="input-wrapperCalc">
                <input type="text" id="nameCalc" name="nameCalc" placeholder="Ваше имя" class="fieldCalc">
                <p class="error" id="nameCalcError"></p>
            </div>
            <div class="input-wrapperCalc">
                <input type="email" id="mailCalc" name="mailCalc" placeholder="Ваш Email" class="fieldCalc">
                <p class="error" id="mailCalcError"></p>
            </div>
            <div class="input-wrapperCalc">
                <input type="tel" id="phoneCalc" name="phoneCalc" placeholder="Ваш телефон" class="fieldCalc">
                <p class="error" id="phoneError"></p>
            </div>
            <a class="popupLink" href="#" id="calc">Отправить заявку</a>
        </form>-->

        <form action="<?= POST_FORM_ACTION_URI ?>" method="POST" id="myForm" class="popupForm">
            <?= bitrix_sessid_post() ?>
            <div class="input-wrapperCalc">
                <div class="select-wrapperCalc">
                    <select name="selector" id="selector" class="fieldCalc">
                        <option value="0" selected disabled>Выбирите направление</option>
                        <option value="1">Разработка web&mobile</option>
                        <option value="3">UX/Ui дизайн</option>
                        <option value="2">Digital-маркетинг</option>
                        <option value="3">CRM автоматизация</option>
                    </select>
                </div>
                <p class="error" id="selectError"></p>
            </div>
            <div class="input-wrapperCalc">
                <input type="text" id="nameCalc"  class="fieldCalc" placeholder="Ваше имя" name="user_name" value="<?//= $arResult["AUTHOR_NAME"] ?>">
                <p class="error" id="nameCalcError"></p>
            </div>
            <div class="input-wrapperCalc">
                <input type="email" id="mailCalc" name="user_email" placeholder="Ваш Email"  class="fieldCalc" value="<?//= $arResult["AUTHOR_EMAIL"] ?>">
                <p class="error" id="mailCalcError"></p>
            </div>
            <div class="input-wrapperCalc">
                <input type="tel" id="phoneCalc" name="user_phone" placeholder="Ваш телефон"  class="fieldCalc" value="<?//= $arResult["AUTHOR_EMAIL"] ?>">
                <p class="error" id="phoneError"></p>
            </div>
            <!--<div class="mf-message">
                <div class="mf-text">
                    <?/*= GetMessage("MFT_MESSAGE") */?><?/* if (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])): */?>
                        <span class="mf-req">*</span><?/* endif */?>
                </div>
                <textarea name="MESSAGE" rows="5" cols="40"><?/*= $arResult["MESSAGE"] */?></textarea>
            </div>-->

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
            <button class="popupLink" id="calc">Отправить заявку</button>
            <!--<input type="submit" class="popupLink" id="calc" name="submit" value="<?//= GetMessage("MFT_SUBMIT")?>">-->
        </form>
    </div>
</div>
