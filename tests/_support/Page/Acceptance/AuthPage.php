<?php
namespace Page\Acceptance;

class AuthPage
{
    /**
     * Страничка для авторизации
    */
    public static $URL = '?controller=authentication&back=my-account';
    /**
     * Ожидание загрузки странички
     */
    public static $waitLoadingAuth = '#login_form > h3';
    /**
     * Селектор поля "Логин"
     */
    public static $fillFieldEMail = '#email';
    /**
     * Логин
     */
    public static $enterLogin = 'sanyaseva@gmail.com';
    /**
     * Селектор поля "Логин"
     */
    public static $fillFieldEPassword = '#passwd';
    /**
     * Пароль
     */
    public static $enterPassword = 'xH6EWr2dqKN4j5.';
    /**
     * Селектор кнопки авторизации
     */
    public static $buttonAuth = '#SubmitLogin';
    /**
     * Ожидание успешной авторизации
     */
    public static $waitSuccessfulAuth = 'My account';
    /**
     * Возврат на главную страничку
     */
    public static $clickHomePage = '#header_logo  img';

    /**
     * Объект Testers
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Метод для авторизации
     */
    public function Authorization()
    {
        $this->acceptanceTester->fillField(AuthPage::$fillFieldEMail, AuthPage::$enterLogin);
        $this->acceptanceTester->fillField(AuthPage::$fillFieldEPassword,AuthPage::$enterPassword);
        $this->acceptanceTester->click(AuthPage::$buttonAuth);
        $this->acceptanceTester->waitForText(AuthPage::$waitSuccessfulAuth);
        return $this;
    }

}
