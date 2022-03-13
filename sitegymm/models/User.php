<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $fio
 * @property string $login
 * @property string $email
 * @property string $password
 * @property int $admin
 *
 * @property Problem[] $problems
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $passwordConfirm;
    public $agreed;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'login', 'email', 'password', 'passwordConfirm', 'agreed'], 'required', 'message'=>'Поле необходимо заполнить'],
            ['fio', 'match', 'pattern'=> '/^[А-Яа-я\s\-]{3,}$/u','message'=>'Разрешены только кириллица, пробел и дефис'],
            ['login', 'match', 'pattern'=> '/^[A-Za-z0-9]{3,}$/u','message'=>'Разрешены только латиница и цифры'],
            ['login', 'unique', 'message'=>'Логин уже занят'],
            ['email', 'email', 'message'=>'Неверный формат почты'],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password', 'message'=> 'Пароли не совпадают'],
            ['agreed', 'boolean'],
            ['agreed', 'compare', 'compareValue'=>true, 'message'=>'Для регистрации нужно согласие на обработку персональных данных'],
            [['admin'], 'integer'],
            [['fio', 'login', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Фио',
            'login' => 'Логин',
            'email' => 'Почта',
            'password' => 'Пароль',
            'admin' => 'Admin',
            'passwordConfirm' => 'Подтвердите введенный пароль',
            'agreed' => 'Согласен на обработку персональных данных',
        ];
    }

    /**
     * Gets query for [[Problems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProblems()
    {
        return $this->hasMany(Problem::className(), ['idUser' => 'id']);
    }

       /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return self::find()->where(['login'=>$username])->one();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return null;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}


