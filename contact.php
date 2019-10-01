<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
    <div class="contacts">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item"><a href="#">Главная</a></li>
                <li class="breadcrumbs__item"><a href="#">Услуги</a></li>
                <li class="breadcrumbs__item">Интернет-агенство Лайкит</li>
            </ul>
        </div>
        <div class="contacts__title pageTitle pageTitle_noNumber">
            <h2 class="pageTitle__text">Контакты</h2>
        </div>
        <ul class="contacts__infoList">
            <li class="contacts__infoItem">
                <svg class="contacts__infoSvg">
                    <use href="#geolocal"></use>
                </svg>
                <div class="contacts__infoContent">
                    <div class="contacts__infoLabel">Центральный офис</div>
                    <div class="contacts__infoText">Минск, ул. Казинца 11а<br>Барановичи,ул. Куйбышево 111</div>
                </div>
            </li>
            <li class="contacts__infoItem">
                <svg class="contacts__infoSvg">
                    <use href="#geolocal"></use>
                </svg>
                <div class="contacts__infoContent">
                    <div class="contacts__infoLabel">Справочная служба</div>
                    <div class="contacts__infoText">+375 (29) 322-00-20</div>
                </div>
            </li>
            <li class="contacts__infoItem">
                <svg class="contacts__infoSvg">
                    <use href="#geolocal"></use>
                </svg>
                <div class="contacts__infoContent">
                    <div class="contacts__infoLabel">E-mail</div>
                    <div class="contacts__infoText">info@likeit.by</div>
                </div>
            </li>
        </ul>
        <div class="contacts__block">
            <div class="contacts__content">
                <div class="contacts__label">Региональные представительства</div>
                <div class="contacts__text">Наша компания имеет региональных представителей в Беларуси и Германии. Вы можете обратиться в ближайший к Вам офис для получения дополнительных консультаций.</div>
            </div>
            <div class="contacts__consult">
                <div class="contacts__consultText">Нужна консультация или готовы начать проект?</div><a class="contacts__consultButton" href="#">Получить консультацию</a>
            </div>
        </div>
        <ul class="contacts__adressList">
            <li class="contacts__adressItem">
                <div class="contacts__adressImage"><img src="<?=SITE_DIR?>resource/img/belarus.png" alt></div>
                <div class="contacts__adressContent">
                    <div class="contacts__adressLabel">Беларусь</div>
                    <div class="contacts__adressInfo">г. Барановичи, ул. Куйбышево 111<br>09.00 - 18.00</div>
                    <div class="contacts__adressPhone">+375 (29) 322-00-20</div>
                </div>
            </li>
            <li class="contacts__adressItem">
                <div class="contacts__adressImage"><img src="<?=SITE_DIR?>resource/img/belarus.png" alt></div>
                <div class="contacts__adressContent">
                    <div class="contacts__adressLabel">Беларусь</div>
                    <div class="contacts__adressInfo">г. Минск, ул. Казинца, 11а<br>09.00 - 18.00</div>
                    <div class="contacts__adressPhone">+375 (29) 322-00-20</div>
                </div>
            </li>
            <li class="contacts__adressItem">
                <div class="contacts__adressImage"><img src="<?=SITE_DIR?>resource/img/germany.png" alt></div>
                <div class="contacts__adressContent">
                    <div class="contacts__adressLabel">Германия</div>
                    <div class="contacts__adressInfo">Prien am Chiemsee, Hochgernstraße, 12a<br>Пн - Пт. 09.00 - 18.00</div>
                    <div class="contacts__adressPhone">+4 915 215 229 352</div>
                </div>
            </li>
        </ul>
    </div>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>