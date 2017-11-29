<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

Class Component extends CBitrixComponent{
    public function onPrepareComponentParams($arParams){
        $result = parent::onPrepareComponentParams($arParams);
        return $result;
    }

    public function executeComponent(){
        if($this->startResultCache(false))
        {
            $this->arResult = $this->getResult();
            $this->includeComponentTemplate();
        }
    }

    private function getResult(){
        $result = array();
        return $result;
    }
}
