<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {  
        $admin=new User();
        $admin->name= "riyadh";
        $admin->email= "riyadh@gmail.com";
        $admin->password=Hash::make("admin");
        $admin->save();
        $admin->assignRole('admin');

     

        $employer=new User();
        $employer->name= "rahim";
        $employer->email= "souravbarua903@gmail.com";
        $employer->password=Hash::make("souravbarua903");
        $employer->save();
        $employer->assignRole('employer');
        
        
        
        $user=new User();
        $user->name = "fayaz";
        $user->email = "fayaz@gmail.com";
        $user->password = Hash::make("password");
        $user->save();
        $user->assignRole('user');


      
    }
}
