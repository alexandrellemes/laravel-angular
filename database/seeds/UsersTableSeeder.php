<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('users')->insert([
            'name' => 'Alexandre LLemes',
            'email' => 'alexandre-pl@segplan.go.gov.br',
            'password' => bcrypt('123456'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Rafly Moreira',
            'email' => 'rafly-mc@segplan.go.gov.br',
            'password' => bcrypt('123456'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Thiago Abl',
            'email' => 'thiago-abl@segplan.go.gov.br',
            'password' => bcrypt('123456'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Vanesse',
            'email' => 'vcristinas@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'F Duqui',
            'email' => 'fduqui@hotmail.com',
            'password' => bcrypt('123456'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Gilson Pereira',
            'email' => 'gilson.pereira21@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Saulo L',
            'email' => 'saulo-l@sed.go.gov.br',
            'password' => bcrypt('123456'),
            'password' => bcrypt('123456'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Cecilia Prado',
            'email' => 'ceciliaprado76@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Biatriz Of',
            'email' => 'biatriz-of@segplan.go.gov.br',
            'password' => bcrypt('123456'),
            'created_at' => now()
        ]);

    }
}
