<?php
namespace Page\Acceptance;

class HomePage
{
    /*
     * Главная страница авторизации
     */
    public static $URL = '';
    /*
     * Навести мышкой на категорию платья на главной
     */
    public static $MoveMouseDresses = '.sf-menu>li:nth-child(2)';
    /*
     * Кликнуть по категории "летние платья" в всплывающем окне "Платья"
     */
    public static $ClickSummerDresses = '.submenu-container>li>[title="Summer Dresses"]';
}
