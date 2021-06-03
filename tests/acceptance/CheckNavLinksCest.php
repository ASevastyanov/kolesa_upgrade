<?php
use Page\Acceptance\HabrPage;
use Codeception\Example;

/**
 * Класс для проверки навигационного меню Habr
 */
class CheckNavLinksCest
{
    /**
     * Тест для проверки работоспособности вкладок навигационного меню
     * @param Example $data
     * @dataProvider getDataForNavLinks
     */
    public function NavLinks(AcceptanceTester $I, Example $data)
    {
        $I->amOnPage(HabrPage::$URL);
        $I->waitForElement(HabrPage::$WaitNavLinks);
        $I->click($data['numberLink']);
        $I->seeInCurrentUrl($data['nameLink']);
        $I->seeElement($data['seeName']);
    }
    protected function getDataForNavLinks()
    {
        //$data = array_rand($data, 2);
        return[
            ['numberLink' => '.nav-links>li:nth-child(2)','nameLink' => 'develop', 'seeName' => 'div.page-header'],
            ['numberLink' => '.nav-links>li:nth-child(3)','nameLink' => 'admin', 'seeName' => 'div.page-header'],
            ['numberLink' => '.nav-links>li:nth-child(4)','nameLink' => 'design', 'seeName' => 'div.page-header'],
            ['numberLink' => '.nav-links>li:nth-child(5)','nameLink' => 'management', 'seeName' => 'div.page-header'],
            ['numberLink' => '.nav-links>li:nth-child(6)','nameLink' => 'marketing', 'seeName' => 'div.page-header'],
            ['numberLink' => '.nav-links>li:nth-child(7)','nameLink' => 'popsci', 'seeName' => 'div.page-header'],
        ];
    }

}