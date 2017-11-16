<?php

namespace app\controllers;

use Yii;
use yii\rest\ActiveController;

class ApiBaseController extends ActiveController
{
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'data',
    ];
}
