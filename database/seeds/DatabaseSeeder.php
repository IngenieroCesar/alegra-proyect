<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            $this->truncateTables([
                'role',
                'permission'
            ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionTableSeeder::class);

    }

    protected function truncateTables(array $tables){

        Schema::disableForeignKeyConstraints();
        // DB::statement('SET FOREING_KEY_CHECKS = 0;');
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        // DB::statement('SET FOREING_KEY_CHECKS = 1;');
        Schema::enableForeignKeyConstraints();
    }

}
