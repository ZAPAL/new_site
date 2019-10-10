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
?>
<ul class="serviceItem__optionsList">
    <? foreach ($arResult["ITEMS"] as $arItem):
        ?>
        <li class="serviceItem__optionsItem">
            <div class="serviceItem__image">
                <svg class="serviceItem__svgImage">
                    <use href="<?=$arItem["PROPERTIES"]["ICON"]["VALUE"]?>"></use>
                </svg>
            </div>
            <div class="serviceItem__optionsContent">
                <div class="serviceItem__optionsLabel"><?=$arItem["NAME"]?></div>
                <div class="serviceItem__optionsText"><?=$arItem["PREVIEW_TEXT"]?></div>
            </div>
            <div class="serviceItem__more mainLink" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</div>
        </li>
    <? endforeach ?>
</ul>