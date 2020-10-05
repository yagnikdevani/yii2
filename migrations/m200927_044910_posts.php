<?php

use yii\db\Migration;

/**
 * Class m200927_044910_posts
 */
class m200927_044910_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200927_044910_posts cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        return $this->createTable('posts', array(
            'id' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'title' => 'VARCHAR(255)',
            'data' => 'TEXT',
            'create_time' => 'INT',
            'update_time' => 'INT'
        ));
    }

    public function down()
    {
        return $this->dropTable('posts');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200927_044910_posts cannot be reverted.\n";

        return false;
    }
    */
}
