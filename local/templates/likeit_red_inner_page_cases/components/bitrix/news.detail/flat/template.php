<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//$this->addExternalCss("/bitrix/css/main/bootstrap.css");
//$this->addExternalCss("/bitrix/css/main/font-awesome.css");
//$this->addExternalCss($this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css');
CUtil::InitJSCore(array('fx'));
?>


<div class="casesPage__top" id="<? echo $this->GetEditAreaId($arResult['ID']) ?>">
    <div class="contacts__title pageTitle pageTitle_noNumber casesPage__title">
        <h2 class="pageTitle__text"><?= $arResult["NAME"] ?></h2>
    </div>
    <div class="casesPage__top-left casePage__top-left">
        <div class="serviceItem__text casesPage__text"><?= $arResult["PREVIEW_TEXT"] ?></div>
        <div class="casesName__list-wrapper">
<!--            <ul class="casesName__list caseName__list">
                <li class="casesName__list-item"><a class="active" href="#">UX/UI дизайн</a></li>
            </ul>-->
            <div class="caseBio">
                <div class="caseBio__item">
                    <div class="caseBio__item_name">
                        <h4>Реализация:</h4>
                    </div>
                    <div class="caseBio__item_text"><?= $arResult["PROPERTIES"]["SITE"]["VALUE"] ?></div>
                </div>
                <div class="caseBio__item">
                    <div class="caseBio__item_name">
                        <h4>Заказчик:</h4>
                    </div>
                    <div class="caseBio__item_text"><?= $arResult["PROPERTIES"]["ORDERER"]["VALUE"] ?></div>
                </div>
                <div class="caseBio__item">
                    <div class="caseBio__item_name">
                        <h4>Дата релиза:</h4>
                    </div>
                    <div class="caseBio__item_text"><?= $arResult["PROPERTIES"]["DATA"]["VALUE"] ?> г.</div>
                </div>
            </div>
            <div class="case__desc">
                <?=$arResult["PROPERTIES"]["TASK_PROJECT"]["~VALUE"]["TEXT"]?>
            </div>
        </div>
    </div>
    <div class="casesPage__top-right casePage__top-right">
        <div class="case-logo"><img src="<?= CFile::GetPath($arResult["PROPERTIES"]["BNR_TOP_IMG"]["VALUE"]) ?>"
                                    alt="company-logo"></div>
    </div>
</div>
<div class="casesPage__content">
    <div class="casePage__imageBlock_title">
        <h4>Фото проекта</h4>
    </div>
    <?
    //echo "<pre>", print_r($arResult["PROPERTIES"]["GALLEY_BIG"]), "</pre>";
    foreach ($arResult["PROPERTIES"]["GALLEY_BIG"]["VALUE"] as $value):?>
        <div class="casePage__imageBlock">
            <img src="<?=CFile::GetPath($value) ?>" alt="">
        </div>
    <? endforeach; ?>
</div>
<div class="casePage__bottom">
    <div class="casePage__bottom-left">
        <div class="casePage__bottom_desc">
            <div class="casePage__bottom_title">
                <h4>Описание реализации кейса и творческого пути по поиску оптимального решения</h4>
            </div>
            <div class="casePage__bottom_list">
                <?= $arResult["DETAIL_TEXT"]; ?>
            </div>
        </div>
    </div>
    <div class="casesPage__top-right casesPage__bottom-right">
        <p>Нужна консультация или готовы начать проект?</p>
        <a href="#" id="consultBtn" class="button consult">Получить консультацию</a>
    </div>
</div>
