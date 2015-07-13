<?php

namespace kemdikbud\to\models;

use Yii;

/**
 * This is the model class for table "template_table".
 *
 * @property integer $id
 * @property string $column_name
 * @property boolean $column_type
 */
class Templatetable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'template_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['column_name', 'column_type', 'required'], 'required'],
            [['column_name'], 'string'],
            [['column_type'], 'integer'],
            [['required'], 'boolean']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'column_name' => 'Column Name',
            'column_type' => 'Column Type',
            'required' => 'Required'
        ];
    }
}
