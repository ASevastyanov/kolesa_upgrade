<?php
namespace Page\Acceptance;

class HabrPage
{
    /*
     * Урл стрнички
     */
    public static $URL = '';
    /*
     * Ожидание загрузки панели для навигации
     */
    public static $WaitNavLinks = '.nav-links';
    /*
     * Клик по ссылка на панели навигации
     */
    public static $ClickNavLinks = '.nav-links>li:nth-child(2)';
    /*
     * Проверка по урл странички по названию странички
     */
    public static $WaitUrlNaviLinks = '%s';
    /*
     * Проверка названия странички
     */
    public static $ISeeNavName = 'div.page-header';
}