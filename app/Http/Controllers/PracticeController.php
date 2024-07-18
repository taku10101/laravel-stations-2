<?php

namespace App\Http\Controllers;

class PracticeController extends Controller
{
    public function sample()
    {
        $test = 'practice';
        return view('practice', ['testParam' => $test]);
    }

          public function sample2()
    {
        $test = 'practice2';
        return view('practice2', ['testParam' => $test]);
    }
    
             public function sample3()
     {
          $test = 'test';
            return view('practice3', ['testParam' => $test]);
        }

}