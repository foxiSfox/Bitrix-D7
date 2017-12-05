<?php
use Bitrix\Main\UserTable;
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

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
