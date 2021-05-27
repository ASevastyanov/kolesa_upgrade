<?php

class ProductBlouseCest
{
    /*
    *Тест на проверку товара blouse (Была выполнена доработка по всем замечаниям)
    */
    public function testBlouse(AcceptanceTester $I)
    {
        $searchTitleCss = 'a[title="Blouse"]';
        $searchTitleXPath = '//a[@title="Blouse"]';
        $moveMouseCss = '#homefeatured img[title="Blouse"]';
        $moveMouseXPath  = '//*[@id="homefeatured"]//img[@title="Blouse"]';
        $clickButtonCss = '#homefeatured>li:nth-child(2) a.quick-view';
        $clickButtonXPath  = '//*[@id="homefeatured"]/li[2]//a[@class="quick-view"]';
        $switchToIframeCss = '.fancybox-inner';
        $switchToIframeXPath  = '//*[@class="fancybox-inner"]';
        $waitFortCss = '#product h1';
        $waitForTextXPath  = '//*[@id="product"]//h1';
         $I->amOnPage('');
         $I->waitForText ('Blouse', '5','#homefeatured');
         $I->moveMouseOver('#homefeatured img[title="Blouse"]');
         $I->click('#homefeatured>li:nth-child(2) a.quick-view');
         $I->switchToIframe('.fancybox-iframe');
         $I->waitForText('Blouse', '5','#product h1');
    }
}
