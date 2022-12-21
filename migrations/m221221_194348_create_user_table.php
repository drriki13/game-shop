<?php

use app\models\User;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m221221_194348_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->unique()->notNull(),
            'firstname' => $this->string()->unique()->notNull(),
            'lastname' => $this->string()->unique()->notNull(),
            'password' => $this->string()->notNull(),
            'email' => $this->string()->unique()->notNull(),
            'auth_key' => $this->string(),
            'access_token' => $this->string()
        ]);

        $admin = new User();
        $admin->username = 'admin';
        $admin->firstname = 'Александр';
        $admin->lastname = 'Бессонов';
        $admin->email = 'dr.riki13@yandex.ru';
        $admin->password = Yii::$app->getSecurity()->generatePasswordHash('admin');
        $admin->save(false);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
