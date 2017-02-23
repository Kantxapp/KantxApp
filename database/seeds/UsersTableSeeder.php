<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Iker
        $user = DB::table('users')->insert([
            'name' => 'Iker',
            'email' => 'iker@iker.com',
            'avatar' => '/storage/avatars/iker.png',
            'password' => bcrypt('123456'),
            'slug' => 'iker',
            'activated' => true,
            'type' => 'A'
        ]);

        $profile = DB::table('profiles')->insert([
            
            'user_id' => 1,
            'name' => 'Iker'
            
            ]);
            
        //Aitor    
        $user = DB::table('users')->insert([
            'name' => 'Aitor',
            'email' => 'aitor@aitor.com',
            'avatar' => '/storage/avatars/aitor.png',
            'password' => bcrypt('123456'),
            'slug' => 'aitor',
            'activated' => true,
            'type' => 'A'
        ]);

        $profile = DB::table('profiles')->insert([
            
            'user_id' => 2,
            'name' => 'Aitor'
            
            ]);
            
        //Hafsa    
        $user = DB::table('users')->insert([
            'name' => 'Hafsa',
            'email' => 'hafsa@hafsa.com',
            'avatar' => '/storage/avatars/hafsa.png',
            'password' => bcrypt('123456'),
            'slug' => 'hafsa',
            'activated' => true,
            'type' => 'A'
        ]);

        $profile = DB::table('profiles')->insert([
            
            'user_id' => 3,
            'name' => 'Hafsa'
            
            ]);
        //Rudy
        $user = DB::table('users')->insert([
            'name' => 'Rudy',
            'email' => 'rudy@rudy.com',
            'avatar' => '/storage/avatars/rudy.png',
            'password' => bcrypt('123456'),
            'slug' => 'rudy',
            'activated' => true,
            'type' => 'U'
        ]);

        $profile = DB::table('profiles')->insert([
            
            'user_id' => 4,
            'name' => 'Rudy'
            
            ]);
    }
}
