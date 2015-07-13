<?php

namespace kemdikbud\to\models;

use Yii;

/**
 * This is the model class for table "output_baseline".
 *
 * @property integer $id
 * @property integer $id_base_line
 * @property string $nama_tabel
 * @property string $nama_kolom
 * @property string $date_created
 * @property integer $id_user_created
 * @property string $date_updated
 * @property integer $id_user_updated
 * @property boolean $approved
 * @property string $date_approved
 *
 * @property BaseLine $idBaseLine
 */
class Outputbaseline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'output_baseline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_base_line'], 'required'],
            [['id_base_line', 'id_user_created', 'id_user_updated'], 'integer'],
            [['nama_tabel', 'nama_kolom_array', 'nama_kolom_json', 'nama_class'], 'string'],
            [['date_created', 'date_updated', 'date_approved'], 'safe'],
            [['approved'], 'boolean']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_base_line' => 'Nama Base Line',
            'nama_tabel' => 'Nama Tabel',
            'nama_kolom_array' => 'Nama Kolom Array',
            'nama_kolom_json' => 'Nama Kolom Json',
            'nama_class' => 'Nama Kolom Class',
            'date_created' => 'Date Created',
            'id_user_created' => 'Id User Created',
            'date_updated' => 'Date Updated',
            'id_user_updated' => 'Id User Updated',
            'approved' => 'Approved',
            'date_approved' => 'Date Approved',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBaseLine()
    {
        return $this->hasOne(BaseLine::className(), ['id' => 'id_base_line']);
    }
}
