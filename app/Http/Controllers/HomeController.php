<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Thread;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $threads = Thread::with('user')
            ->withCount('topics')
            ->get();

        return view('home.index', compact('threads'));
    }
}
