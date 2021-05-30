<?php
namespace Page\Acceptance;

class LoginPage
{
    /**
     * Логин для авторизации с ошибкой
     */
    public const USERNAMEERROR='locked_out_user';
    /**
     * Пароль для авторизации
    */
    public const PASSWORD = 'secret_sauce';
    /**
     * Страница авторизации
     */
    public static $URL = '';
    /**
     * Селектор поле логин
    */
    public static $loginInput = '#user-name';
    /**
     * Селектор поле пароля
    */
    public static $passwordInput = '#password';
    /**
     * Селектор кнопки авторизации
     */
    public static $loginButton = '#login-button';
    /**
     * Ожидание окна ошибки авторизации
     */
    public static $errorWindow = '.error h3';
    /**
     * Закрытие ошбки авторизации
     */
    public static $closeWindowError = '.error-button';
    /**
     * Проверка на отсутствие ошибки
     */
    public static $errorСhecking = '.error h3';
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
    public function authFillField()
    {
        $this->acceptanceTester->fillField(LoginPage::$loginInput,LoginPage::USERNAMEERROR);
        $this->acceptanceTester->fillField(LoginPage::$passwordInput,LoginPage::PASSWORD);
        $this->acceptanceTester->click(LoginPage::$loginButton);
        return $this;
    }
    /**
     * Метод для закрытия ошибки
     */
    public function closeError()
    {
        $this->acceptanceTester->waitForElement(LoginPage::$errorWindow);
        $this->acceptanceTester->click(LoginPage::$closeWindowError);
    }
}
