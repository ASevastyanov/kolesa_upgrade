<?php
namespace Step\Acceptance;
use Page\Acceptance\HomeIFramePage;

/**
 * Класс по тестированию избранного товара
*/
class AddWishlist extends \AcceptanceTester
{
    /**
     * Тест для добовления товара в избранное
     */
    public function addItemsToWishlist(int $setItems)
    {

        $I = $this;
        for ($n = 1; $n <= $setItems; $n++) {
            $I->amOnPage('');
            $I->moveMouseOver(sprintf(HomeIFramePage::$moveMouseIFrameItem, $n));
            $I->click(sprintf(HomeIFramePage::$clickQuickView,$n));
            $I->waitForElementVisible(HomeIFramePage::$iFrameWindow);
            $I->switchToIframe(HomeIFramePage::$iFrameWindow);
            $I->click(HomeIFramePage::$clickWishlist);
            $I->waitForElement(HomeIFramePage::$waitWindowWishlist);
            $I->waitForElement(HomeIFramePage::$clickCloseWishlist);
            $I->click(HomeIFramePage::$clickCloseWishlist);
            $I->switchToIFrame();
            $I->click(HomeIFramePage::$clickCloseIFrameItem);
        }
    }

    public function assertEquals(int $NUMBER_ITEM, $quantityComparison, string $string)
    {
    }
}
