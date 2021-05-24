<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // Тест на проверку товара blouse
    public function tryToTest(AcceptanceTester $I)
    {
        $searchTitleCss = 'a[title="Blouse"]';
        $searchTitleXPath = '//a[@title="Blouse"]';
        $moveMouseCss = '#homefeatured img[title="Blouse"]';
        $moveMouseXPath  = '//*[@id="homefeatured"]//img[@title="Blouse"]'; //двойные ковычки спользовал так как ругается PHPStorm
        $clickButtonCss = '#homefeatured>li:nth-child(2) a.quick-view';
        $clickButtonXPath  = '//*[@id="homefeatured"]/li[2]//a[@class="quick-view"]';
        $waitForElementCss = '.fancybox-inner';
        $waitForElementXPath  = '//*[@class="fancybox-inner"]';
        $switchToIframeCss = '.fancybox-inner';
        $switchToIframeXPath  = '//*[@class="fancybox-inner"]';
        $waitForInternetCss = '#product';
        $waitForInternetXPath  = '//*[@id="product"]';
        $seeTextCss = '#product h1';
        $seeTextXPath  = '//*[@id="product"]//h1';


        //Так же сразу переделал тест на правильный CSS
         $I->amOnPage('');
         $I->seeElement('#homefeatured a[title="Blouse"]');
         $I->moveMouseOver('#homefeatured img[title="Blouse"]');
         $I->click('#homefeatured>li:nth-child(2) a.quick-view');
         $I->waitForElement('.fancybox-inner');
         $I->switchToIframe('.fancybox-iframe');
         $I->waitForElement('#product'); //было добавлено время ожидания. Так как тест валился из за соеденения интернета
         $I->see('Blouse','#product h1');



    }
}
