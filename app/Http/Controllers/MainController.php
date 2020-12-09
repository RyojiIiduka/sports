<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function main()
    {
        $users = DB::table('users')->get();

        return view('main');
    }

}
