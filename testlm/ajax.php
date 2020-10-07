<?
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

Bitrix\Main\Loader::includeModule('iblock');
Bitrix\Main\Loader::includeModule('main');

 if (isset($_POST['id']))
    {
        CIBlockElement::Delete($_POST['id']);
    }