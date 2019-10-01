<?php

namespace app\models;

use yii\db\ActiveRecord;

class Races extends ActiveRecord
{
    public static function tableName()
    {
        return 'races';
    }



}