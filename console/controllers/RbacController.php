<?php
namespace console\controllers;
use \yii\console\Controller;
use Yii;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

/*        $createPost = $auth->createPermission('create-post');
        $createPost->description = 'Tao san pham moi';
        $auth->add($createPost);

        $indexPost = $auth->createPermission('index-post');
        $indexPost->description = 'xem danh sach san pham';
        $auth->add($idexPost);

        $updatePost = $auth->createPermission('update-post');
        $updatePost->description = 'chinh sua thong tin san pham';
        $auth->add($updatePost);

        $viewPost = $auth->createPermission('view-post');
        $viewPost->description = 'Xem thong tin chi tiet san pham';
        $auth->add($viewPost);

        $deletePost = $auth->createPermission('delete-post');
        $deletePost->description = 'Xoa thong tin san pham';
        $auth->add($deletePost);*/



        $createPost = $auth->createPermission('create-post');

        $indexPost = $auth->createPermission('index-post');

        $updatePost = $auth->createPermission('update-post');

        $viewPost = $auth->createPermission('view-post');

        $deletePost = $auth->createPermission('delete-post');

        $postManager = $auth->createRole('manager-post');
        //        $auth->add($postManager);

        $auth->addChild($postManager,$indexPost);
        $auth->addChild($postManager,$updatePost);
        $auth->addChild($postManager,$viewPost);
        $auth->addChild($postManager,$deletePost);
    }

}