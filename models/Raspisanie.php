<?php

namespace app\models;
use yii\db\ActiveRecord;

class Raspisanie extends ActiveRecord
{
    public static function tableName()
    {
        return 'raspisanie';
    }

    public function getOrderRace(){
        return $this->hasMany(Races::className(), ['id_race' => 'id_race']);
    }


    public function getRaces(){
        return $this->hasMany(Race::className(), ['id_race' => 'id_race']);
    }

}