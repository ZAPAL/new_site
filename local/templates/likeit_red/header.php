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
<div class="popupWrapper">
    <div class="mainMenu tripleContainer">
        <div class="asideLeft"></div>
        <div class="mainMenu__container tripleContainer__center">
            <div class="mainMenu__header">
                <div class="mainMenu__title">Likeit</div>
                <div class="mainMenu__language langSwitch">
                    <div class="langSwitch__item langSwitch__item_active langSwitch__item_ru langSwitch__item_white">
                        Ru
                    </div>
                    <div class="langSwitch__item langSwitch__item_en langSwitch__item_white">En</div>
                </div>
                <div class="mainMenu__close menuAnimatedButton">
                    <div class="menuAnimatedButton__menuLine menuAnimatedButton__menuLine_top"></div>
                    <div class="menuAnimatedButton__menuLine menuAnimatedButton__menuLine_middle"></div>
                    <div class="menuAnimatedButton__menuLine menuAnimatedButton__menuLine_bottom"></div>
                    <!--svg.svgClose//use(href='#close')
                      -->
                </div>
            </div>
            <div class="mainMenu__content">
                <div class="mainMenu__list mainMenu__list_mobile">
                    <div class="mainMenu__item">
                        <div class="mainMenu__label mainMenu__label_tab">О компании</div>
                        <ul class="mainMenu__subList js-tabContent">
                            <li class="mainMenu__subItem"><a href="#">О компании</a></li>
                            <li class="mainMenu__subItem"><a href="#">Партнеры</a></li>
                            <li class="mainMenu__subItem"><a href="#">Отзывы</a></li>
                            <li class="mainMenu__subItem"><a href="#">Вакансии</a></li>
                        </ul>
                    </div>
                    <div class="mainMenu__item">
                        <div class="mainMenu__label mainMenu__label_tab">Наши услуги</div>
                        <ul class="mainMenu__subList js-tabContent">
                            <li class="mainMenu__subItem"><a href="#">Разработка web&mobile</a></li>
                            <li class="mainMenu__subItem"><a href="#">UX/Ui дизайн</a></li>
                            <li class="mainMenu__subItem"><a href="#">Digital-маркетинг</a></li>
                            <li class="mainMenu__subItem"><a href="#">CRM автоматизация</a></li>
                        </ul>
                    </div>
                    <div class="mainMenu__item">
                        <div class="mainMenu__label mainMenu__label_tab">Кейсы</div>
                        <ul class="mainMenu__subList js-tabContent">
                            <li class="mainMenu__subItem"><a href="#">UX/UI дизайн</a></li>
                            <li class="mainMenu__subItem"><a href="#">Landing pages</a></li>
                            <li class="mainMenu__subItem"><a href="#">Интернет-магазины</a></li>
                            <li class="mainMenu__subItem"><a href="#">Корпоративные сайты</a></li>
                            <li class="mainMenu__subItem"><a href="#">Внедрение CRM</a></li>
                            <li class="mainMenu__subItem"><a href="#">SEO продвижение</a></li>
                            <li class="mainMenu__subItem"><a href="#">Контекстная реклама</a></li>
                        </ul>
                    </div>
                    <div class="mainMenu__item">
                        <div class="mainMenu__label"><a href="#">Блог</a></div>
                    </div>
                    <div class="mainMenu__item">
                        <div class="mainMenu__label mainMenu__label_tab">Продукты</div>
                        <ul class="mainMenu__subList js-tabContent">
                            <li class="mainMenu__subItem"><a href="#">1С-Битрикс: Управление сайтом</a></li>
                            <li class="mainMenu__subItem"><a href="#">CRM системы</a></li>
                        </ul>
                    </div>
                    <div class="mainMenu__item">
                        <div class="mainMenu__label"><a href="#">Контакты</a></div>
                    </div>
                </div>
                <div class="mainMenu__list mainMenu__list_desktop">
                    <div class="mainMenu__column">
                        <div class="mainMenu__item">
                            <div class="mainMenu__label">О компании</div>
                            <ul class="mainMenu__subList">
                                <li class="mainMenu__subItem"><a href="#">О компании</a></li>
                                <li class="mainMenu__subItem"><a href="#">Партнеры</a></li>
                                <li class="mainMenu__subItem"><a href="#">Отзывы</a></li>
                                <li class="mainMenu__subItem"><a href="#">Вакансии</a></li>
                            </ul>
                        </div>
                        <div class="mainMenu__item">
                            <div class="mainMenu__label">Продукты</div>
                            <ul class="mainMenu__subList">
                                <li class="mainMenu__subItem"><a href="#">1С-Битрикс: Управление сайтом</a></li>
                                <li class="mainMenu__subItem"><a href="#">CRM системы</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mainMenu__column">
                        <div class="mainMenu__item">
                            <div class="mainMenu__label">Наши услуги</div>
                            <ul class="mainMenu__subList">
                                <li class="mainMenu__subItem"><a href="#">Разработка web&mobile</a></li>
                                <li class="mainMenu__subItem"><a href="#">UX/Ui дизайн</a></li>
                                <li class="mainMenu__subItem"><a href="#">Digital-маркетинг</a></li>
                                <li class="mainMenu__subItem"><a href="#">CRM автоматизация</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mainMenu__column">
                        <div class="mainMenu__item">
                            <div class="mainMenu__label">Кейсы</div>
                            <ul class="mainMenu__subList">
                                <li class="mainMenu__subItem"><a href="#">UX/UI дизайн</a></li>
                                <li class="mainMenu__subItem"><a href="#">Landing pages</a></li>
                                <li class="mainMenu__subItem"><a href="#">Интернет-магазины</a></li>
                                <li class="mainMenu__subItem"><a href="#">Корпоративные сайты</a></li>
                                <li class="mainMenu__subItem"><a href="#">Внедрение CRM</a></li>
                                <li class="mainMenu__subItem"><a href="#">SEO продвижение</a></li>
                                <li class="mainMenu__subItem"><a href="#">Контекстная реклама</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mainMenu__column">
                        <div class="mainMenu__item">
                            <div class="mainMenu__label"><a href="#">Блог</a></div>
                        </div>
                        <div class="mainMenu__item">
                            <div class="mainMenu__label"><a href="#">Контакты</a></div>
                            <ul class="mainMenu__subList">
                                <li class="mainMenu__subItem mainMenu__subItem_big mainMenu__subItem_thin">+375 (29)
                                    322-00-20
                                </li>
                                <li class="mainMenu__subItem mainMenu__subItem_thin">info@likeit.by</li>
                                <li class="mainMenu__subItem mainMenu__subItem_thin">Минск, ул. Казинца 11а, Барановичи,
                                    ул.
                                    Куйбышева,111 офис 211
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mainMenu__positioned"><a class="mainMenu__link mainLink mainLink_white" href="#">Рассчитать
                        проект</a>
                    <ul class="asideMenu asideMenu_common">
                        <li class="asideMenu__item asideMenu__item_common"><a href="#">Behance</a></li>
                        <li class="asideMenu__item asideMenu__item_common"><a href="#">Facebook</a></li>
                        <li class="asideMenu__item asideMenu__item_common"><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="asideRight"></div>
    </div>
    <div class="popupVideo">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
                <div class="object" id="object_five"></div>
                <div class="object" id="object_six"></div>
                <div class="object" id="object_seven"></div>
                <div class="object" id="object_eight"></div>
            </div>
        </div>
    </div>
</div>
<div class="popupCount-overlay tripleContainer hide" id="popupCount">
    <div class="asideLeft"></div>
    <div class="tripleContainer__center">
        <div class="popupForm__close">
            <span id="popupClose">&#10006;</span>
        </div>
        <div class="popupFormWrapper">
            <h2 class="popupTitle">Рассчитать проект</h2>
            <p>Для рассчета проекта оставьте свои контакты, наш менеджер свяжется с вами для уточнения деталей.</p>
            <form action="" class="popupForm">
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
            </form>
        </div>
    </div>
    <div class="asideRight"></div>
</div>
<div class="popupCount-overlay tripleContainer hide" id="popupConsult">
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
</div>
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






