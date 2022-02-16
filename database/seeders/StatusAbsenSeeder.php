<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusAbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $status = [
          [ 'name' => 'Memenuhi'],
          [ 'name' => 'Tidak Memenuhi'],
      ];

      \DB::table('status_approval')->insert($status);
    }
}
