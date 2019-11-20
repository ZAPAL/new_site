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
<div class="casesPage__top">
    <div class="contacts__title pageTitle pageTitle_noNumber casesPage__title">
        <h2 class="pageTitle__text"><? $APPLICATION->ShowTitle(false); ?></h2>
    </div>
    <div class="casesPage__top-left">
        <div class="casesName__list-wrapper">
            <ul class="casesName__list">
                <li class="casesName__list-item"><a class="casesName-link active" href="#">Бизнес-советы <span>(7)</span></a></li>
                <li class="casesName__list-item"><a class="casesName-link" href="#">Опросы <span>(1)</span></a></li>
                <li class="casesName__list-item"><a class="casesName-link" href="#">Повышение продаж <span>(3)</span></a></li>
                <li class="casesName__list-item"><a class="casesName-link" href="#">Продвижение и реклама <span>(19</span>)</a></li>
                <li class="casesName__list-item"><a class="casesName-link" href="#">Управление проектами <span>(2)</span></a></li>
                <li class="casesName__list-item"><a class="casesName-link" href="#">Электронная коммерция <span>(2)</span></a></li>
            </ul>
        </div>
    </div>
    <div class="casesPage__top-right">
        <p>Нужна консультация или готовы начать проект?</p>
        <a href="#" id="consultBtn" class="button consult">Получить консультацию</a>
    </div>
</div>
<div class="casesPage__content">
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "flat_blog",
    Array(
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "NEWS_COUNT" => $arParams["NEWS_COUNT"],

        "SORT_BY1" => $arParams["SORT_BY1"],
        "SORT_ORDER1" => $arParams["SORT_ORDER1"],
        "SORT_BY2" => $arParams["SORT_BY2"],
        "SORT_ORDER2" => $arParams["SORT_ORDER2"],

        "FILTER_NAME" => $arParams["FILTER_NAME"],
        "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
        "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
        "CHECK_DATES" => $arParams["CHECK_DATES"],
        "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
        "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
        "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
        "SEARCH_PAGE" => ($arParams["USE_SEARCH"] == "Y" ? $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["search"] : ''),

        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_FILTER" => $arParams["CACHE_FILTER"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],

        "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
        "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
        "SET_TITLE" => $arParams["SET_TITLE"],
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "MESSAGE_404" => $arParams["MESSAGE_404"],
        "SET_STATUS_404" => $arParams["SET_STATUS_404"],
        "SHOW_404" => $arParams["SHOW_404"],
        "FILE_404" => $arParams["FILE_404"],
        "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
        "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],

        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",

        "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
        "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
        "MEDIA_PROPERTY" => $arParams["MEDIA_PROPERTY"],
        "SLIDER_PROPERTY" => $arParams["SLIDER_PROPERTY"],

        "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
        "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
        "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
        "PAGER_TITLE" => $arParams["PAGER_TITLE"],
        "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
        "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
        "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
        "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
        "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
        "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
        "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],

        "USE_RATING" => $arParams["USE_RATING"],
        "DISPLAY_AS_RATING" => $arParams["DISPLAY_AS_RATING"],
        "MAX_VOTE" => $arParams["MAX_VOTE"],
        "VOTE_NAMES" => $arParams["VOTE_NAMES"],

        "USE_SHARE" => $arParams["LIST_USE_SHARE"],
        "SHARE_HIDE" => $arParams["SHARE_HIDE"],
        "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
        "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
        "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
        "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],

        "TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
    ),
    $component
); ?>
    <div class="blog__tags">
        <div class="title">Облако тегов</div>
        <div class="tags__container">
            <a class="tag">CRM</a>
            <a class="tag">SEO</a>
            <a class="tag">продвижение сайта</a>
            <a class="tag">wordpress или 1с битрикс</a>
            <a class="tag"> wordpress против битрикс</a>
            <a class="tag">белорусский хостинг</a>
            <a class="tag">бесплатный семинар</a>
            <a class="tag"> бизнес в регионах </a>
            <a class="tag">битва CMS</a>
            <a class="tag">биткоин</a>
            <a class="tag">блокчейн</a>
            <a class="tag">вебстудия</a>
            <a class="tag">всебелорусский</a>
            <a class="tag">семинар</a>
            <a class="tag">заказать</a>
            <a class="tag">белорусский</a>
            <a class="tag">хостинг</a>
            <a class="tag">как заказать сайт</a>
            <a class="tag">как работает ит компания</a>
            <a class="tag">как работают программисты</a>
            <a class="tag">как разводят клиентов</a>
            <a class="tag">корпоративный сайт</a>
            <a class="tag">криптовалюта купить</a>
            <a class="tag">хостинг в беларуси</a>
            <a class="tag">лучшие цены в россии</a>
            <a class="tag">обратный звонок</a>
            <a class="tag">онлайн-бизнес</a>
            <a class="tag">оптимизация сайта</a>
            <a class="tag">отчет о семинаре</a>
            <a class="tag">ошибки сайта</a>
            <a class="tag">партнеры</a>
            <a class="tag">планирование</a>
            <a class="tag">почему выбирают нас</a>
            <a class="tag">почему нет прибыли</a>
            <a class="tag">почему сайт не работает</a>
            <a class="tag">почта</a>
            <a class="tag">преимущества Лайкит</a>
            <a class="tag">продающий сайт</a>
        </div>
    </div>
</div>
