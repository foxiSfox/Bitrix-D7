<?php
use Bitrix\Main\Loader;
use Bitrix\Iblock\Model\Section;
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(!Loader::includeModule("iblock"))
    return;

// class for section
$entity = Section::compileEntityByIblock(70);

// select sections
$section = $entity::getList(array(
    "select" => array(
        "NAME",
    ),
    "filter" => array(
        "ID" => "1",
    )
));

if($s = $section->Fetch()){
    // selected data
}
