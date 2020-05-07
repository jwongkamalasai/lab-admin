<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lablabel_std".
 *
 * @property int $id
 * @property string|null $labcode
 * @property string|null $labname
 * @property string|null $filename
 * @property string|null $fieldname
 * @property string|null $fieldlabel
 * @property string|null $normal
 * @property string|null $unit
 * @property string|null $inputmask
 * @property string|null $crimin
 * @property string|null $crimax
 * @property string|null $critext
 * @property string|null $icd10tm
 * @property string|null $tmlt
 * @property string|null $loinc
 */
class LablabelStd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lablabel_std';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['labcode'], 'string', 'max' => 3],
            [['labname'], 'string', 'max' => 255],
            [['filename', 'fieldname'], 'string', 'max' => 25],
            [['fieldlabel', 'normal', 'unit'], 'string', 'max' => 100],
            [['inputmask'], 'string', 'max' => 30],
            [['crimin', 'crimax', 'icd10tm'], 'string', 'max' => 10],
            [['critext', 'tmlt', 'loinc'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'labcode' => 'Labcode',
            'labname' => 'Labname',
            'filename' => 'Filename',
            'fieldname' => 'Fieldname',
            'fieldlabel' => 'Fieldlabel',
            'normal' => 'Normal',
            'unit' => 'Unit',
            'inputmask' => 'Inputmask',
            'crimin' => 'Crimin',
            'crimax' => 'Crimax',
            'critext' => 'Critext',
            'icd10tm' => 'Icd10tm',
            'tmlt' => 'Tmlt',
            'loinc' => 'Loinc',
        ];
    }
}
