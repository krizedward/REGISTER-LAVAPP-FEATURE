<?php

namespace Database\Seeders;

use App\Models\StudentTopic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        StudentTopic::create([
            'user_id' => 3,
            'kelompok_topik' => 'topik 1', 
            'nama_topik' => 'basa-basi', 
            'tingkat_topik' => 'tingkat dasar', 
            'persen_topik' => '0'
        ]);

        StudentTopic::create([
            'user_id' => 3,
            'kelompok_topik' => 'topik 1', 
            'nama_topik' => 'basa-basi', 
            'tingkat_topik' => 'tingkat menengah', 
            'persen_topik' => '0'
        ]);

        StudentTopic::create([
            'user_id' => 3,
            'kelompok_topik' => 'topik 1', 
            'nama_topik' => 'basa-basi', 
            'tingkat_topik' => 'tingkat mahir', 
            'persen_topik' => '0'
        ]);
    }
}
