<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LablabelStd;

/**
 * LablabelStdSearch represents the model behind the search form of `app\models\LablabelStd`.
 */
class LablabelStdSearch extends LablabelStd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['labcode', 'labname', 'filename', 'fieldname', 'fieldlabel', 'normal', 'unit', 'inputmask', 'crimin', 'crimax', 'critext', 'icd10tm', 'tmlt', 'loinc'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = LablabelStd::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'labcode', $this->labcode])
            ->andFilterWhere(['like', 'labname', $this->labname])
            ->andFilterWhere(['like', 'filename', $this->filename])
            ->andFilterWhere(['like', 'fieldname', $this->fieldname])
            ->andFilterWhere(['like', 'fieldlabel', $this->fieldlabel])
            ->andFilterWhere(['like', 'normal', $this->normal])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'inputmask', $this->inputmask])
            ->andFilterWhere(['like', 'crimin', $this->crimin])
            ->andFilterWhere(['like', 'crimax', $this->crimax])
            ->andFilterWhere(['like', 'critext', $this->critext])
            ->andFilterWhere(['like', 'icd10tm', $this->icd10tm])
            ->andFilterWhere(['like', 'tmlt', $this->tmlt])
            ->andFilterWhere(['like', 'loinc', $this->loinc]);

        return $dataProvider;
    }
}
