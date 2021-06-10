<?php
namespace Helper;

use Faker\Factory;

/**
 * Класс Faker
*/
class BaseHelper extends \Codeception\Module
{
    /**
     * Метод получение Faker
    */
    public function getFaker($locale = 'ru_RU')
    {
        $faker = Factory::create($locale);

        return $faker;
    }

}