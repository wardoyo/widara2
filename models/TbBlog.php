<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_blog".
 *
 * @property int $id_blog
 * @property string $judul
 * @property string $isi
 * @property string $gambar_blog
 */
class TbBlog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'isi'], 'required'],
            [['gambar_blog'], 'required', 'on'=> 'create'],
            [['isi'], 'string'],
            [['judul'], 'string', 'max' => 100],
            [['gambar_blog'], 'string', 'max' => 500,],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_blog' => 'Id Blog',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'gambar_blog' => 'Gambar Blog',
        ];
    }
}
