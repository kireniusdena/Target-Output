<?php

namespace kemdikbud\to\models;

use Yii;

/**
 * This is the model class for table "base_line_jenis".
 *
 * @property integer $id
 * @property double $kode_jenis
 * @property string $nama_jenis
 *
 * @property BaseLine[] $baseLines
 */
class Baselinejenis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'base_line_jenis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_jenis'], 'number'],
            [['nama_jenis'], 'required'],
            [['nama_jenis'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_jenis' => 'Kode Jenis',
            'nama_jenis' => 'Nama Jenis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaseLines()
    {
        return $this->hasMany(BaseLine::className(), ['jenis' => 'id']);
    }
}
