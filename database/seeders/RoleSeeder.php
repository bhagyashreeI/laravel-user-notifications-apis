<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $roles = ['admin','user'];
        foreach($roles as $role){
            DB::table('roles')->insert([
            'name'=>$role
            ]);
        }
        
        
    }
}
