<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'user'
        ];

        foreach($roles as $key => $value){
            DB::table('role')->insert([
                'name' => $value,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
