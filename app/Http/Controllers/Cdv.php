<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class Cdv extends Controller
{
    public function index() {
        //return 'db';

        //return DB::select('SELECT * FROM users');

        // return DB::table('users')->get(); //wyswietl users getem

        // return DB::table('users')
        // ->where('surname', 'nowak')
        // ->get();

        $currentTime = Carbon::now();
        $currentTime->toDateTimeString();

        DB::table('users')->insertOrIgnore([
            ['id' => NULL, 'name' => 'Patryk', 'surname' => 'Kowalski', 'birthday' => '1998-03-21', 'create_user' => $currentTime]
        ]);
    }
}
