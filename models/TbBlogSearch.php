<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbBlog;

/**
 * TbBlogSearch represents the model behind the search form of `app\models\TbBlog`.
 */
class TbBlogSearch extends TbBlog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_blog'], 'integer'],
            [['judul', 'isi', 'gambar_blog'], 'safe'],
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
        $query = TbBlog::find();

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
            'id_blog' => $this->id_blog,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'gambar_blog', $this->gambar_blog]);

        return $dataProvider;
    }
}
