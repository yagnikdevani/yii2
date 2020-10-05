<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Posts extends Model
{
    
    public function rules()
    {
        return [
            [['title', 'data'], 'required'],
            [['data'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    public function behaviors()
    {
        return array(
            'timestamp' => array(
                'class' => 'yii\behaviors\AutoTimestamp'
            )
        );
    }
}