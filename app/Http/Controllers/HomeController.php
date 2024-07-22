<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; // Tambahkan di bagian atas

use App\Models\StudentTopic;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getDashboard() {
        $userId = Auth::id();
        $studentTopics = StudentTopic::where('user_id', $userId)->get();

        // $topik = [
        //     ['kelompok_topik' => 'topik 1', 'nama_topik' => 'basi - basi', 'tingkat_topik' => 'tingkat dasar', 'persen_topik' => 20],
        //     ['kelompok_topik' => 'topik 1', 'nama_topik' => 'basi - basi', 'tingkat_topik' => 'tingkat menengah', 'persen_topik' => 40],
        //     ['kelompok_topik' => 'topik 1', 'nama_topik' => 'basi - basi', 'tingkat_topik' => 'tingkat mahir', 'persen_topik' => 100]
        // ];

        $topik = $studentTopics->map(function ($item) {
            return [
                'kelompok_topik' => $item->kelompok_topik,
                'nama_topik' => $item->nama_topik,
                'tingkat_topik' => $item->tingkat_topik,
                'persen_topik' => $item->persen_topik,
            ];
        })->toArray();

        return view('home', 
        compact(
            'topik',
        ));
    }
}
