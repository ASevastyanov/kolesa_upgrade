<?php
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
        $I->amOnPage('');
        $I->fillField('#user-name','locked_out_user');
        $I->fillField('#password','secret_sauce');
        $I->click('#login-button');
        $I->waitForElement('.error h3');
        $I->click('.error-button');
        $I->waitForElementNotVisible('.error h3');
    }
}