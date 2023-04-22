<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'admin_090@test.in',
            'role_id'=>1,
            'password'=>Hash::make('admin@12345'),
            'email_verified_at'=>now()
        ]);
    }
}
