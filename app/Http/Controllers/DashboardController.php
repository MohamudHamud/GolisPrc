<?php

namespace App\Http\Controllers;
// app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 


use App\Models\ProjectTable;
use App\Models\RequestForm;


class DashboardController extends Controller
{
    public function index()
    {
        $projects = ProjectTable::all();
        $visitor = RequestForm::all();
        // Count total projects
        $totalProjects = ProjectTable::count();
        $visitors = RequestForm::count();
        $mostVisitedPlaces = DB::table('request_forms')
            ->select('city', DB::raw('count(*) as visits'))
            ->groupBy('city')
            ->orderByDesc('visits')
            ->get();

        // Calculate total visits
        $totalVisits = $mostVisitedPlaces->sum('visits');

        // Add percentage calculation
        $mostVisitedPlaces = $mostVisitedPlaces->map(function ($place) use ($totalVisits) {
            $place->percentage = $totalVisits > 0 ? round(($place->visits / $totalVisits) * 100, 2) : 0;
            return $place;
        });
    
        return view('dashboard',compact('totalProjects','visitors','mostVisitedPlaces'));
    }
}

