<?php
use Helper\BaseHelper;
use Page\Functional\APIuserPage;

/**
 * Класс для тестирования API для пользователей
*/
class APIUsersCest
{
    /**
     * Класс для проверки получения ответа от сервера
    */
    public static $defaultSchema = [
            "_id" => 'string',
            "email" => 'string',
            "superhero" => 'boolean',
            "name" => 'string',
            "owner" => 'string'
        ];

    /**
     * Метод для проверки создания пользователя, получение ответа, редактирования и удаление
     */
    protected function CheckUserCreate(FunctionalTester $I)
    {
        $userData = [
            'email' => $I->getFaker()->email,
            'owner' => 'AlexandrSeva_' . $I->getFaker()->name,
            'job' => $I->getFaker()->company,
            'name' => $I->getFaker()->name
        ];
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost(APIuserPage::$urlPost, $userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(APIuserPage::$successPost);
        $I->sendGet('people', $userData);
        $I->seeResponseMatchesJsonType(self::$defaultSchema);

        return $userData;
    }

        /**
         * Метод для проверки Изменения пользователя
         * @before CheckUserCreate
         * @after checkDelete
        */
     public function checkPut(FunctionalTester $I)
     {
         $userData = $this->CheckUserCreate($I);

         $idUser = $I->grabDataFromResponseByJsonPath('$.._id');
         $userId = $idUser[sizeof($idUser) - 1];
         $I->sendPut(APIuserPage::$urlPutDel . $userId, array('job' => 'KolesaUpgrade'));
         $I->seeResponseContainsJson(APIuserPage::$successUpdate);
         $I->sendGet(APIuserPage::$urlGet, $userData);
         $I->seeResponseContainsJson(['job' => 'KolesaUpgrade']);
     }

    /**
     * Метод для проверки удаления пользователя
     */
    protected function checkDelete(FunctionalTester $I)
    {
        $userData = $this->CheckUserCreate($I);
        $idUser = $I->grabDataFromResponseByJsonPath('$.._id');
        $userId = $idUser[sizeof($idUser) - 1];

        $I->sendDelete(APIuserPage::$urlPutDel . $userId);
        $I->seeResponseContainsJson(APIuserPage::$successDelete);
        $I->sendGet(APIuserPage::$urlGet, $userData);
        $I->dontSeeResponseContainsJson(['_id' => $userId]);
    }

}