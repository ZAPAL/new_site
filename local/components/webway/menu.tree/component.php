<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */


if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams["ID"] = intval($arParams["ID"]);
$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]);

$arParams["DEPTH_LEVEL"] = intval($arParams["DEPTH_LEVEL"]);
if($arParams["DEPTH_LEVEL"]<=0)
	$arParams["DEPTH_LEVEL"]=1;
	
if(empty($arParams["ELEMENT_SORT_FIELD"]))
	$arParams["ELEMENT_SORT_FIELD"]= "SORT";
else
	$arParams["ELEMENT_SORT_FIELD"] = strtoupper($arParams["ELEMENT_SORT_FIELD"]);

if(empty($arParams["ELEMENT_SORT_ORDER"]))
	$arParams["ELEMENT_SORT_ORDER"]= "ASC";
else
	$arParams["ELEMENT_SORT_ORDER"] = strtoupper($arParams["ELEMENT_SORT_ORDER"]);
	
if($arParams["ELEMENT_SORT_ORDER"] == "ASC")
	$sort_order = SORT_ASC;
else
	$sort_order = SORT_DESC;

$arResult["TREE"] = array();
$arResult["ELEMENT_LINKS"] = array();

if($this->StartResultCache())
{
	if(!CModule::IncludeModule("iblock"))
	{
		$this->AbortResultCache();
	}
	else
	{
		require_once($_SERVER["DOCUMENT_ROOT"].$componentPath.'/function.php');
		
		$arResult["FULLTREE"] = array();
		$arSecTree = array();
		$arFilterElSection = array();
		
		if($arParams["IS_SELECT_SECTION"] == "Y")
		{
			$arFilter = Array(
				"IBLOCK_ID"=>$arParams["IBLOCK_ID"],
				"ACTIVE"=>"Y",
				"=SECTION_ID" => $arParams["SELECT_SECTION"],
				);
		}
		else
		{
			$arFilter = Array(
				"IBLOCK_ID"=>$arParams["IBLOCK_ID"],
				"ACTIVE"=>"Y",
					array(
							"LOGIC" => "OR",
							array("SECTION_GLOBAL_ACTIVE" => "Y"),
							array("=SECTION_ID" => 0),
						),
				);
		}

		$rsElements = CIBlockElement::GetList(array($arParams["ELEMENT_SORT_FIELD"]=>$arParams["ELEMENT_SORT_ORDER"]), $arFilter, false, false, array(
			"ID",
			"IBLOCK_SECTION_ID",
			"NAME",
			"DETAIL_PAGE_URL",
			$arParams["ELEMENT_SORT_FIELD"],
		));
		
		if($arParams["IS_SEF"] !== "Y")
			$rsElements->SetUrlTemplates($arParams["DETAIL_URL"]);
		else
			$rsElements->SetUrlTemplates($arParams["SEF_BASE_URL"].$arParams["DETAIL_PAGE_URL"]);
			
		while($arElements = $rsElements->GetNextElement())
		{
			$arFields = $arElements->GetFields();
			$arElementsID[$arFields["ID"]] = $arFields;
			if(empty($arFields["IBLOCK_SECTION_ID"]))
			{
				$arResult["FULLTREE"][intval($arFields["IBLOCK_SECTION_ID"])][] = array("ID" => $arFields["ID"],
												"DEPTH_LEVEL" => 1,
												"IS_ELEMENT" => 1,
												"SORT" => $arFields[$arParams["ELEMENT_SORT_FIELD"]],);
			}
			else
			{
				$arFilterElSection[] = $arFields["ID"];
			}
		}		
		
		$arFilter = array(
			"IBLOCK_ID"=>$arParams["IBLOCK_ID"],
			"GLOBAL_ACTIVE"=>"Y",
			"IBLOCK_ACTIVE"=>"Y",
			"<="."DEPTH_LEVEL" => $arParams["DEPTH_LEVEL"],
		);
		if($arParams["IS_SELECT_SECTION"] == "Y")
		{
			$arFilter = array_merge($arFilter, array("ID" => $arParams["SELECT_SECTION"]));
		}
		
		$arOrder = array(
			$arParams["ELEMENT_SORT_FIELD"]=>$arParams["ELEMENT_SORT_ORDER"],
		);

		$rsSections = CIBlockSection::GetList($arOrder, $arFilter, false, array(
			"ID",
			"IBLOCK_SECTION_ID",
			"DEPTH_LEVEL",
			"NAME",
			"SECTION_PAGE_URL",
			$arParams["ELEMENT_SORT_FIELD"],
		));
		if($arParams["IS_SEF"] !== "Y")
			$rsSections->SetUrlTemplates("", $arParams["SECTION_URL"]);
		else
			$rsSections->SetUrlTemplates("", $arParams["SEF_BASE_URL"].$arParams["SECTION_PAGE_URL"]);

		while($arSection = $rsSections->GetNext())
		{
			$arSectionID[$arSection["ID"]] = $arSection;
			$arResult["FULLTREE"][intval($arSection["IBLOCK_SECTION_ID"])][] = array("ID" => $arSection["ID"],
												"DEPTH_LEVEL" => $arSection["DEPTH_LEVEL"],
												"IS_ELEMENT" => 0,
												"SORT" => $arSection[$arParams["ELEMENT_SORT_FIELD"]],);
		}		
 
		$rsElementGroups = CIBlockElement::GetElementGroups($arFilterElSection, true, array(
			"ID",
			"IBLOCK_ELEMENT_ID",
			"DEPTH_LEVEL",
			$arParams["ELEMENT_SORT_FIELD"],
		));
		while($arElementGroups = $rsElementGroups->Fetch())
		{
			if($arElementGroups["DEPTH_LEVEL"]+1 <= $arParams["DEPTH_LEVEL"])
			{
				$arResult["FULLTREE"][intval($arElementGroups["ID"])][] = array("ID" => $arElementGroups["IBLOCK_ELEMENT_ID"],
												"DEPTH_LEVEL" => $arElementGroups["DEPTH_LEVEL"]+1,
												"IS_ELEMENT" => 1,
												"SORT" => $arElementsID[$arElementGroups["IBLOCK_ELEMENT_ID"]][$arParams["ELEMENT_SORT_FIELD"]],);
			}
		}
		
		if($arParams["IS_SELECT_SECTION"] == "Y")
		{
			foreach($arResult["FULLTREE"][0] as $value)
			{
				$arSecTree[] = $value["ID"];
			}
			$arRestTree = array_diff($arParams["SELECT_SECTION"], $arSecTree);
			foreach($arRestTree as $value)
			{
				if(isset($arSectionID[$value]))
				{
					$arResult["FULLTREE"][0][] = array("ID" => $arSectionID[$value]["ID"],
														"DEPTH_LEVEL" => 1,
														"IS_ELEMENT" => 0,
														"SORT" => $arSectionID[$value][$arParams["ELEMENT_SORT_FIELD"]],);
				}
			}
			unset($arSecTree);
			unset($arRestTree);
		}

		foreach($arResult["FULLTREE"] as &$arLevel)
		{
			$sort = array();
			$depth_level = array();

			foreach ($arLevel as $key => $row) {
				$sort[$key] = $row['SORT'];
				$depth_level[$key] = $row['DEPTH_LEVEL'];
			}
			array_multisort($depth_level, SORT_ASC, $sort, $sort_order, $arLevel);

			unset($sort); unset($depth_level);
		}

		get_tree_recursive($arResult, $arSectionID, $arElementsID, $arParams["IS_SHOW_EMPTY_SECTION"]);
		
		unset($arResult["FULLTREE"]);
		
		$this->EndResultCache();
	}
}

