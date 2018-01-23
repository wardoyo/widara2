<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_pesan".
 *
 * @property int $id_pesan
 * @property string $form
 * @property string $to
 * @property string $isi
 */
class TbPesan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_pesan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form', 'to', 'isi'], 'required'],
            [['isi'], 'string'],
            [['form', 'to'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pesan' => 'Id Pesan',
            'form' => 'Form',
            'to' => 'To',
            'isi' => 'Isi',
        ];
    }
}
