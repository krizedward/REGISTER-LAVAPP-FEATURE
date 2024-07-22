<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; // Tambahkan di bagian atas

use DB;
use App\Models\StudentTopic;
use Illuminate\Http\Request;

class StudentTopicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // untuk menyimpan data didatabase
    public function setTopicStudent(Request $request) 
    {
        $userId = Auth::id();
        $tingkat = 'tingkat mahir';
        
        if($tingkat == 'tingkat dasar') {
            StudentTopic::where('user_id', $userId)
            ->where('tingkat_topik', 'tingkat dasar')
            ->update(['persen_topik' => '33']);
        }

        if($tingkat == 'tingkat menengah') {
            StudentTopic::where('user_id', $userId)
            ->where('tingkat_topik', 'tingkat menengah')
            ->update(['persen_topik' => '33']);
        }

        if($tingkat == 'tingkat mahir') {
            StudentTopic::where('user_id', $userId)
            ->where('tingkat_topik', 'tingkat mahir')
            ->update(['persen_topik' => DB::raw('persen_topik + 33')]);
        }
        // harus ada crsf
        // $request->validate([
        //     'title' => 'required',
        //     'body' => 'required',
        // ]);

        // $data = [
        //     'title' => $request->title,
        // ];

        // Untuk request AJAX, kembalikan response JSON
        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Topik berhasil diperbarui.']);
        }

        // return $userId;
        return back();
    }

    // untuk mengambil data didatabase
    public function getTopicStudent()
    {
        return 'get topic student';
    }
}
