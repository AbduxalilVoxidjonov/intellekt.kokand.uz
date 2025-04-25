<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ContractController extends Controller
{
    public function actionIndex()
    {
        $model = new \app\models\ContractForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Bu yerda PDF yoki DBga yozish bo‘lishi mumkin
            Yii::$app->session->setFlash('success', 'Shartnoma muvaffaqiyatli yaratildi!');
            return $this->refresh();
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }


}