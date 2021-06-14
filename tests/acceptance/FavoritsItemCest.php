<?php

use Page\Acceptance\AuthPage;
use Step\Acceptance\AddWishlist;
use Page\Acceptance\LogoutPage;
use Page\Acceptance\HomePage;
use Page\Acceptance\MyAccountPage;
use Page\Acceptance\MyWishlistsPage;

/**
 * Класс для проверки товара в избранном
 */
class FavoritsItemCest
{

  /**
   * Кол-во товаров для проверки
  */
   public const NUMBER_ITEM = 2;

    /**
     * Тест для проверки успешной авторизации
     */
    public function _before(AcceptanceTester $I)
    {
        $loginPage = new AuthPage($I);

        $I->amOnPage(AuthPage::$URL);
        $I->waitForElement(AuthPage::$waitLoadingAuth);

        $loginPage->Authorization();
    }

    /**
     * Тест для проверки успешного выхода с аккаунта
     */
    public function _after(AcceptanceTester $I)
    {
        $I->click(MyWishlistsPage::$garbageRemov);
        $I->click(LogoutPage::$clickLogout);
    }

   /**
     * Тест для проверки добовление товара в избранное и на совпадение кол-во добавленного
     */
    public function addItemToWishList(AddWishlist $I)
    {
        $I->addItemsToWishlist(self::NUMBER_ITEM);

        $I->wait(5); //ожидание добавил потому что не может на кнопку нажать пока не прогрузится страничка
        $I->click(HomePage::$clickMyAccount);
        $I->click(MyAccountPage::$clickMyWishlists);

        $quantityComparison = $I->grabTextFrom(MyWishlistsPage::$quantityItem);
        $I->assertEquals(self::NUMBER_ITEM, $quantityComparison, "Checking the number of items in favorites");
    }
}