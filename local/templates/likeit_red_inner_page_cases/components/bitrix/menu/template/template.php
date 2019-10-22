<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <ul class="serviceItem__list">
        <!--<li class="serviceItem__item active">
            <div class="serviceItem__itemLabel">Разработка web&mobile</div>
            <ul class="serviceItem__sublist">
                <li class="serviceItem__subitem"><a href="#">Создание интернет-магазина</a></li>
                <li class="serviceItem__subitem"><a href="#">Корпоративные сайты</a></li>
                <li class="serviceItem__subitem"><a href="#">Landing pages</a></li>
                <li class="serviceItem__subitem"><a href="#">Техническая поддержка</a></li>
                <li class="serviceItem__subitem"><a href="#">Мобильное приложение</a></li>
                <li class="serviceItem__subitem"><a href="#">Уникальный проект</a></li>
            </ul>
        </li>-->
        <?
        echo "<pre>", print_r($arResult), "</pre>";
        foreach ($arResult as $arItem):

            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <? if ($arItem["SELECTED"]):?>
            <li class="serviceItem__item active">
                <div class="serviceItem__itemLabel"><?= $arItem["TEXT"] ?></div>
            </li>
        <? else:?>
            <li class="serviceItem__item">
                <div class="serviceItem__itemLabel"><?= $arItem["TEXT"] ?></div>
            </li>
        <? endif ?>

        <? endforeach ?>
    </ul>
<? endif ?>