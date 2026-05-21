<?php

namespace App\Http\Controllers;

use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teamMembers = Team::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();
        
        return view('team', compact('teamMembers'));
    }
}