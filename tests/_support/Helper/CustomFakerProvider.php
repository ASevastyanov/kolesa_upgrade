<?php
namespace Helper;

use Faker\Provider\Base;
use phpDocumentor\Reflection\Types\This;

class CustomFakerProvider extends Base
{
    protected $cardMasterVisa = [
        '4', //Visa card
        '5', //Master card

    ];
    public function getNumberCard()
    {
        return sprintf(
            '%d%d %d %d %d',
            $this->cardMasterVisa[array_rand($this->cardMasterVisa)],
            random_int(100, 999),
            random_int(1000, 9999),
            random_int(1000, 9999),
            random_int(1000, 9999)
        );
   }
    /**
     * Возвращает cvv cod карты
     * @throws \Exception
     */
   public function getCvvCreditCode()
   {
        return random_int(100, 999);
   }
}
