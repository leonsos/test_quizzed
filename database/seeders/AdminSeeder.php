<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Super admin',
            'role' =>'1',          
            'email'=>'admin@admin.com',
            'password'=> Hash::make('12345678')
        ]);
    }
}
