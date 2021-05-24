<?php

class SecondCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // Тест на проверку поиска
    public function test(AcceptanceTester $I)
    {
        $searchTitleCss = '#search_query_top';
        $searchTitleXPath = '//*[@id="search_query_top"]';
        $fillFieldCss = '#search_query_top';
        $fillFieldXPath = '//*[@id="search_query_top"]';
        $clickButtonCss = '#searchbox > button';
        $clickButtonXPath  = '//*[@id="searchbox"]/button';
        $seeNumberOfElementsCss = '#center_column > ul >li '; //тут переделал по причини,  что не удалось реализовать по ul.product_list>li
        $seeNumberOfElementsXPath  = '//*[@id="center_column"]/ul/li';


    $I->amOnPage('');
    $I->seeElement('#search_query_top');
    $I->fillField('#search_query_top','Printed dress');
    $I->click('#searchbox > button');
    $I->seeNumberOfElements('ul.product_list>li','5');



    }
}
