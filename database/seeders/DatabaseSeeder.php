<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\especie;
use App\Models\raza;
use App\Models\mascota;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        // \App\Models\User::factory(10)->create();
        $user = new User;
        $user->name = 'admin';
        $user->carnet = '1234';
        $user->email =  'admin@veterinaria.com';
        $user->password = '1234';
        $user->role = 'admin';
        $user->save();

        $veterinario1 = new User;
        $veterinario1->name = 'pedro1';
        $veterinario1->carnet = '101';
        $veterinario1->email =  'user1@gmail.com';
        $veterinario1->password = '1234';
        $veterinario1->role = 'vendedor';
        $veterinario1->save();

        $veterinario2 = new User;
        $veterinario2->name = 'pedro2';
        $veterinario2->carnet = '102';
        $veterinario2->email =  'user2@gmail.com';
        $veterinario2->password = '1234';
        $veterinario2->role = 'vendedor';
        $veterinario2->save();

        $cliente1 = new User;
        $cliente1->name = 'pedro3';
        $cliente1->carnet = '103';
        $cliente1->email =  'user3@gmail.com';
        $cliente1->password = '1234';
        $cliente1->role = 'cliente';
        $cliente1->save();

        $cliente2 = new User;
        $cliente2->name = 'pedro4';
        $cliente2->carnet = '104';
        $cliente2->email =  'user4@gmail.com';
        $cliente2->password = '1234';
        $cliente2->role = 'cliente';
        $cliente2->save();

        $cliente3 = new User;
        $cliente3->name = 'pedro5';
        $cliente3->carnet = '105';
        $cliente3->email =  'user5@gmail.com';
        $cliente3->password = '1234';
        $cliente3->role = 'cliente';
        $cliente3->save();

        $cliente4 = new User;
        $cliente4->name = 'pedro6';
        $cliente4->carnet = '106';
        $cliente4->email =  'user6@gmail.com';
        $cliente4->password = '1234';
        $cliente4->role = 'cliente';
        $cliente4->save();

        $cliente5 = new User;
        $cliente5->name = 'pedro7';
        $cliente5->carnet = '107';
        $cliente5->email =  'user7@gmail.com';
        $cliente5->password = '1234';
        $cliente5->role = 'cliente';
        $cliente5->save(); 

        
    }

}
