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
?>
    <div class="cases__slider">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="cases__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="cases__imageWrapper"><img class="cases__image"
                                                      src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt=""></div>
                <div class="cases__overlay"></div>
                <div class="cases__content">
                    <div class="cases__title"><?= $arItem["NAME"] ?></div>
                    <div class="cases__label">Интернет магазин</div>
                    <div class="cases__text"><? echo $arItem["PREVIEW_TEXT"]; ?></div>
                    <a class="cases__more mainLink" href="<? echo $arItem["DETAIL_PAGE_URL"] ?>">Подробнее</a>
                </div>
            </div>
        <? endforeach; ?>
    </div>

