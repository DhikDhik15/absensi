<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $division = [
            [ 'name' => 'Manajemen'],
            [ 'name' => 'RnD'],
            [ 'name' => 'General Affair'],
            [ 'name' => 'Artist 3D'],
            [ 'name' => 'Artist 2D'],
            [ 'name' => 'Backend'],
            [ 'name' => 'Frontend'],
            [ 'name' => 'Marketing'],
            [ 'name' => 'QA/QC'],
        ];

        \DB::table('divisi')->insert($division);
    }
}
