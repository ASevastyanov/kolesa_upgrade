<?php

class SecondCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // Тест на проверку поиска
    public function test(AcceptanceTester $I)
    {
    $I->amOnPage('');
    $I->seeElement('#search_query_top');
    $I->fillField('#search_query_top','Printed dress');
    $I->click('#searchbox > button');
    $I->seeNumberOfElements('ul.product_list>li','5');



    }
}
