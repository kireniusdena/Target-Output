<?php

namespace kemdikbud\to\models;

use Yii;

/**
 * This is the model class for table "to_2_2015_07_13_11_06_05".
 *
 */
class To120150715071012 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'to_1_2015_07_15_07_10_12';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomor'], 'integer'],
            [['judulnaskahkebijakan', 'draf', 'permen', 'filenaskah'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return ["nomor"=>"Nomor","judulnaskahkebijakan"=>"Judul Naskah Kebijakan","draf"=>"Draf","permen"=>"Permen","filenaskah"=>"File Naskah"];
    }
}
            