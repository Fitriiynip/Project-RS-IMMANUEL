<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name= 'mooo';
        $user->email= 'mooo@gmail.com';
        $user->password = Hash::make('mooo');
        $user->save();

        //membuat role yapp
        $admin = Role::create([
            'name'          => 'admin',
            'display_name'  => 'User Administrator'
        ]);

        $pengguna = Role::create([
            'name'          => 'pengguna',
            'display_name'  => 'User B aja'
        ]);

        $user = new User();
        $user->name = 'xcoo';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('xxx');
        $user->save();

        $pengunjung = new User();
        $pengunjung->name ='coo';
        $pengunjung->email ='coo@gmail.com';
        $pengunjung->password = Hash::make('xxx');
        $pengunjung->save();

        $user->attachRole($admin);
        $pengunjung->attachRole($pengguna);
    }
}
