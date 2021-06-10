<?php
namespace Page\Functional;

class APIuserPage
{
    /**
     * Метод переменной URL для POST запроса
     */
    public static $urlPost = 'human';
    /**
     * Метод переменной URL для GET запроса
     */
    public static $urlGet = 'people';
    /**
     * Метод переменной URL для DELETE запроса
     */
    public static $urlPutDel = '/human?_id=';

    /**
     * Метод ответа от сервера при успешном создании пользователя
     */
    public static $successPost = ['status' => 'ok'];
    /**
     * Метод ответа от сервера при успешном изменении данных
     */
    public static $successUpdate = ['nModified' => '1'];
    /**
     * Метод ответа от сервера при успешном удалении данных
     */
    public static $successDelete = ['deletedCount' => '1'];
}
