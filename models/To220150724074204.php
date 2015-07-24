<?php

namespace kemdikbud\to\models;

use Yii;

/**
 * This is the model class for table "to_2_2015_07_13_11_06_05".
 *
 */
class To220150724074204 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'to_2_2015_07_24_07_42_04';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no'], 'integer'],
            [['uraian', 'keterangan'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return ["nomor"=>"Nomor","namadokumen"=>"Nama dokumen"];
    }
}
            