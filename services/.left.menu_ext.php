<?
// пример файла .left.menu_ext.php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"webway:menu.tree",
	"", 
	array(
		"ID" => $_REQUEST["ELEMENT_ID"],
		"IBLOCK_TYPE" => "test",
		"IBLOCK_ID" => "2",
		"DEPTH_LEVEL" => "2",
		"SECTION_URL" => "#SITE_DIR#services/cat/#SECTION_CODE_PATH#/",
		"CACHE_TIME" => "3600",
		"IS_SEF" => "N",
		"CACHE_TYPE" => "A"
	),
	false
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>
