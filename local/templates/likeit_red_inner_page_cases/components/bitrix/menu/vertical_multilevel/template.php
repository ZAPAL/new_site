<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)): ?>
    <ul class="serviceItem__list">
    <?
    $previousLevel = 0;
foreach ($arResult as $arItem): ?>

    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
    <? endif ?>

    <? if ($arItem["IS_PARENT"]): ?>

    <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
    <li class="serviceItem__item <? if ($arItem["SELECTED"]):?>active<? endif; ?>">
    <div class="serviceItem__itemLabel"><?= $arItem["TEXT"] ?></div>
    <ul class="serviceItem__sublist">
    <? else: ?>
    <li class="serviceItem__subitem <? if ($arItem["SELECTED"]):?>active<? endif; ?>"><a href="<?= $arItem["LINK"] ?>"
                                                                                         class="parent<? if ($arItem["SELECTED"]):?> item-selected<? endif ?>"><?= $arItem["TEXT"] ?></a>
    <ul>
    <? endif ?>

    <? else:?>

        <? if ($arItem["PERMISSION"] > "D"):?>

            <? if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="serviceItem__item"><a href="<?= $arItem["LINK"] ?>"
                                                 class="<? if ($arItem["SELECTED"]):?>root-item-selected<? else:?>root-item<? endif ?>"><?= $arItem["TEXT"] ?></a>
                </li>
            <? else:?>
                <li class="serviceItem__subitem"><a
                            href="<?= $arItem["LINK"] ?>" <? if ($arItem["SELECTED"]):?> class="item-selected"<? endif ?>><?= $arItem["TEXT"] ?></a>
                </li>
            <? endif ?>

        <? else:?>

            <? if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="serviceItem__item"><a href=""
                                                 class="<? if ($arItem["SELECTED"]):?>root-item-selected<? else:?>root-item<? endif ?>"
                                                 title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a>
                </li>
            <? else:?>
                <li class="serviceItem__subitem"><a href="" class="denied"
                                                    title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a>
                </li>
            <? endif ?>

        <? endif ?>

    <? endif ?>

    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

<? endforeach ?>

    <? if ($previousLevel > 1)://close last item tags?>
        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
    <? endif ?>

    </ul>
<? endif ?>