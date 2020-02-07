<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwals')->insert([
            'id_jadwal'            => '1',
        	'nama_kereta'          => 'Argo Parahyangan',
        	'jam_berangkat'        => '12:10',
        	'jam_tiba'        	   => '13:13',
            'durasi'               => '1 jam 3 m',
        	'harga_tiket'          => '100000',
        	'created_at'		   => Carbon::now(),
        	'updated_at'	       => Carbon::now(),
        ]);
        DB::table('jadwals')->insert([
            'id_jadwal'            => '2',
            'nama_kereta'          => 'Argo Wilis',
            'jam_berangkat'        => '14:45',
            'jam_tiba'             => '16:46',
            'durasi'               => '2 jam 1 m',
            'harga_tiket'          => '120000',
            'created_at'           => Carbon::now(),
            'updated_at'           => Carbon::now(),
        ]);
    }
}
