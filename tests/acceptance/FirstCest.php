<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // Тест на проверку товара blouse
    public function tryToTest(AcceptanceTester $I)
    {
        

        $I->amOnPage('');
        $I->seeElement('a[title="Blouse"]');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->waitForElement('.fancybox-inner');
        $I->switchToIframe('.fancybox-iframe');
        $I->see('Blouse','.pb-center-column > h1');




    }
}
