<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lab".
 *
 * @property string $labcode
 * @property string $labname
 * @property int $pricelab
 * @property int $pricelabcgd
 * @property string $ptright
 * @property string $dbf
 * @property string $dbfs
 * @property string $cgd
 * @property string $formi
 * @property string $forme
 * @property string $formh
 * @property string $laballow
 * @property string $etype
 * @property string $formp
 * @property string $unit
 */
class Lab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['labcode', 'labname', 'pricelab', 'pricelabcgd', 'ptright', 'dbf', 'dbfs', 'cgd', 'formi', 'forme', 'formh', 'etype', 'formp', 'unit'], 'required'],
            [['pricelab', 'pricelabcgd'], 'integer'],
            [['labcode'], 'string', 'max' => 3],
            [['labname', 'formi', 'forme', 'formh', 'formp'], 'string', 'max' => 30],
            [['ptright', 'tmlt', 'tmltname', 'loinc', 'loincname'], 'string', 'max' => 255],
            [['dbf'], 'string', 'max' => 15],
            [['dbfs', 'laballow', 'etype'], 'string', 'max' => 100],
            [['cgd'], 'string', 'max' => 5],
            [['unit'], 'string', 'max' => 2],
            [['labcode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'labcode' => 'Labcode รพ.',
            'labname' => 'ชื่อแลป รพ.',
            'pricelab' => 'Pricelab',
            'pricelabcgd' => 'Pricelabcgd',
            'ptright' => 'Ptright',
            'dbf' => 'Dbf',
            'dbfs' => 'Dbfs',
            'cgd' => 'Cgd',
            'formi' => 'Formi',
            'forme' => 'Forme',
            'formh' => 'Formh',
            'laballow' => 'Laballow',
            'etype' => 'Etype',
            'formp' => 'Formp',
            'unit' => 'Unit',
            'tmlt' => 'Tmlt',
            'tmltname' => 'Tmltname',
            'loinc' => 'Loinc',
            'loincname' => 'Loincname',
        ];
    }

    public function getLabstd(){
        return $this->hasOne(LabStd::className(), ['labcode' => 'labcode']);
    }
}
