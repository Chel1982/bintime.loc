<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property string $name
 * @property string $surname
 * @property string $gender
 * @property string $email
 * @property string $created_at
 *
 * @property Address[] $addresses
 */
class User extends \yii\db\ActiveRecord
{
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
            [['login', 'password', 'name', 'surname', 'gender', 'email', 'created_at'], 'required'],
            [['gender'], 'string'],
            [['created_at'], 'safe'],
            [['login', 'password', 'name', 'surname', 'email'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['login'], 'unique'],
            [['login'], 'string', 'min' => 4],
            [['password'], 'string', 'min' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Логин',
            'password' => 'Пароль',
            'name' => 'Имя пользователя',
            'surname' => 'Фамилия пользователя',
            'gender' => 'Пол',
            'email' => 'Email',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Address::class, ['user_id' => 'id']);
    }
}
