<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_slide".
 *
 * @property int $id_slide
 * @property string $gambar_slide
 * @property int $prioritas
 */
class TbSlide extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_slide';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gambar_slide', 'prioritas'], 'required'],
            [['prioritas'], 'integer'],
            [['gambar_slide'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_slide' => 'Id Slide',
            'gambar_slide' => 'Gambar Slide',
            'prioritas' => 'Prioritas',
        ];
    }
}
