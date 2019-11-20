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
    <? $APPLICATION->AddHeadString('<link href="' . SITE_DIR . 'resource/css/services.css" type="text/css" rel="stylesheet" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . SITE_DIR . 'resource/css/serviceItem.css" type="text/css" rel="stylesheet" />', true) ?>


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
    <header class="header header-main tripleContainer">
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
            <div <?if(strstr($APPLICATION->GetCurDir(), '/blog/')):?>class="contacts blog casesPage tripleContainer__center"<?else:?>class="services"<?endif;?>>
                <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "template", Array(
                    "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
                    "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                    "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                ),
                    false
                ); ?>
