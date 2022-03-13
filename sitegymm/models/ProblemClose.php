<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "problem".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $timestamp
 * @property int $idUser
 * @property int $idCategory
 * @property string $status
 * @property string $photoBefore
 * @property string $photoAfter
 * @property string $mark
 *
 * @property User $idUser0
 * @property Category $idCategory0
 */
class ProblemClose extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'problem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'idUser', ], 'required'],
            [['mark'], 'string'],

        ]; 
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ваше имя',
            'timestamp' => 'Заявка создана',
            'phone' => 'Номер телефона',
            'idUser' => 'Id User',
            'adress' => 'Адрес',
            'text' => 'Товар',
            'status' => 'Статус',
            'mark' => 'Ответ Работников',
        ];
    }

    /**
     * Gets query for [[IdUser0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(User::className(), ['id' => 'idUser']);
    }

    /**
     * Gets query for [[IdCategory0]].
     *
     * @return \yii\db\ActiveQuery
     */
 
}
