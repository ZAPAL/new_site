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
<div class="directions__options">
    <? foreach ($arResult["ITEMS"] as $arSection): ?>
        <div class="dirOption"><a class="dirOption__title"
                                  href="<?= $arSection['SECTION_PAGE_URL'] ?>"><?= $arSection['NAME'] ?></a>
            <ul class="dirOption__list">
                <? foreach ($arSection["ELEMENTS"] as $key => $arItem): ?>
                    <li class="dirOption__item"><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
                    </li>
                <? endforeach ?>
            </ul>
        </div>
    <? endforeach ?>
</div>