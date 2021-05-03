<?php


namespace frontend\controllers;


use common\models\LoginForm;
use frontend\models\ProductModel;
use frontend\models\SignupForm;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use Yii;

class SiteController extends Controller
{

    public function actionIndex()
    {
        $session = Yii::$app->session;
        $inforCart = $session['cart'];
        $modelProduct = new ProductModel();
        $data = $modelProduct->getAllProductRecord();
        $sort = $modelProduct->sortProductByCreatedAt();
        return $this->render('index', [
            'data' => $data,
            'sort' => $sort,
            'inforCart'=>$inforCart

        ]);
    }

    /**
     * Array $arr = [1,2,3,4] => ["nhan"=>1,1=>2,2=>3,3=>4] -> $arr["nhan"]
     * Object $obj = { test: ten, test1: ten1}              -> $obj->test
     */

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

}