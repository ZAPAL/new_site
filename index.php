<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Разработка и продвижение сайтов в Минске| Создание сайта под ключ - Digital-агентство Лайкит");
$APPLICATION->SetPageProperty("keywords", "Лайкит, LikeIT, продвижение сайтов, разработка сайтов, web продвижение, seo продвижение");
$APPLICATION->SetPageProperty("description", "Digital-агентство LikeIT специализируется на оказании широкого спектра услуг как для корпоративных клиентов, так и для частных лиц.");
$APPLICATION->SetTitle("Разработка и продвижение сайтов");
?>
    <div class="directions tripleContainer" id="section">
        <div class="asideLeft"></div>
        <div class="directions__container tripleContainer__center">
            <div class="directions__content">
                <div class="directions__title pageTitle">
                    <div class="pageTitle__number">01</div>
                    <h2 class="pageTitle__text">Решения</h2>
                </div>

                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "services",
                    array(
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "N",
                        "DISPLAY_PICTURE" => "N",
                        "DISPLAY_PREVIEW_TEXT" => "N",
                        "AJAX_MODE" => "N",
                        "IBLOCK_TYPE" => "-",
                        "IBLOCK_ID" => "2",
                        "NEWS_COUNT" => "60",
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
                        "COMPONENT_TEMPLATE" => "services",
                        "STRICT_SECTION_CHECK" => "N"
                    ),
                    false
                ); ?>
            </div>
        </div>
        <div class="asideRight"></div>
    </div>
    <div class="opportunities tripleContainer">
        <div class="asideLeft asideLeft_white">
        </div>
        <div class="opportunities__container tripleContainer__center">
            <div class="opportunities__video__container">
                <div class="company-name__big">LIKEIT</div>
                <div class="opportunities__video" data-url="https://www.youtube.com/embed/NpEaa2P7qZI">
                    <div class="opportunities__overlay"></div>
                    <div class="opportunities__play">
                        <div class="opportunities__circle">
                            <svg class="svgPlay">
                                <use xlink:href="#Polygon"></use>
                            </svg>
                        </div>
                        <span>Смотреть видео</span>
                    </div>
                </div>
            </div>
            <div class="opportunities__content">
                <div class="opportunities__title pageTitle">
                    <div class="pageTitle__number">02</div>
                    <h2 class="pageTitle__text">Преимущества</h2>
                </div>
                <ul class="opportunities__accordion">
                    <li class="opportunities__item">
                        <div class="opportunities__label">Решения, основанные на аналитике</div>
                        <div class="opportunities__text">Прежде чем выбрать какое-то решение , детально изучаем
                            доступные данные и
                            проводим исследования рынка, товаров или услуг. Разработка нескольких вариантов позволяет
                            максимально
                            точно попасть в ожидания клиента и достичь запланированных бизнес-метрик.
                        </div>
                    </li>
                    <li class="opportunities__item">
                        <div class="opportunities__label">Системная работа</div>
                        <div class="opportunities__text">Каждый проект разделён на этапы. Результат каждого этапа –
                            решение
                            приоритетных задач. Такая система снижает до минимума проектные риски, сроки запуска и сдачи
                            проекта.
                        </div>
                    </li>
                    <li class="opportunities__item">
                        <div class="opportunities__label">Надёжные технологии</div>
                        <div class="opportunities__text">Надёжность платформ, которые мы используем для разработки
                            решений,
                            подтверждена неоднократно. Максимальная эффективность обусловлена тем, что каждый компонент
                            соответствует проектной задаче и поддерживает общую архитектуру.<br>В результате получаем
                            гибкое и
                            заточенное под клиента решение.
                        </div>
                    </li>
                    <li class="opportunities__item">
                        <div class="opportunities__label">UX/UI дизайн</div>
                        <div class="opportunities__text">Дизайн, который имеет влияние на пользователя.</div>
                    </li>
                    <li class="opportunities__item">
                        <div class="opportunities__label">Команда, которая вдохновляет</div>
                        <div class="opportunities__text">Когда человек делает то, что любит – это видно сразу. Мы
                            приглашаем
                            именно таких специалистов. С ними приятно не просто работать и учиться новому, а двигать
                            компанию
                            вперёд.<br>Именно это во многом является приоритетным фактором успеха.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="asideRight asideRight_white">
        </div>
    </div>
    <div class="facts tripleContainer">
        <div class="asideLeft">
        </div>
        <div class="facts__container tripleContainer__center">
            <div class="facts__title pageTitle">
                <div class="pageTitle__number">03</div>
                <h2 class="pageTitle__text">Факты</h2>
            </div>
            <div class="facts__elements">
                <div class="facts__image facts__image_small" data-speed-x="-2" data-speed-y="0"><img
                            src="<?= SITE_DIR ?>resource/img/shard_1.png"></div>
                <div class="facts__image facts__image_big" data-speed-x="4" data-speed-y="0"><img
                            src="<?= SITE_DIR ?>resource/img/shard_1.png"></div>
                <div class="facts__image facts__image_blur" data-speed-x="-6" data-speed-y="0"><img
                            src="<?= SITE_DIR ?>resource/img/shard_2.png"></div>
            </div>
            <div class="facts__picture">
                <img src="<?= SITE_DIR ?>resource/img/1c.jpg" alt>
                <img src="<?= SITE_DIR ?>resource/img/rate.jpg" alt>
            </div>
            <div class="top5"><span>TOP5</span></div>
            <ul class="facts__list">
                <li class="facts__item">
                    <div class="facts__value"><span data-step="183" data-goal="2013">0</span></div>
                    <div class="facts__text">6 лет опыта работы</div>
                </li>
                <li class="facts__item">
                    <div class="facts__value"><span data-step="1" data-goal="15">0</span></div>
                    <div class="facts__text">Cпециалистов в команде</div>
                </li>
                <li class="facts__item">
                    <div class="facts__value"><span data-step="10" data-goal="200">0</span>+</div>
                    <div class="facts__text">Разработанных сайтов</div>
                </li>
                <li class="facts__item">
                    <div class="facts__value"><span data-step="5" data-goal="50">0</span>+</div>
                    <div class="facts__text">Успешных стратегий продвижения</div>
                </li>
                <li class="facts__item">
                    <div class="facts__value">х 1.5+</div>
                    <div class="facts__text">Повышение ROI</div>
                </li>
                <li class="facts__item">
                    <div class="facts__value"><span data-step="6" data-goal="90">0</span>%</div>
                    <div class="facts__text">Клиентов сотрудничают с нами на постоянной основе</div>
                </li>
            </ul>
        </div>
        <div class="asideRight">

        </div>
    </div>
    <div class="realm tripleContainer">
        <div class="asideLeft asideLeft_white">
        </div>
        <div class="realm__container tripleContainer__center ">
            <div class="realm__content">
                <div class="realm__title pageTitle pageTitle_white">
                    <div class="pageTitle__number">04</div>
                    <h2 class="pageTitle__text">Отрасли</h2>
                </div>
                <ul class="realm__list">
                    <li class="realm__wrapper">
                        <div class="realm__item">
                            <div class="imageWrapper">
                                <img src="<?= SITE_DIR ?>resource/img/opportunitiesImage.jpg" alt="image">
                                <div class="layer"></div>
                                <span class="realm__item-title">Строительство</span>
                            </div>
                            <div class="realm__wrapper-content">
                                <div class="realm__item__innerTitle">СТРОИТЕЛЬСТВО</div>
                                <ul class="realm__item__describeList">
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Корпоратиные сайты</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Внедрение CRM-систем</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Калькуляторы рассчётов</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Онлайн-планировки квартир</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Порталы недвижимости</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Интерактивный подбор</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="realm__wrapper">
                        <div class="realm__item">
                            <div class="imageWrapper">
                                <img src="<?= SITE_DIR ?>resource/img/delivery.jpg" alt="image">
                                <div class="layer"></div>
                                <span class="realm__item-title">Грузоперевозки</span>
                            </div>
                            <div class="realm__wrapper-content">
                                <div class="realm__item__innerTitle">Грузоперевозки</div>
                                <ul class="realm__item__describeList">
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Системы контроля и слежения за грузами</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Сервисы по управлению заказами</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Системы самообслуживания для B2B- и B2C-клиентов</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Подключение систем оплаты</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Внедрение CRM</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Транспортные порталы</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="realm__wrapper">
                        <div class="realm__item">
                            <div class="imageWrapper">
                                <img src="<?= SITE_DIR ?>resource/img/tourist.jpg" alt="image">
                                <div class="layer"></div>
                                <span class="realm__item-title">Туризм</span>
                            </div>
                            <div class="realm__wrapper-content">
                                <div class="realm__item__innerTitle">Туризм</div>
                                <ul class="realm__item__describeList">
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Корпоратиные сайты</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Калькуляторы стоимостии</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Системы онлайн-бронирования</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Подключение платёжных систем</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Программы лояльности</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Порталы</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="realm__wrapper">
                        <div class="realm__item">
                            <div class="imageWrapper">
                                <img src="<?= SITE_DIR ?>resource/img/ecommerce.jpg" alt="image">
                                <div class="layer"></div>
                                <span class="realm__item-title">E-COMMERCE</span>
                            </div>
                            <div class="realm__wrapper-content">
                                <div class="realm__item__innerTitle">E-COMMERCE</div>
                                <ul class="realm__item__describeList">
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Подключение систем оплат</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Сайты каталоги, агрегаторы услуг и товаров</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Системы самообслуживания для B2B- и B2C-клиентов</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Системы дополнительных продаж</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Программы лояльности</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Соответствие законодательным требованиям</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="realm__wrapper">
                        <div class="realm__item">
                            <div class="imageWrapper">
                                <img src="<?= SITE_DIR ?>resource/img/industrial.jpg" alt="image">
                                <div class="layer"></div>
                                <span class="realm__item-title">Производство</span>
                            </div>
                            <div class="realm__wrapper-content">
                                <div class="realm__item__innerTitle">Производство</div>
                                <ul class="realm__item__describeList">
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Корпоративные сайты</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Расчеты страховых продуктов</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Автоматизация бизнес-процессов</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Внедрение KPI</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Разработка внутренних сервисов</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Разработка мобильных приложений</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="realm__wrapper">
                        <div class="realm__item">
                            <div class="imageWrapper">
                                <img src="<?= SITE_DIR ?>resource/img/medicine.jpg" alt="image">
                                <div class="layer"></div>
                                <span class="realm__item-title">Медицина</span>
                            </div>
                            <div class="realm__wrapper-content">
                                <div class="realm__item__innerTitle">Медицина</div>
                                <ul class="realm__item__describeList">
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Корпоративные сайты</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Мобильные приложения</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Системы бронирования</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Системы дополнительных и перекрестных продаж</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Программы лояльности</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Сервисы онлайн-консультаций</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="realm__wrapper">
                        <div class="realm__item">
                            <div class="imageWrapper">
                                <img src="<?= SITE_DIR ?>resource/img/trade.jpg" alt="image">
                                <div class="layer"></div>
                                <span class="realm__item-title">Розничная и оптовая торговля</span>
                            </div>
                            <div class="realm__wrapper-content">
                                <div class="realm__item__innerTitle">Розничная и оптовая торговля</div>
                                <ul class="realm__item__describeList">
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Интернет-магазины</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Интеграция с 1С и CRM</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Системы самообслуживания для B2B- и B2C-клиентов</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Системы дополнительных и перекрестных продаж</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Программы лояльности</span>
                                    </li>
                                    <li class="realm__item__describeItem">
                                        <svg class="svgTick">
                                            <use href="#tick"></use>
                                        </svg>
                                        <span>Электронно-торговые площадки</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="asideRight asideRight_white">
            <!-- <div class="asideCopy">© 2013-2019 LIKEIT / web-engineering co</div> -->
        </div>
    </div>
    <div class="clients tripleContainer">
        <div class="asideLeft">
        </div>
        <div class="clients__container tripleContainer__center">
            <div class="clients__header">
                <div class="clients__mainTitle pageTitle">
                    <div class="pageTitle__number">05</div>
                    <h2 class="pageTitle__text">Наши клиенты</h2>
                </div>
            </div>
            <ul class="clients__list">
                <li class="clients__item">
                    <div class="clients__image"><img src="<?= SITE_DIR ?>resource/img/client1.png" alt></div>
                    <div class="clients__content">
                        <div class="clients__label">Raivbel</div>
                        <div class="clients__text">Официальный поставщик преимиальных марок кофе и чая в Республике
                            Беларусь в
                            сегменте HoReCa
                        </div>
                    </div>
                </li>
                <li class="clients__item">
                    <div class="clients__image"><img src="<?= SITE_DIR ?>resource/img/client2.png" alt></div>
                    <div class="clients__content">
                        <div class="clients__label">Беларуская Чыгунка</div>
                        <div class="clients__text">Белорусская железная дорога</div>
                    </div>
                </li>
                <li class="clients__item">
                    <div class="clients__image"><img src="<?= SITE_DIR ?>resource/img/client3.png" alt></div>
                    <div class="clients__content">
                        <div class="clients__label">Assuta Clinic</div>
                        <div class="clients__text">Ведущий и самый современный медицинский центр в Израиле</div>
                    </div>
                </li>
                <li class="clients__item">
                    <div class="clients__image"><img src="<?= SITE_DIR ?>resource/img/client4.png" alt></div>
                    <div class="clients__content">
                        <div class="clients__label">Ami Мебель</div>
                        <div class="clients__text">Крупнейший производитель мебели</div>
                    </div>
                </li>
                <li class="clients__item">
                    <div class="clients__image"><img src="<?= SITE_DIR ?>resource/img/client5.png" alt></div>
                    <div class="clients__content">
                        <div class="clients__label">Hankook</div>
                        <div class="clients__text">Известный на весь мир Южнокорейский производитель шин</div>
                    </div>
                </li>
                <li class="clients__item">
                    <div class="clients__image"><img src="<?= SITE_DIR ?>resource/img/client6.png" alt></div>
                    <div class="clients__content">
                        <div class="clients__label">Leicht Küchen</div>
                        <div class="clients__text">Диллер производителя одной из лучших премиальных марок в Германии
                        </div>
                    </div>
                </li>
                <li class="clients__item">
                    <div class="clients__image"><img src="<?= SITE_DIR ?>resource/img/client7.png" alt></div>
                    <div class="clients__content">
                        <div class="clients__label">BYCKOVSKI</div>
                        <div class="clients__text">Европейскй бренд дизайнерских сумок и аксессуаров</div>
                    </div>
                </li>
                <li class="clients__item">
                    <div class="clients__image"><img src="<?= SITE_DIR ?>resource/img/client8.png" alt></div>
                    <div class="clients__content">
                        <div class="clients__label">Siesta</div>
                        <div class="clients__text">Белорусский производитель ортопедических матрасов и подушек</div>
                    </div>
                </li>
                <li class="clients__item">
                    <div class="clients__image"><img src="<?= SITE_DIR ?>resource/img/client9.png" alt></div>
                    <div class="clients__content">
                        <div class="clients__label">AUTOLIGHT EXPRESS</div>
                        <div class="clients__text">Транспотно-экспедиторная компания</div>
                    </div>
                </li>
                <li class="clients__item">
                    <div class="clients__image"><img src="<?= SITE_DIR ?>resource/img/client10.png" alt></div>
                    <div class="clients__content">
                        <div class="clients__label">Ключевые решения</div>
                        <div class="clients__text">Одна из ведущих консалтинговых компаний Беларуси, предоставляющая
                            услуги по
                            управленческому консультированию предприятий.
                        </div>
                    </div>
                </li>
                <li class="clients__item">
                    <div class="clients__image"><img src="<?= SITE_DIR ?>resource/img/client11.png" alt></div>
                    <div class="clients__content">
                        <div class="clients__label">Белагропромбанк</div>
                        <div class="clients__text">Один из крупнейших банков в Центральной и Восточной Евпропе</div>
                    </div>
                </li>
                <li class="clients__item">
                    <div class="clients__image"><img src="<?= SITE_DIR ?>resource/img/client12.png" alt></div>
                    <div class="clients__content">
                        <div class="clients__label">Жилой комплекс Д3</div>
                        <div class="clients__text">Элитный жилой комплекс в Лебяжьем</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="asideRight">
            <!-- <div class="asideCopy">© 2013-2019 LIKEIT / web-engineering co</div> -->
        </div>
    </div>
    <div class="cases tripleContainer">
        <div class="asideLeft">

        </div>
        <div class="cases__container tripleContainer__center">
            <div class="cases__header">
                <div class="cases__mainTitle pageTitle">
                    <div class="pageTitle__number">06</div>
                    <h2 class="pageTitle__text">Наши кейсы</h2>
                </div>
                <a class="cases__watch mainLink" href="/projects/">Смотреть все кейсы</a>
            </div>
            <?
            global $arrFilter;
            $arrFilter = array('PROPERTY_TO_SLIDER' => "Y");
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "flat",
                array(
                    "COMPONENT_TEMPLATE" => "flat",
                    "IBLOCK_TYPE" => "-",
                    "IBLOCK_ID" => "3",
                    "NEWS_COUNT" => "4",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "arrFilter",
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
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
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
                    "STRICT_SECTION_CHECK" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "SET_STATUS_404" => "N",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => ""
                ),
                $component
            ); ?>


            <!--<div class="cases__slider">
                <div class="cases__item">
                    <div class="cases__imageWrapper"><img class="cases__image" src="<? /*= SITE_DIR */ ?>resource/img/Ami.jpg"
                                                          alt></div>
                    <div class="cases__overlay"></div>
                    <div class="cases__content">
                        <div class="cases__title">Aminohome.by</div>
                        <div class="cases__label">Интернет магазин</div>
                        <div class="cases__text">Современная дизайн мебельного ритейлера – баланс красоты и комфорта.
                        </div>
                        <a class="cases__more mainLink" href="#">Подробнее</a>
                    </div>
                </div>
                <div class="cases__item">
                    <div class="cases__imageWrapper"><img class="cases__image"
                                                          src="<? /*= SITE_DIR */ ?>resource/img/Hankook.jpg" alt></div>
                    <div class="cases__overlay"></div>
                    <div class="cases__content">
                        <div class="cases__title">Aminohome.by</div>
                        <div class="cases__label">Интернет магазин</div>
                        <div class="cases__text">Современная дизайн мебельного ритейлера – баланс красоты и комфорта.
                        </div>
                        <a class="cases__more mainLink" href="#">Подробнее</a>
                    </div>
                </div>
                <div class="cases__item">
                    <div class="cases__imageWrapper"><img class="cases__image"
                                                          src="<? /*= SITE_DIR */ ?>resource/img/Assuta.jpg" alt></div>
                    <div class="cases__overlay"></div>
                    <div class="cases__content">
                        <div class="cases__title">Aminohome.by</div>
                        <div class="cases__label">Интернет магазин</div>
                        <div class="cases__text">Современная дизайн мебельного ритейлера – баланс красоты и комфорта.
                        </div>
                        <a class="cases__more mainLink" href="#">Подробнее</a>
                    </div>
                </div>
                <div class="cases__item">
                    <div class="cases__imageWrapper"><img class="cases__image" src="<? /*= SITE_DIR */ ?>resource/img/D3.jpg"
                                                          alt></div>
                    <div class="cases__overlay"></div>
                    <div class="cases__content">
                        <div class="cases__title">Aminohome.by</div>
                        <div class="cases__label">Интернет магазин</div>
                        <div class="cases__text">Современная дизайн мебельного ритейлера – баланс красоты и комфорта.
                        </div>
                        <a class="cases__more mainLink" href="#">Подробнее</a>
                    </div>
                </div>
                <div class="cases__item">
                    <div class="cases__imageWrapper"><img class="cases__image"
                                                          src="<? /*= SITE_DIR */ ?>resource/img/Assuta.jpg" alt></div>
                    <div class="cases__overlay"></div>
                    <div class="cases__content">
                        <div class="cases__title">Aminohome.by</div>
                        <div class="cases__label">Интернет магазин</div>
                        <div class="cases__text">Современная дизайн мебельного ритейлера – баланс красоты и комфорта.
                        </div>
                        <a class="cases__more mainLink" href="#">Подробнее</a>
                    </div>
                </div>
                <div class="cases__item">
                    <div class="cases__imageWrapper"><img class="cases__image" src="<? /*= SITE_DIR */ ?>resource/img/D3.jpg"
                                                          alt></div>
                    <div class="cases__overlay"></div>
                    <div class="cases__content">
                        <div class="cases__title">Aminohome.by</div>
                        <div class="cases__label">Интернет магазин</div>
                        <div class="cases__text">Современная дизайн мебельного ритейлера – баланс красоты и комфорта.
                        </div>
                        <a class="cases__more mainLink" href="#">Подробнее</a>
                    </div>
                </div>
            </div>-->
        </div>
        <div class="asideRight">
        </div>
    </div>
    <div class="tech tripleContainer">
        <div class="asideLeft"></div>
        <div class="tech__container tripleContainer__center">
            <div class="tech__header">
                <div class="tech__mainTitle pageTitle">
                    <div class="pageTitle__number">07</div>
                    <h2 class="pageTitle__text">Технологии</h2>
                </div>
            </div>
            <ul class="tech__list">
                <li class="tech__item">
                    <div class="tech__label">РАЗРАБОТКА СЕРВЕРНЫХ СИСТЕМ</div>
                    <div class="tech__text">PHP Laravel 1С-Битрикс</div>
                </li>
                <li class="tech__item">
                    <div class="tech__label">МОБИЛЬНАЯ РАЗРАБОТКА</div>
                    <div class="tech__text">iOS Android Xamarin WebView Битрикс</div>
                </li>
                <li class="tech__item">
                    <div class="tech__label">РАЗРАБОТКА БАЗ ДАННЫХ</div>
                    <div class="tech__text">MySQL Memcached</div>
                </li>
                <li class="tech__item">
                    <div class="tech__label">РАЗРАБОТКА КЛИЕНТСКИХ СИСТЕМ</div>
                    <div class="tech__text">JavaScript JQuery Less БЭМ</div>
                </li>
                <li class="tech__item">
                    <div class="tech__label">УПРАВЛЕНИЕ ПРОЕКТАМИ</div>
                    <div class="tech__text">Waterfall Agile Scrum Kanban</div>
                </li>
                <li class="tech__item">
                    <div class="tech__label">ВЕБ-АНАЛИТИКА</div>
                    <div class="tech__text">Google Analytics Яндекс.Метрика</div>
                </li>
            </ul>
        </div>
        <div class="asideRight"></div>
    </div>
    <div class="mainForm tripleContainer">
        <div class="asideLeft">
            <!-- <ul class="asideMenu">
                    <li class="asideMenu__item"><a href="#">Behance</a></li>
                    <li class="asideMenu__item"><a href="#">Facebook</a></li>
                    <li class="asideMenu__item"><a href="#">Instagram</a></li>
                  </ul> -->
        </div>
        <?$APPLICATION->IncludeComponent("likeit:main.feedback", "template_main", Array(
            "USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
            "OK_TEXT" => "Спасибо, ваше обращение принято.",
            //"AJAX_MODE" => "Y",// Сообщение, выводимое пользователю после отправки
            "EMAIL_TO" => "ZAPAL666@mail.ru",	// E-mail, на который будет отправлено письмо
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

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>