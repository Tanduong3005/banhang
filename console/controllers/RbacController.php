<?php
namespace yii\console\controllers;
use \yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        $createPost = $auth->createPermission('create-post');
        $createPost->description = 'Tao san pham moi';
        $auth->add($createPost);


    }

}