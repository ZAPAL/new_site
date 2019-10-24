<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<? $APPLICATION->ShowHead(); ?>
<title><? $APPLICATION->ShowTitle() ?></title>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <? $APPLICATION->AddHeadString('<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . SITE_DIR . 'resource/css/nouislider.min.css" type="text/css" rel="stylesheet" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . SITE_DIR . 'resource/css/main.css" type="text/css" rel="stylesheet" />', true) ?>


</head>
<? $APPLICATION->ShowPanel() ?>
<body>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    ".default",
    array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "AREA_FILE_RECURSIVE" => "Y",
        "EDIT_TEMPLATE" => "",
        "COMPONENT_TEMPLATE" => ".default",
        "PATH" => SITE_DIR."resource/include/header_burger_menu.php"
    ),
    false
);?>
<div class="popupCount-overlay tripleContainer hide" id="popupCount">
    <div class="asideLeft"></div>


    <?$APPLICATION->IncludeComponent("likeit:main.feedback", "template", Array(
        "USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
        "OK_TEXT" => "Спасибо, ваше обращение принято.",	// Сообщение, выводимое пользователю после отправки
        "EMAIL_TO" => "ZAPAL666@mail.ru",
        //"AJAX_MODE" => "Y",// E-mail, на который будет отправлено письмо
        "REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
            0 => "NAME",
            1 => "EMAIL",
            2 => "PHONE",
        ),
        "EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
            0 => "27",
        )
    ),
        false
    );?>

    <div class="asideRight"></div>
</div>
<!--<div class="popupCount-overlay tripleContainer hide" id="popupConsult">
    <div class="asideLeft"></div>
    <div class="tripleContainer__center">
        <div class="popupForm__close">
            <span id="popupCloseConsult">&#10006;</span>
        </div>
        <div class="popupFormWrapper">
            <h2 class="popupTitle">Рассчитать проект</h2>
            <p>Для рассчета проекта оставьте свои контакты, наш менеджер свяжется с вами для уточнения деталей.</p>
            <form action="" class="popupForm">
                <div class="input-wrapper">
                    <input type="text" id="nameConsult" name="nameConsult" placeholder="Ваше имя" class="fieldConsult">
                    <p class="error" id="nameConsultError"></p>
                </div>
                <div class="input-wrapper">
                    <input type="email" id="mailConsult" name="mailConsult" placeholder="Ваш Email"
                           class="fieldConsult">
                    <p class="error" id="mailConsultError"></p>
                </div>
                <div class="input-wrapper">
                    <input type="tel" id="phoneConsult" name="phoneConsult" placeholder="Ваш телефон"
                           class="fieldConsult">
                    <p class="error" id="phoneConsultError"></p>
                </div>
                <a class="popupLink" href="#" id="consult">Отправить заявку</a>
            </form>
        </div>
    </div>
    <div class="asideRight"></div>
</div>-->
<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    ".default",
    array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "AREA_FILE_RECURSIVE" => "Y",
        "EDIT_TEMPLATE" => "",
        "COMPONENT_TEMPLATE" => ".default",
        "PATH" => SITE_DIR . "resource/include/header_svg.php"
    ),
    false
); ?>

<div class="pageWrapper">
    <div class="page-elements page-elements-blur">
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
        <div class="image_blur"><img src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
    </div>
    <header class="header tripleContainer">
        <div class="asideLeft">
        </div>
        <div class="header__container tripleContainer__center">
            <div class="header__top">
                <h1 class="header__title"><a href="/">Like<span>it</span></a></h1>
                <a class="header__calculate mainLink" id="popupButtonHeader" href="#">Рассчитать
                    проект</a>
                <div class="header__phone">+375 (29) 322-00-20</div>
                <div class="header__language langSwitch">
                    <div class="langSwitch__item langSwitch__item_active langSwitch__item_ru">Ru</div>
                    <div class="langSwitch__item langSwitch__item_en">En</div>
                </div>
                <div class="header__menuButton menuAnimatedButton">
                    <div class="menuAnimatedButton__menuLine menuAnimatedButton__menuLine_top"></div>
                    <div class="menuAnimatedButton__menuLine menuAnimatedButton__menuLine_middle"></div>
                    <div class="menuAnimatedButton__menuLine menuAnimatedButton__menuLine_bottom"></div>
                    <!--svg.svgBurger//use(href='#burger')
                      -->
                </div>
            </div>
            <div class="header__slider">
                <div class="mainSlider js-unload">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "slider",
                        array(
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "N",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "AJAX_MODE" => "N",
                            "IBLOCK_TYPE" => "-",
                            "IBLOCK_ID" => "1",
                            "NEWS_COUNT" => "5",
                            "SORT_BY1" => "ID",
                            "SORT_ORDER1" => "ASC",
                            "SORT_BY2" => "",
                            "SORT_ORDER2" => "",
                            "FILTER_NAME" => "",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "ACTIVE_DATE_FORMAT" => "",
                            "SET_TITLE" => "N",
                            "SET_BROWSER_TITLE" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "3600",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "PAGER_TITLE" => "",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => "",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "SET_STATUS_404" => "N",
                            "SHOW_404" => "N",
                            "MESSAGE_404" => "",
                            "PAGER_BASE_LINK" => "",
                            "PAGER_PARAMS_NAME" => "arrPager",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "N",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "COMPONENT_TEMPLATE" => "slider",
                            "STRICT_SECTION_CHECK" => "N"
                        ),
                        false
                    ); ?>
                </div>
                <div class="header__elements">
                    <a href="#section" class="header__scroll">
                        <div class="header__scrollCircle">
                            <svg class="svgScroll">
                                <use href="#scrollArrow"></use>
                            </svg>
                        </div>
                    </a>
                    <div class="header__parallax">
                        <div class="header__image header__image_small js-unload" data-speed-x="-4" data-speed-y="2"><img
                                    src="<?= SITE_DIR ?>resource/img/shard_1.png"></div>
                        <div class="header__image header__image_big js-unload" data-speed-x="10" data-speed-y="-3"><img
                                    src="<?= SITE_DIR ?>resource/img/shard_1.png"></div>
                        <div class="header__image header__image_blur js-unload" data-speed-x="-1" data-speed-y="6"><img
                                    src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="asideRight">
        </div>
    </header>






