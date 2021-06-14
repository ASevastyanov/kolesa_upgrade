<?php
use Faker\Factory;
use Page\Acceptance\FormPage;
/**
 * Класс для тестирование формы личных данных и оплаты
 */
class FillFieldsCest
{
    /**
     * Тест на заполнение/проверку полей c фейкером
     * @throws Exception
     */
    public function CheckFillFields(FunctionalTester $I)
    {
        $faker = Factory::create('ru_RU');
        $faker->addProvider(new \Helper\CustomFakerProvider($faker));

        $name = $faker->firstName;
        $lastname = $faker->lastName;
        $email = $faker->email;
        $phone = $faker->phoneNumber;
        $address = $faker->address;
        $city = $faker->city;
        $state = $faker->region;
        $postcode = $faker->postcode;
        $card = $faker->getNumberCard;
        $cvvcode = $faker->getCvvCreditCode;

        $I->amOnPage('');
        $I->fillField(FormPage::$firstNameField, $name);
        $I->fillField(FormPage::$lastNameField, $lastname);
        $I->fillField(FormPage::$eMailField, $email);
        $I->fillField(FormPage::$phoneNumberField, $phone);
        $I->fillField(FormPage::$addressField, $address);
        $I->fillField(FormPage::$cityField, $city);
        $I->fillField(FormPage::$stateField, $state);
        $I->fillField(FormPage::$postalField, $postcode);
        $I->click(FormPage::$clickProduct1Field);
        $I->click(FormPage::$clickActivePaymentCardField);
        $I->fillField(FormPage::$firstNameCardField, $name);
        $I->fillField(FormPage::$lastNameCardField, $lastname);
        $I->fillField(FormPage::$numberCardField, $card);
        $I->fillField(FormPage::$cvvCodeCardField,$cvvcode);
        $I->click(FormPage::$clickMonthCardField);
        $I->click(FormPage::$clickSpecMonthCardField);
        $I->click(FormPage::$clickYearCardField);
        $I->click(FormPage::$clickSpecYearCardField);
        $I->fillField(FormPage::$billingAddressField, $address);
        $I->fillField(FormPage::$billingtCityField, $city);
        $I->fillField(FormPage::$billingStateField, $state);
        $I->fillField(FormPage::$billingPostalField, $postcode);
        $I->click(FormPage::$clickBillingCountryField);
        $I->click(FormPage::$clickBillingNameCountryField);
        $I->wait(10);
        $I->click(FormPage::$buttunRegisterField);
        $I->waitForText('Good job');
    }
}