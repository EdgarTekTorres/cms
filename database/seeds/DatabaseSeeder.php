<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
    	 App\User::create([
        	'name' => 'Edgar Tek',
        	'email' => 'tektorresedgar@gmail.com',
        	'password' => Hash::make('Ingtek')
        ]);

    	factory(App\User::class, 7)->create(); 
        App\Page::create([
        	'parent_id' => null,
        	'title' => 'Quienes Somos',
        	'slug' => 'quienes-somos',
        	'body' => 'Contenido de quienes somos'
        ]);

        App\Page::create([
        	'parent_id' => 1,
        	'title' => 'Mision',
        	'slug' => 'mision',
        	'body' => 'Contenido de mision'
        ]);

        App\Page::create([
        	'parent_id' => 1,
        	'title' => 'Vision',
        	'slug' => 'vision',
        	'body' => 'Contenido de vision'
        ]);
    }
}
