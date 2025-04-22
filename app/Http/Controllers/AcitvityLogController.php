<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use Illuminate\Http\Request;

class AcitvityLogController extends Controller
{
    //
    public function index()
    {
        $logs = activity_log::with('user')->latest()->paginate(25);
        return view('Dashboard.ActivityLog.index', compact('logs'));
    }


    public function show($id)
    {

        $activityLog = activity_log::with('user')->findOrFail($id);
        return view('Dashboard.ActivityLog.show', compact('activityLog'));
    }

    public function destroy(activity_log $activityLog)
    {
        $activityLog->delete();
        return redirect()->route('ActivityLog.index');
    }


}
