<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $adminUser = User::create([
           'email' =>'admin@mail.ru',
           'name' =>'admin',
           'password' => Hash::make('784512as')
       ]);
       Role::create([
           'name' => 'admin',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ]);

        $adminUser->assignRole('admin');
    }
}
