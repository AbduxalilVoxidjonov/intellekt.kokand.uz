<?php

namespace app\models;

use yii\base\Model;

class ContractForm extends Model
{
    public $client_name;
    public $passport_id;
    public $jshshr;
    public $phone;
    public $course;
    public $price;
    public $register_date;

    public function rules()
    {
        return [
            [['client_name', 'passport_id', 'jshshr', 'phone', 'course', 'price', 'register_date'], 'required'],
            [['client_name', 'passport_id', 'jshshr', 'phone', 'course'], 'string', 'max' => 255],
            [['price'], 'number'],
            [['register_date'], 'safe'],
        ];
    }
}
