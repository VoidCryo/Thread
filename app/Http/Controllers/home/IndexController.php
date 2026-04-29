<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class IndexController extends Controller
{

    public function index(): View {
        $user = Auth::user();
        return view('pages.home.index', ['user' => $user]);
    }
}
