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
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "AREA_FILE_RECURSIVE" => "Y",
            "EDIT_TEMPLATE" => "",
            "COMPONENT_TEMPLATE" => ".default",
            "PATH" => SITE_DIR."resource/include/footer_info.php"
        ),
        false
    );?>
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
