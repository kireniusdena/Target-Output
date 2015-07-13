<?php

namespace kemdikbud\to\models;

use Yii;

/**
 * This is the model class for table "to_2_2015_07_13_11_06_05".
 *
 * @property integer $id
 * @property integer $no
 * @property string $uraian
 * @property string $keterangan
 */
class To220150713110605 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'to_2_2015_07_13_11_06_05';
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
        return [
            'id' => 'ID',
            'no' => 'No',
            'uraian' => 'Uraian',
            'keterangan' => 'Keterangan',
        ];
    }
}
