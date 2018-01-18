<?php

use Illuminate\Database\Seeder;

class useadminrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
                    'name' => 'azeemd',
                    'email' => 'azeem@gmail.com',
                    'password' => bcrypt('azeem123'),
                ]);
    }
}
