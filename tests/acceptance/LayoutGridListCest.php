<?php
use Page\Acceptance\HomePage;
use \Page\Acceptance\SummerDressesPage;
/*
* Класс для проверки сортеровка страничка сетка/список
*/
class LayoutGridListCest
{
    /*
    *Тест для переключения вида сортировки
    */
    public function toggleSorting(AcceptanceTester $I)
    {
        $I->amOnPage(HomePage::$URL);
        $I->moveMouseOver(HomePage::$MoveMouseDresses);
        $I->click(HomePage::$ClickSummerDresses);
        $I->seeElement(SummerDressesPage::$ProductSorting);
        $I->waitForElement(SummerDressesPage::$CheckSortingGrid);
        $I->click(SummerDressesPage::$ClickСhangeSorting);
        $I->waitForElement(SummerDressesPage::$CheckSortingList);
    }
}