<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lab_std".
 *
 * @property string $labcode
 * @property string|null $labname
 * @property int|null $pricelab
 * @property int|null $pricelabcgd
 * @property string|null $ptright
 * @property string|null $dbf
 * @property string|null $dbfs
 * @property string|null $cgd
 * @property string|null $formi
 * @property string|null $forme
 * @property string|null $formh
 * @property string|null $laballow
 * @property string|null $etype
 * @property string|null $formp
 * @property string|null $unit
 * @property string|null $tmlt
 * @property string|null $tmltname
 * @property string|null $loinc
 * @property string|null $loincname
 */
class LabStd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lab_std';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['labcode'], 'required'],
            [['pricelab', 'pricelabcgd'], 'integer'],
            [['labcode'], 'string', 'max' => 3],
            [['labname', 'dbfs', 'laballow', 'etype'], 'string', 'max' => 100],
            [['ptright', 'tmlt', 'tmltname', 'loinc', 'loincname'], 'string', 'max' => 255],
            [['dbf'], 'string', 'max' => 15],
            [['cgd'], 'string', 'max' => 5],
            [['formi', 'forme', 'formh', 'formp'], 'string', 'max' => 30],
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
            'labcode' => 'Labcode STD',
            'labname' => 'Labname STD',
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

    public function getLab(){
        return $this->hasOne(Lab::className(), ['labcode' => 'labcode']);
    }

}
