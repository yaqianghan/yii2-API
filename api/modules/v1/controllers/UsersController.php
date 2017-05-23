<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use yii\filters\auth\QueryParamAuth;
use common\models\User;
use api\models\LoginForm;
use yii\web\IdentityInterface;


class UsersController extends ActiveController
{
    public $modelClass = 'api\models\User';
    public $username = 1;
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'authenticator' => [
                'class' => QueryParamAuth::className(),
                'tokenParam' => 'token',
                'optional' => [
//                    'ceshi',
//                    'login',
                ],
            ]
        ]);
    }

    /**
     * 添加测试用户
     */
//    public function actionCeshi ()
//    {
////        $user = new User();
////        $user->generateAuthKey();
////        $user->setPassword('123456');
////        $user->username = '111121211';
////        $user->email = '111@11121111.com';
////        $user->save(false);
//
//        return \Yii::$app->request->cookies;
//    }


    public function actionLogin()
    {
        $model = new LoginForm();
        $model->setAttributes(\Yii::$app->request->get());
        if ($user = $model->login()) {
            if ($user instanceof IdentityInterface) {
                return $user->api_token;
            } else {
                return $user->errors;
            }
        } else {
            return $model->errors;
        }
    }



    public function actionCeshi($token)
    {
        $user = User::findIdentityByAccessToken($token);
        return [
            'id' => $user->id,
            'username' => $user->username,
            'email' => $user->email,
        ];
    }

}
