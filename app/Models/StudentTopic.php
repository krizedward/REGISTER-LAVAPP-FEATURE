<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTopic extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai dengan konvensi Laravel
    protected $table = 'student_topic';

    // Kolom yang dapat diisi (mass assignable attributes)
    protected $fillable = [
        'user_id',
        'kelompok_topik', 
        'nama_topik', 
        'tingkat_topik', 
        'persen_topik'
    ];
}
