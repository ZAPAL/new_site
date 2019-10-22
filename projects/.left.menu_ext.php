<?
// пример файла .left.menu_ext.php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections", 
	"", 
	array(
		"ID" => $_REQUEST["ELEMENT_ID"],
		"IBLOCK_TYPE" => "test",
		"IBLOCK_ID" => "3",
		"DEPTH_LEVEL" => "1",
		"SECTION_URL" => "#SITE_DIR#projects/#SECTION_CODE_PATH#/",
		"CACHE_TIME" => "3600",
		"IS_SEF" => "N",
		"CACHE_TYPE" => "A"
	),
	false
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>
