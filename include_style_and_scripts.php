<?php
use Bitrix\Main\Page\Asset; 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/script.js"); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/style.css"); 
Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700,700italic&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>"); 