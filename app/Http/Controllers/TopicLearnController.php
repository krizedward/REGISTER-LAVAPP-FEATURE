<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicLearnController extends Controller
{
    //
    public function detail($level)
    {
        if ($level == 'easy') {
            $level = 'Easy';
            return view('topik.detail',compact('level'));
        } else if ($level == 'medium') {
            $level = 'Medium';
            return view('topik.detail',compact('level'));
        } else if ($level == 'expert') {
            $level = 'Expert';
            return view('topik.detail',compact('level'));
        }
        // return view('topik.detail');
    }

    public function topic01easy()
    {
        return view('topik.detail-01-easy');
    }
}
