<?php

namespace app\controllers;

use yii\web\Controller;

class LookController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public  function actionAdmin()
    {
        return $this->render('admin');
    }

}