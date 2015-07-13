<?php

namespace kemdikbud\to\models;

use Yii;

/**
 * This is the model class for table "relasi_base_line_dengan_output".
 *
 * @property integer $id
 * @property integer $id_base_line
 * @property integer $id_output
 * @property string $nama_tabel
 * @property string $nama_kolom
 * @property string $nama_kegiatan
 * @property string $date_created
 * @property string $date_updated
 * @property boolean $approved
 * @property string $date_approved
 * @property integer $id_user_created
 * @property integer $id_user_updated
 *
 * @property BaseLine $idBaseLine
 * @property OutputBaseLine $idOutput
 * @property User $idUserCreated
 * @property User $idUserUpdated
 */
class Relasibaselinedenganoutput extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relasi_base_line_dengan_output';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_base_line', 'id_output'], 'required'],
            [['id_base_line', 'id_output', 'id_user_created', 'id_user_updated'], 'integer'],
            [['nama_tabel', 'nama_kolom', 'nama_kegiatan'], 'string'],
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
            'id_base_line' => 'Id Base Line',
            'id_output' => 'Id Output',
            'nama_tabel' => 'Nama Tabel',
            'nama_kolom' => 'Nama Kolom',
            'nama_kegiatan' => 'Nama Kegiatan',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'approved' => 'Approved',
            'date_approved' => 'Date Approved',
            'id_user_created' => 'Id User Created',
            'id_user_updated' => 'Id User Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBaseLine()
    {
        return $this->hasOne(BaseLine::className(), ['id' => 'id_base_line']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOutput()
    {
        return $this->hasOne(OutputBaseLine::className(), ['id' => 'id_output']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUserCreated()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user_created']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUserUpdated()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user_updated']);
    }
}
