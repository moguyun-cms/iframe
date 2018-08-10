<?php

use yii\db\Migration;

/**
 * Handles the creation of table `iframe`.
 */
class m180810_152906_create_iframe_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%iframe}}', [
            'id' => $this->primaryKey(),
            'slug' => $this->string()->notNull()->comment('唯一标识'),
            'title' => $this->string()->notNull()->comment('标题'),
            'keywords' => $this->string()->comment('关键词'),
            'description' => $this->string()->comment('描述'),
            'created_at' => $this->integer()->comment('创建时间'),
            'updated_at' => $this->integer()->comment('更新时间'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%iframe}}');
    }
}
