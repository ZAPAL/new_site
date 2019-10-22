<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
</div>
</div>
<div class="asideRight">
</div>
</header>
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
