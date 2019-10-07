<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
</div>
<div class="asideRight">

</div>
</header>
<div class="map tripleContainer">
        <div class="map__container tripleContainer">
          <div class="map__item">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac410c1267559e6d6fee7293c22d56e17265f77780f86c6ff1b066c7127836c23&amp;source=constructor" width="100%" height="415" frameborder="0"></iframe>
          </div>
        </div>
      </div>
<div class="footer tripleContainer">
    <div class="asideLeft"></div>
    <div class="footer__container tripleContainer__center">
        <ul class="footer__colList">
            <li class="footer__column">
                <div class="footer__title pageTitle pageTitle_little">
                    <div class="pageTitle__number">01</div>
                    <h2 class="pageTitle__text">Технологии</h2>
                </div>
                <ul class="footer__list">
                    <li class="footer__item"><a href="#">О компании</a></li>
                    <li class="footer__item"><a href="#">Партнеры</a></li>
                    <li class="footer__item"><a href="#">Отзывы</a></li>
                    <li class="footer__item"><a href="#">Реквизиты</a></li>
                    <li class="footer__item"><a href="#">Новости</a></li>
                </ul>
            </li>
            <li class="footer__column">
                <div class="footer__title pageTitle pageTitle_little">
                    <div class="pageTitle__number">02</div>
                    <h2 class="pageTitle__text">Продукция</h2>
                </div>
                <ul class="footer__list">
                    <li class="footer__item"><a href="#">1С-Битрикс: Управление сайтом</a></li>
                    <li class="footer__item"><a href="#">CRM системы</a></li>
                </ul>
            </li>
            <li class="footer__column">
                <div class="footer__title pageTitle pageTitle_little">
                    <div class="pageTitle__number">03</div>
                    <h2 class="pageTitle__text">Услуги</h2>
                </div>
                <ul class="footer__list">
                    <li class="footer__item"><a href="#">Разработка web&mobile</a></li>
                    <li class="footer__item"><a href="#">UX/UI дизайн</a></li>
                    <li class="footer__item"><a href="#">Digital-маркетинг</a></li>
                    <li class="footer__item"><a href="#">CRM автоматизация</a></li>
                </ul>
            </li>
            <li class="footer__column">
                <div class="footer__title pageTitle pageTitle_little">
                    <div class="pageTitle__number">04</div>
                    <h2 class="pageTitle__text">Наши контакты</h2>
                </div>
                <ul class="footer__list">
                    <li class="footer__item">+375 (29) 322-00-20</li>
                    <li class="footer__item">info@likeit.by</li>
                    <li class="footer__item">Минск, ул. Казинца 11А Барановичи,</li>
                    <li class="footer__item">ул. Куйбышева 111, офис 211</li>
                </ul>
            </li>
        </ul>
        <div class="footer__footer">
            <div class="footer__copy">© 2013-2019 LIKEIT / web-engineering co</div>
            <div class="footer__socList">
                <ul class="asideMenu asideMenu_common">
                    <li class="asideMenu__item"><a href="#">Behance</a></li>
                    <li class="asideMenu__item"><a href="#">Facebook</a></li>
                    <li class="asideMenu__item"><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="asideRight"></div>
</div>
<div class="redLine"></div>
</div>
<div class="asideLeft-g">
    <ul class="asideMenu">
        <li class="asideMenu__item"><a href="#">Behance</a></li>
        <li class="asideMenu__item"><a href="#">Facebook</a></li>
        <li class="asideMenu__item"><a href="#">Instagram</a></li>
    </ul>
</div>
<div class="asideRight-g">
    <div class="asideCopy">© 2013-2019 LIKEIT / web-engineering co</div>
</div>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    ".default",
    array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "AREA_FILE_RECURSIVE" => "Y",
        "EDIT_TEMPLATE" => "",
        "COMPONENT_TEMPLATE" => ".default",
        "PATH" => SITE_DIR."resource/include/footer.php"
    ),
    false
);?>
</body>

</html>
