<?php
namespace Page\Acceptance;

class FormPage
{
    /**
     * Локатор поля имени
    */
    public static $firstNameField = '#firstName';
    /**
     * Локатор поля фамилии
     */
    public static $lastNameField = '#lastName';
    /**
     * Локатор поля EMail
     */
    public static $eMailField = '#input_38';
    /**
     * Локатор поля телефона
     */
    public static $phoneNumberField = '#phoneNumber';
    /**
     * Локатор поля адреса
     */
    public static $addressField = '#address';
    /**
     * Локатор поля города
     */
    public static $cityField = '#city';
    /**
     * Локатор поля региона
     */
    public static $stateField = '#state';
    /**
     * Локатор поля почтового индекса
     */
    public static $postalField = '#postal';
    /**
     * Локатор поля выбор первого продукта
     */
    public static $clickProduct1Field = '#input_32_1004';
    /**
     * Локатор поля выбор оплаты картой
     */
    public static $clickActivePaymentCardField = '#input_32_paymentType_credit';
    /**
     * Локатор поля выбор имя на карте
     */
    public static $firstNameCardField = '#input_32_cc_firstName';
    /**
     * Локатор поля выбор фамилии на карте
     */
    public static $lastNameCardField = '#input_32_cc_lastName';
    /**
     * Локатор поля выбор номера карты
     */
    public static $numberCardField = '#input_32_cc_number';
    /**
     * Локатор поля выбор CVV кода карты
     */
    public static $cvvCodeCardField = '#input_32_cc_ccv';
    /**
     * Локатор поля выбор поля окончания месяца карты
     */
    public static $clickMonthCardField = '#input_32_cc_exp_month';
    /**
     * Локатор поля выбор конкретного окончания месяца карты
     */
    public static $clickSpecMonthCardField = '#input_32_cc_exp_month > option:nth-child(2)';
    /**
     * Локатор поля выбор поля окончания года карты
     */
    public static $clickYearCardField = '#input_32_cc_exp_year';
    /**
     * Локатор поля выбор конкретного окончания года карты
     */
    public static $clickSpecYearCardField = '#input_32_cc_exp_year > option:nth-child(3)';
    /**
     * Локатор поля платежного адреса
     */
    public static $billingAddressField = '#input_32_addr_line1';
    /**
     * Локатор поля платежного города
     */
    public static $billingtCityField = '#input_32_city';
    /**
     * Локатор поля платежного региона
     */
    public static $billingStateField = '#input_32_state';
    /**
     * Локатор поля платежного почтового индекса
     */
    public static $billingPostalField = '#input_32_postal';
    /**
     * Локатор поля платежного страны
     */
    public static $clickBillingCountryField = '#input_32_country';
    /**
     * Локатор поля платежного названия страны
     */
    public static $clickBillingNameCountryField = '#input_32_country > option:nth-child(102)';
    /**
     * Локатор кнопки Регистрации
     */
    public static $buttunRegisterField = '#input_36';

}
