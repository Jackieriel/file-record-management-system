<?php

namespace App\Http\Controllers;

use App\Models\Cabinet;
use App\Models\File;
use App\Models\User;
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
        $communities = File::orderBy('created_at','desc')->take(3)->get();

        return view('home')
            ->with('communities', $communities)
            ->with('file_count', File::all()->count())
            ->with('community_count', User::all()->count())
            ->with('cabinet_count', Cabinet::all()->count());
    }
}
