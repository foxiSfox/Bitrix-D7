<?php
use Bitrix\Main\UserTable;
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$arFilter = array(
    "ID" => 2175
);
$res = UserTable::getList(array(
    "select" => array(
        "ID",
        "NAME"
    ),
    "filter" => array(
        "ID" => 1
    )
));

if($u = $res->fetch()){
    //data user
}
