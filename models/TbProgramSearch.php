<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbProgram;

/**
 * TbProgramSearch represents the model behind the search form of `app\models\TbProgram`.
 */
class TbProgramSearch extends TbProgram
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_program'], 'integer'],
            [['nama_program', 'detail', 'gambar_program'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = TbProgram::find();

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
            'id_program' => $this->id_program,
        ]);

        $query->andFilterWhere(['like', 'nama_program', $this->nama_program])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'gambar_program', $this->gambar_program]);

        return $dataProvider;
    }
}
