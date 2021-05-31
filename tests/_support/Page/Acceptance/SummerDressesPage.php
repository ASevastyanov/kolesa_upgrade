<?php
namespace Page\Acceptance;

class SummerDressesPage
{
    /*
     * Страница с летними платьями
     */
    public static $URL = '?id_category=11&controller=category';
    /*
     * Страница с летними платьями
     */
    public static $ProductSorting = '#grid.selected';
    /*
     * Проверка сортировки в табличном виде
     */
    public static $CheckSortingGrid = 'ul.product_list.row.grid';
    /*
     * Кнопка переключение на строчную сортировку
     */
    public static $ClickСhangeSorting = '#list';
    /*
     * Проверка сортировки в строчном виде
     */
    public static $CheckSortingList = 'ul.product_list.row.list';
}
