<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LabStd;

/**
 * LabStdSearch represents the model behind the search form of `app\models\LabStd`.
 */
class LabStdSearch extends LabStd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['labcode', 'labname', 'ptright', 'dbf', 'dbfs', 'cgd', 'formi', 'forme', 'formh', 'laballow', 'etype', 'formp', 'unit', 'tmlt', 'tmltname', 'loinc', 'loincname'], 'safe'],
            [['pricelab', 'pricelabcgd'], 'integer'],
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
        $query = LabStd::find();

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
            'pricelab' => $this->pricelab,
            'pricelabcgd' => $this->pricelabcgd,
        ]);

        $query->andFilterWhere(['like', 'labcode', $this->labcode])
            ->andFilterWhere(['like', 'labname', $this->labname])
            ->andFilterWhere(['like', 'ptright', $this->ptright])
            ->andFilterWhere(['like', 'dbf', $this->dbf])
            ->andFilterWhere(['like', 'dbfs', $this->dbfs])
            ->andFilterWhere(['like', 'cgd', $this->cgd])
            ->andFilterWhere(['like', 'formi', $this->formi])
            ->andFilterWhere(['like', 'forme', $this->forme])
            ->andFilterWhere(['like', 'formh', $this->formh])
            ->andFilterWhere(['like', 'laballow', $this->laballow])
            ->andFilterWhere(['like', 'etype', $this->etype])
            ->andFilterWhere(['like', 'formp', $this->formp])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'tmlt', $this->tmlt])
            ->andFilterWhere(['like', 'tmltname', $this->tmltname])
            ->andFilterWhere(['like', 'loinc', $this->loinc])
            ->andFilterWhere(['like', 'loincname', $this->loincname]);

        return $dataProvider;
    }
}
