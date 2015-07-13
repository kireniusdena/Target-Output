<?php

namespace kemdikbud\to\models;

use Yii;

/**
 * This is the model class for table "base_line_wilayah".
 *
 * @property integer $id
 * @property integer $kode_wilayah
 * @property string $nama_wilayah
 *
 * @property BaseLine[] $baseLines
 */
class Baselinewilayah extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'base_line_wilayah';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_wilayah'], 'integer'],
            [['nama_wilayah'], 'required'],
            [['nama_wilayah'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_wilayah' => 'Kode Wilayah',
            'nama_wilayah' => 'Nama Wilayah',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaseLines()
    {
        return $this->hasMany(BaseLine::className(), ['wilayah' => 'id']);
    }
}
