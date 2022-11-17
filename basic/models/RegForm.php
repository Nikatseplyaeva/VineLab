<?php

namespace app\models;

use Yii;
/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string|null $login
 * @property string|null $password
 * @property string|null $name
 * @property string|null $email
 * @property string|null $date_of_birth
 * 
 *
 * @property Comment[] $comments
 */
class RegForm extends User
{

    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password', 'name', 'email'], 'required', 'message' => 'Обязательно к заполнению!'],
            [['date_of_birth'], 'safe'],
            ['login', 'unique', 'message' => 'Такой логин уже есть!'],
            [['login', 'password', 'name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'name' => 'Name',
            'email' => 'Email',
            'date_of_birth' => 'Date Of Birth',
        ];
    }

 
}
