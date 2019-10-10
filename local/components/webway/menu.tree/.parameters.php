<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arTypesEx = CIBlockParameters::GetIBlockTypes(Array("all"=>" "));

$arIBlocks=Array();
$db_iblock = CIBlock::GetList(Array("SORT"=>"ASC"), Array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="all"?$arCurrentValues["IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
	$arIBlocks[$arRes["ID"]] = $arRes["NAME"];

$arIBSection=Array();
$db_iblock = CIBlockSection::GetList(array("left_margin"=>"asc"), array("IBLOCK_ID"=>$arCurrentValues["IBLOCK_ID"], "GLOBAL_ACTIVE"=>"Y", "IBLOCK_ACTIVE"=>"Y",	"<=DEPTH_LEVEL" => $arCurrentValues["DEPTH_LEVEL"]), false, array("ID",	"NAME", "DEPTH_LEVEL"));
$arIBSection["0"] = GetMessage("IBLOCK_UPPER_LEVEL");
while($arRes = $db_iblock->Fetch())
	$arIBSection[$arRes["ID"]] = str_repeat(" . ", $arRes["DEPTH_LEVEL"]).$arRes["NAME"];
	
$arSort = CIBlockParameters::GetElementSortFields(
	array('SORT', 'TIMESTAMP_X', 'NAME', 'ID', 'ACTIVE_FROM', 'ACTIVE_TO'),
	array('KEY_LOWERCASE' => 'Y')
);
$arAscDesc = array(
	"asc" => GetMessage("IBLOCK_SORT_ASC"),
	"desc" => GetMessage("IBLOCK_SORT_DESC"),
);
	
$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"IS_SEF" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("CP_BMS_IS_SEF"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
			"REFRESH" => "Y",
		),
		"SEF_BASE_URL" => array(
			"PARENT" => "BASE",
			"NAME"=>GetMessage("CP_BMS_SEF_BASE_URL"),
			"TYPE"=>"STRING",
			"DEFAULT"=>'/catalog/',
		),
		"SECTION_PAGE_URL" => CIBlockParameters::GetPathTemplateParam(
			"SECTION",
			"SECTION_PAGE_URL",
			GetMessage("CP_BMS_SECTION_PAGE_URL"),
			"#SECTION_ID#/",
			"BASE"
		),
		"DETAIL_PAGE_URL" => CIBlockParameters::GetPathTemplateParam(
			"DETAIL",
			"DETAIL_PAGE_URL",
			GetMessage("CP_BMS_DETAIL_PAGE_URL"),
			"#SECTION_ID#/#ELEMENT_ID#/",
			"BASE"
		),
		"ID" => Array(
			"PARENT" => "BASE",
			"NAME"=>GetMessage("CP_BMS_ID"),
			"TYPE"=>"STRING",
			"DEFAULT"=>'={$_REQUEST["ID"]}',
		),
		"IBLOCK_TYPE" => Array(
			"PARENT" => "BASE",
			"NAME"=>GetMessage("CP_BMS_IBLOCK_TYPE"),
			"TYPE"=>"LIST",
			"VALUES"=>$arTypesEx,
			"DEFAULT"=>"catalog",
			"ADDITIONAL_VALUES"=>"N",
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => Array(
			"PARENT" => "BASE",
			"NAME"=>GetMessage("CP_BMS_IBLOCK_ID"),
			"TYPE"=>"LIST",
			"VALUES"=>$arIBlocks,
			"DEFAULT"=>'1',
			"MULTIPLE"=>"N",
			"ADDITIONAL_VALUES"=>"N",
			"REFRESH" => "Y",
		),
		"SECTION_URL" => CIBlockParameters::GetPathTemplateParam(
			"SECTION",
			"SECTION_URL",
			GetMessage("CP_BMS_SECTION_URL"),
			"",
			"BASE"
		),
		"DETAIL_URL" => CIBlockParameters::GetPathTemplateParam(
			"DETAIL",
			"DETAIL_URL",
			GetMessage("CP_BMS_DETAIL_URL"),
			"",
			"BASE"
		),
		"IS_SHOW_EMPTY_SECTION" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("CP_BMS_IS_SHOW_EMPTY_SECTION"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
		"DEPTH_LEVEL" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("CP_BMS_DEPTH_LEVEL"),
			"TYPE" => "STRING",
			"DEFAULT" => "1",
		),
		"ELEMENT_SORT_FIELD" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("CP_BMS_IBLOCK_ELEMENT_SORT_FIELD"),
			"TYPE" => "LIST",
			"VALUES" => $arSort,
			"ADDITIONAL_VALUES" => "Y",
			"DEFAULT" => "sort",
		),
		"ELEMENT_SORT_ORDER" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("CP_BMS_IBLOCK_ELEMENT_SORT_ORDER"),
			"TYPE" => "LIST",
			"VALUES" => $arAscDesc,
			"DEFAULT" => "asc",
		),
		"IS_SELECT_SECTION" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("CP_BMS_IS_SELECT_SECTION"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
			"REFRESH" => "Y",
		),
		"SELECT_SECTION" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME"=>GetMessage("CP_BMS_SELECT_SECTION"),
			"TYPE"=>"LIST",
			"MULTIPLE"=>"Y",
			"ADDITIONAL_VALUES"=>"N",
			"VALUES"=>$arIBSection,
		),
 		"CACHE_TIME"  =>  Array("DEFAULT"=>36000000),
	),
);
if($arCurrentValues["IS_SEF"] === "Y")
{
	unset($arComponentParameters["PARAMETERS"]["ID"]);
	unset($arComponentParameters["PARAMETERS"]["SECTION_URL"]);
	unset($arComponentParameters["PARAMETERS"]["DETAIL_URL"]);
}
else
{
	unset($arComponentParameters["PARAMETERS"]["SEF_BASE_URL"]);
	unset($arComponentParameters["PARAMETERS"]["DETAIL_PAGE_URL"]);
	unset($arComponentParameters["PARAMETERS"]["SECTION_PAGE_URL"]);
}

if($arCurrentValues["IS_SELECT_SECTION"] != "Y")
{
	unset($arComponentParameters["PARAMETERS"]["SELECT_SECTION"]);
}
?>
