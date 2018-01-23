<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbSlide;

/**
 * TbSlideSearch represents the model behind the search form of `app\models\TbSlide`.
 */
class TbSlideSearch extends TbSlide
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_slide', 'prioritas'], 'integer'],
            [['gambar_slide'], 'safe'],
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
        $query = TbSlide::find();

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
            'id_slide' => $this->id_slide,
            'prioritas' => $this->prioritas,
        ]);

        $query->andFilterWhere(['like', 'gambar_slide', $this->gambar_slide]);

        return $dataProvider;
    }
}
