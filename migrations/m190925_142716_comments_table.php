<?php

use yii\db\Migration;

/**
 * Class m190925_142716_comments_table
 */
class m190925_142716_comments_table extends Migration
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
        echo "m190925_142716_comments_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190925_142716_comments_table cannot be reverted.\n";

        return false;
    }
    */
}
