<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_jadwal".
 *
 * @property int $id_jadwal
 * @property string $tanggal
 * @property string $judul
 * @property string $detail
 * @property int $id_kategori
 *
 * @property TbKategori $kategori
 */
class TbJadwal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_jadwal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal', 'judul', 'detail', 'id_kategori'], 'required'],
            [['tanggal'], 'safe'],
            [['detail'], 'string'],
            [['id_kategori'], 'integer'],
            [['judul'], 'string', 'max' => 100],
            [['id_kategori'], 'unique'],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => TbKategori::className(), 'targetAttribute' => ['id_kategori' => 'id_kategori']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jadwal' => 'Id Jadwal',
            'tanggal' => 'Tanggal',
            'judul' => 'Judul',
            'detail' => 'Detail',
            'id_kategori' => 'Id Kategori',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(TbKategori::className(), ['id_kategori' => 'id_kategori']);
    }
}
