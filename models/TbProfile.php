<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_profile".
 *
 * @property int $id
 * @property string $nama
 * @property string $no_telp
 * @property string $tentang
 * @property string $email
 * @property string $logo
 */
class TbProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'no_telp', 'tentang', 'email', 'logo'], 'required'],
            [['tentang'], 'string'],
            [['nama', 'email'], 'string', 'max' => 100],
            [['no_telp'], 'string', 'max' => 20],
            [['logo'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'no_telp' => 'No Telp',
            'tentang' => 'Tentang',
            'email' => 'Email',
            'logo' => 'Logo',
        ];
    }
}
