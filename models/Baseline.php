<?php

namespace kemdikbud\to\models;

use Yii;

/**
 * This is the model class for table "base_line".
 *
 * @property integer $id
 * @property integer $jenis
 * @property integer $wilayah
 * @property integer $kode
 * @property string $uraian
 * @property integer $volume
 * @property string $satuan
 * @property double $harga_satuan
 * @property double $harga_total
 * @property integer $tahun
 *
 * @property BaseLineJenis $jenis0
 * @property BaseLineWilayah $wilayah0
 * @property RelasiBaseLineDenganOutput[] $relasiBaseLineDenganOutputs
 */
class Baseline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'base_line';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis', 'kode', 'uraian', 'volume', 'satuan', 'harga_total'], 'required'],
            [['jenis', 'wilayah', 'volume', 'tahun'], 'integer'],
            [['uraian', 'satuan'], 'string'],
            [['kode', 'harga_satuan', 'harga_total'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis' => 'Jenis',
            'wilayah' => 'Wilayah',
            'kode' => 'Kode',
            'uraian' => 'Uraian',
            'volume' => 'Volume',
            'satuan' => 'Satuan',
            'harga_satuan' => 'Harga Satuan',
            'harga_total' => 'Harga Total',
            'tahun' => 'Tahun',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenis0()
    {
        return $this->hasOne(BaseLineJenis::className(), ['id' => 'jenis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWilayah0()
    {
        return $this->hasOne(BaseLineWilayah::className(), ['id' => 'wilayah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelasiBaseLineDenganOutputs()
    {
        return $this->hasMany(RelasiBaseLineDenganOutput::className(), ['id_base_line' => 'id']);
    }
}
