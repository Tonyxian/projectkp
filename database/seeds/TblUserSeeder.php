<?php

use Illuminate\Database\Seeder;
use app\User;
use carbon\carbon;
class TblUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 DB::table('tbluser')->insert([
                'npm' => '1631060',
          'namauser' =>'Tony',
          'jabatan' => 'student',
          'idbiro' => '1',
          'password' => Hash::make('admintony'),
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
          'statusid' => '5',
          'idlevel' => '1',
                  ]);
    }
}
