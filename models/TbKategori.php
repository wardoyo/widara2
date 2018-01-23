<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_kategori".
 *
 * @property int $id_kategori
 * @property string $kategori
 *
 * @property TbJadwal $tbJadwal
 */
class TbKategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kategori'], 'required'],
            [['kategori'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'kategori' => 'Kategori',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbJadwal()
    {
        return $this->hasOne(TbJadwal::className(), ['id_kategori' => 'id_kategori']);
    }
}
