<?php

namespace app\models;

use yii\db\ActiveRecord;

class Race extends ActiveRecord
{
    public static function tableName()
    {
        return 'race';
    }
}