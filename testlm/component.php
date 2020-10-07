<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (CModule::IncludeModule('iblock')){

    if(isset($arParams["IBLOCK_ID"])) {

        $arSelect = Array("ID", "IBLOCK_ID", "NAME");
        $arFilter = Array("IBLOCK_ID" => IntVal($arParams["IBLOCK_ID"]), "ACTIVE" => "Y");
        $res = CIBlockElement::GetList(Array(), $arFilter, false, array("nPageSize" => 20), $arSelect);
        $res->NavStart(0);
        $i = 0;
        while ($ob = $res->Fetch()) {
            $arResult['cities'][$i]['ID'] = $ob['ID'];
            $arResult['cities'][$i]['NAME'] = $ob['NAME'];
            $i++;
        }

        $arResult['NAV'] = $res->GetPageNavStringEx($navComponentObject, "Элементы:", "bootstrap_v4");

        if ($this->StartResultCache(false, 'cities'.$arResult['cities'].$arResult['NAV'], false)) {
            $this->IncludeComponentTemplate();
        }

    }
}
?>