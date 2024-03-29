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
<div class="casesPage__slider">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        //echo "<pre>", print_r($arItem), "</pre>";
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="cases__item blog__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <?if(!empty($arItem["PROPERTIES"]["METKA"]["PROPERTY_VALUE_ID"])):?><div class="bage <?=$arItem["PROPERTIES"]["METKA"]["VALUE_XML_ID"]?>"><?=$arItem["PROPERTIES"]["METKA"]["VALUE"]?></div><?endif;?>
            <div class="blog__item_name"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?= $arItem["NAME"] ?></a></div>
            <div class="blog__item_text"><?= $arItem["PREVIEW_TEXT"]; ?></div>
            <div class="blog__item_date"><?= ConvertDateTime($arItem["DATE_CREATE"], "DD.MM.YYYY HH:MI", "ru");?></div>
        </div>
    <? endforeach; ?>
</div>

