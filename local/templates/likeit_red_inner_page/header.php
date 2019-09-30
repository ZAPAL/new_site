<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<? $APPLICATION->ShowHead(); ?>
<title><? $APPLICATION->ShowTitle() ?></title>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <? $APPLICATION->AddHeadString('<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . SITE_TEMPLATE_PATH . '/css/nouislider.min.css" type="text/css" rel="stylesheet" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . SITE_TEMPLATE_PATH . '/css/main.css" type="text/css" rel="stylesheet" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . SITE_TEMPLATE_PATH . '/css/serviceItem.css" type="text/css" rel="stylesheet" />', true) ?>



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
<div class="pageWrapper">
    <header class="header tripleContainer">
        <div class="asideLeft">
        </div>
        <div class="header__container tripleContainer__center">
            <div class="header__top">
                <h1 class="header__title"><a href="/">Like<span>it</span></a></h1>
                <a class="header__calculate mainLink" href="#">Рассчитать
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
            <div class="serviceItem">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="#">Главная</a></li>
                        <li class="breadcrumbs__item"><a href="#">Услуги</a></li>
                        <li class="breadcrumbs__item"><a href="#">Интернет-агенство Лайкит</a></li>
                        <li class="breadcrumbs__item"><a href="#">Разработка web&mobile</a></li>
                    </ul>
                </div>
                <div class="serviceItem__title pageTitle pageTitle_noNumber">
                    <h2 class="pageTitle__text">Разработка корпоративных сайтов</h2>
                </div>
                <div class="serviceItem__text">Корпоративные сайты - лицо Вашей компании в интернете. Наши сайты адаптивны, быстро загружаются и отображаются идеально на любых устройствах, а самое главное - они производят нужное впечатление на Ваших клиентов.</div>
                <div class="serviceItem__container">
                    <div class="serviceItem__aside">
                        <ul class="serviceItem__list">
                            <li class="serviceItem__item active">
                                <div class="serviceItem__itemLabel">Разработка web&mobile</div>
                                <ul class="serviceItem__sublist">
                                    <li class="serviceItem__subitem"><a href="#">Создание интернет-магазина</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Корпоративные сайты</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Landing pages</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Техническая поддержка</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Мобильное приложение</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Уникальный проект</a></li>
                                </ul>
                            </li>
                            <li class="serviceItem__item">
                                <div class="serviceItem__itemLabel">UX/UI  дизайн</div>
                                <ul class="serviceItem__sublist">
                                    <li class="serviceItem__subitem"><a href="#">UX/UI дизайн</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Фирменный стиль</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Создание имиджевой графики</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Дизайн</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Разработка логотипа</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Упаковка бизнеса под ключ</a></li>
                                </ul>
                            </li>
                            <li class="serviceItem__item">
                                <div class="serviceItem__itemLabel">Digital-маркетинг</div>
                                <ul class="serviceItem__sublist">
                                    <li class="serviceItem__subitem"><a href="#">Маркетинговая стратегия</a></li>
                                    <li class="serviceItem__subitem"><a href="#">SEO продвижение</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Social Media Marketing</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Контекстная реклама</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Таргетированная реклама</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Квиз-маркетинг</a></li>
                                </ul>
                            </li>
                            <li class="serviceItem__item">
                                <div class="serviceItem__itemLabel">CRM автоматизация</div>
                                <ul class="serviceItem__sublist">
                                    <li class="serviceItem__subitem"><a href="#">Внедрение KPI</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Интеграция телефонии</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Автоматизация бизнес-процессов</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Обмен с 1С</a></li>
                                    <li class="serviceItem__subitem"><a href="#">Внедрение CRM</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="serviceItem__consult">
                            <div class="serviceItem__consultText">Нужна консультация или готовы начать проект?</div><a class="serviceItem__consultButton" href="#">Получить консультацию</a>
                        </div>
                    </div>








