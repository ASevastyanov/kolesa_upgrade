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
     * @param Example $example
     * @dataProvider getDataFromRandomCategory
     * @throws Exception
     */
    public function NavLinks(AcceptanceTester $I, Example $example)
    {
        $I->amOnPage(HabrPage::$URL);
        $I->waitForElement(HabrPage::$WaitNavLinks);
        $I->click($example['numberLink']);
        $I->seeInCurrentUrl($example['nameLink']);
        $I->seeElement($example['seeName']);
    }

    protected array $navStep = [
        ['numberLink' => '.nav-links>li:nth-child(2)','nameLink' => 'develop', 'seeName' => 'div.page-header'],
        ['numberLink' => '.nav-links>li:nth-child(3)','nameLink' => 'admin', 'seeName' => 'div.page-header'],
        ['numberLink' => '.nav-links>li:nth-child(4)','nameLink' => 'design', 'seeName' => 'div.page-header'],
        ['numberLink' => '.nav-links>li:nth-child(5)','nameLink' => 'management', 'seeName' => 'div.page-header'],
        ['numberLink' => '.nav-links>li:nth-child(6)','nameLink' => 'marketing', 'seeName' => 'div.page-header'],
        ['numberLink' => '.nav-links>li:nth-child(7)','nameLink' => 'popsci', 'seeName' => 'div.page-header']
    ];

    /**
     * Возвращает рандомные шаги
     */
    public function getDataFromRandomCategory()
    {
        return $this->navStep[array_rand($this->navStep, $num = 2)];
    }

}