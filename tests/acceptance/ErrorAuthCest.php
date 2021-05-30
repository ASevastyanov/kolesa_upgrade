<?php
use Page\Acceptance\LoginPage;
/*
* Класс для проверки не успешной авторизации
*/
class ErrorAuthCest
{
    /*
    *Тест авторизации с заблокированным логином
    */
    public function lockedLogin(AcceptanceTester $I)
    {
        $loginPage = new loginPage($I);
        $I->amOnPage('');
        $loginPage->authFillField()->closeError();
        $I->waitForElementNotVisible(LoginPage::$errorСhecking);
    }
}