<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminIndexController extends Controller
{
    //
    public function index() {
        $totalVisitors = activity_log::distinct('ip_address')->count('ip_address');
        $totalUsers = User::count();

        $topCity = activity_log::select('city', DB::raw('count(*) as total'))
            ->whereNotNull('city')
            ->groupBy('city')
            ->orderByDesc('total')
            ->first();

        return view('Dashboard.Layouts.home', compact('totalVisitors', 'totalUsers', 'topCity'));
    }

    public function accountss() {
         return view('Dashboard.Pages.accounts');
    }


}