//In "SEF" mode we'll try to parse URL and get ELEMENT_ID from it
if($arParams["IS_SEF"] === "Y")
{
	$engine = new CComponentEngine($this);
	if (CModule::IncludeModule('iblock'))
	{
		$engine->addGreedyPart("#SECTION_CODE_PATH#");
		$engine->setResolveCallback(array("CIBlockFindTools", "resolveComponentEngine"));
	}
	$componentPage = $engine->guessComponentPath(
		$arParams["SEF_BASE_URL"],
		array(
			"section" => $arParams["SECTION_PAGE_URL"],
			"detail" => $arParams["DETAIL_PAGE_URL"],
		),
		$arVariables
	);
	if($componentPage === "detail")
	{
		CComponentEngine::InitComponentVariables(
			$componentPage,
			array("SECTION_ID", "ELEMENT_ID"),
			array(
				"section" => array("SECTION_ID" => "SECTION_ID"),
				"detail" => array("SECTION_ID" => "SECTION_ID", "ELEMENT_ID" => "ELEMENT_ID"),
			),
			$arVariables
		);
		$arParams["ID"] = intval($arVariables["ELEMENT_ID"]);
	}
}

if(($arParams["ID"] > 0) && (intval($arVariables["SECTION_ID"]) <= 0) && CModule::IncludeModule("iblock"))
{
	$arSelect = array("ID", "IBLOCK_ID", "DETAIL_PAGE_URL", "IBLOCK_SECTION_ID");
	$arFilter = array(
		"ID" => $arParams["ID"],
		"ACTIVE" => "Y",
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	);
	$rsElements = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
	if(($arParams["IS_SEF"] === "Y") && (strlen($arParams["DETAIL_PAGE_URL"]) > 0))
		$rsElements->SetUrlTemplates($arParams["SEF_BASE_URL"].$arParams["DETAIL_PAGE_URL"]);
	while($arElement = $rsElements->GetNext())
	{
		$arResult["ELEMENT_LINKS"][$arElement["IBLOCK_SECTION_ID"]][] = $arElement["~DETAIL_PAGE_URL"];
	}
}

$aMenuLinksNew = array();
$menuIndex = 0;
$previousDepthLevel = 1;
foreach($arResult["TREE"] as $arSection)
{
	if ($menuIndex > 0)
		$aMenuLinksNew[$menuIndex - 1][3]["IS_PARENT"] = $arSection["DEPTH_LEVEL"] > $previousDepthLevel;
	$previousDepthLevel = $arSection["DEPTH_LEVEL"];

	$arResult["ELEMENT_LINKS"][$arSection["ID"]][] = urldecode($arSection["~SECTION_PAGE_URL"]);
	$aMenuLinksNew[$menuIndex++] = array(
		htmlspecialcharsbx($arSection["~NAME"]),
		$arSection["~SECTION_PAGE_URL"],
		$arResult["ELEMENT_LINKS"][$arSection["ID"]],
		array(
			"FROM_IBLOCK" => true,
			"IS_PARENT" => false,
			"DEPTH_LEVEL" => $arSection["DEPTH_LEVEL"],
			"IS_ELEMENT" => $arSection["IS_ELEMENT"],
		),
	);
}
return $aMenuLinksNew;
?>
