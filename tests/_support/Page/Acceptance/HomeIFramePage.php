<?php
namespace Page\Acceptance;

class HomeIFramePage
{
    /**
     * Селектор навода мышки на тоыар главной странички
     */
    public static $moveMouseIFrameItem = '#homefeatured>:nth-child(%s)';
    /**
     * Селектор нажатия на быстрый показ товара
     */
    public static $clickQuickView = '#homefeatured>li:nth-child(%s) a.quick-view';
    /**
     * Селектор iframe окна быстрого показа товара
     */
    public static $iFrameWindow = '.fancybox-inner';
    /**
     * Селектор iframe окна быстрого показа товара
     */
    public static $clickWishlist = '#wishlist_button';
    /**
     * Селектор окна подтверждения добовление товара в избраное
     */
    public static $waitWindowWishlist = '.fancybox-error';
    /**
     * Селектор кнопки закрытия окна подтверждения добовление товара в избраное
     */
    public static $clickCloseWishlist = '#product > div.fancybox-overlay.fancybox-overlay-fixed > div > div > a';
    /**
     * Селектор кнопки закрытия окна быстрого просмотра окна
     */
    public static $clickCloseIFrameItem = '.fancybox-close';
}