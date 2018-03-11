<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_program".
 *
 * @property int $id_program
 * @property string $nama_program
 * @property string $detail
 * @property string $gambar_program
 */
class TbProgram extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_program';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_program', 'detail'], 'required'],
            [['gambar_program'], 'required', 'on'=> 'create'],
            [['detail'], 'string'],
            [['nama_program'], 'string', 'max' => 100],
            [['gambar_program'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_program' => 'Id Program',
            'nama_program' => 'Nama Program',
            'detail' => 'Detail',
            'gambar_program' => 'Gambar Program',
        ];
    }
}
