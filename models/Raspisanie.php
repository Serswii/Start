<?php

namespace app\models;
use yii\db\ActiveRecord;

class Raspisanie extends ActiveRecord
{
    public $id_raspisanie;
    public $id_race;

    public static function tableName()
    {
        return 'raspisanie';
    }

    public function rules()
    {
        return [
            [['id_race', 'id_raspisanie'], 'required'],
            [['id_race'], 'integer']
        ];
    }
    public function attributeLabels()
    {
        return [
            'id_raspisanie' => 'Id Raspisanie',
            'id_race' => 'Id Race',
        ];
    }


    public function getOrderRace(){
        return $this->hasMany(Races::className(), ['id_race' => 'id_race']);
    }


    public function getRaces(){
        return $this->hasMany(Race::className(), ['id_race' => 'id_race'])->via('Races');
    }

}