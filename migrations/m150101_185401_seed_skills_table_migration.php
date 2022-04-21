<?php
require_once 'vendor/autoload.php';

use yii\db\Migration;

class m150101_185401_seed_skills_table_migration extends Migration
{

    public function up()
    {
        $faker = Faker\Factory::create();

        $this->createTable('skills', columns: [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'proficiency' => $this->float()->nonNull()
        ]);

        $this->insert('skills', [
            'id' => $faker->uuid(),
            'name' => $faker->name(),
            'prof'
        ]);
    }

    public function down(): bool
    {
        echo "seed_skills_table_migration does not support migration down.\n";
        return false;
    }
}
