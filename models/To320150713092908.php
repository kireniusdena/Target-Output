<?php

namespace kemdikbud\to\models;

use Yii;

/**
 * This is the model class for table "to_2_2015_07_13_11_06_05".
 *
 */
class To320150713092908 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'to_3_2015_07_13_09_29_08';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no'], 'integer'],
            [['nama', 'alamat'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return ["no"=>"no","nama"=>"nama","alamat"=>"alamat"];
    }
}
            