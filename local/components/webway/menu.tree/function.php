<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

function get_tree_recursive(&$arResult, $arSectionID, $arElementsID, $show_empty_section, $level=0, $depth_level=1){

	if(isset($arResult["FULLTREE"][$level]) && is_array($arResult["FULLTREE"][$level])){
		
		foreach($arResult["FULLTREE"][$level] as $key => $arTreeEl)
		{
			if($arTreeEl["IS_ELEMENT"] == 1)
			{
				if(is_array($arElementsID[$arTreeEl["ID"]]))
				{
					$arSection = $arElementsID[$arTreeEl["ID"]];
					$arResult["TREE"][] = array(
						"ID" => $arSection["ID"],
						"DEPTH_LEVEL" => $depth_level,
						"~NAME" => $arSection["~NAME"],
						"~SECTION_PAGE_URL" => $arSection["~DETAIL_PAGE_URL"],
						"IS_ELEMENT" => true,
					);
				}
				unset($arResult["RESTTREE"][$level][$key]);
				if(count($arResult["RESTTREE"][$level]) == 0)
				{
					unset($arResult["RESTTREE"][$level]);
				}
			}
			else
			{
				if(is_array($arSectionID[$arTreeEl["ID"]]))
				{
					$arSection = $arSectionID[$arTreeEl["ID"]];
					$arResult["TREE"][] = array(
						"ID" => $arSection["ID"],
						"DEPTH_LEVEL" => $depth_level,
						"~NAME" => $arSection["~NAME"],
						"~SECTION_PAGE_URL" => $arSection["~SECTION_PAGE_URL"],
						"IS_ELEMENT" => false,
					);
					if($show_empty_section == "N" &&  count($arResult["FULLTREE"][intval($arTreeEl["ID"])]) == 0)
					{
						unset($arResult["FULLTREE"][$level][$key]);
						unset($arResult["TREE"][count($arResult["TREE"])-1]);
						$arResult["TREE"] = array_values($arResult["TREE"]);
					}
					else
					{
						get_tree_recursive($arResult, $arSectionID, $arElementsID, $show_empty_section, intval($arTreeEl["ID"]), $depth_level+1);
						if($show_empty_section == "N" &&  count($arResult["FULLTREE"][intval($arTreeEl["ID"])]) == 0)
						{
							unset($arResult["TREE"][count($arResult["TREE"])-1]);
							$arResult["TREE"] = array_values($arResult["TREE"]);
						}
					}
					if(count($arResult["RESTTREE"][intval($arTreeEl["ID"])]) == 0)
					{
						unset($arResult["RESTTREE"][$level][$key]);
						if(count($arResult["RESTTREE"][$level]) == 0)
						{
							unset($arResult["RESTTREE"][$level]);
						}
					}
				}
			}
			$arResult["ELEMENT_LINKS"][$arSection["ID"]] = array();
		}
	}
	return true;
}
?>