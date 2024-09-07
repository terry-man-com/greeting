<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
        //$array = [['朝','おはようございます。'],['昼','こんにちは'],['夕方','こんばんは'],['夜','おやすみなさい']];
        public function simple($time) {
            if ($time == 'mornning') {
            // $t = $array[0][0];
            // $r = $array[0][1];
            $t = '朝';
            $r = 'おはようございます。';
            }
            elseif ($time == 'afternoon') {
            // $t = $array[1][0];
            // $r = $array[1][1];
            $t = '昼';
            $r = 'こんにちは';
            }
            elseif ($time == 'evening') {
            // $t = $array[2][0];
            // $r = $array[2][1];
            $t = '夕方';
            $r = 'こんばんわ';
            }
            elseif ($time == 'night') {
            // $t = $array[3][0];
            // $r = $array[3][1];
            $t = '夜';
            $r = 'おやすみなさい';
            }
            return view('greeting.simple', ['t' => $t, 'r' => $r]);
    }
}
