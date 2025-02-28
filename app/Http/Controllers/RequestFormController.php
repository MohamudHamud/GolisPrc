<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestForm;
use App\Models\ProjectTable;

class RequestFormController extends Controller
{
    public function index()
    {
        $projects = ProjectTable::all();
        return view('requist-form.form',compact('projects'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',             // name is required
            'email' => 'required|email|max:255',             // email is required
            'phone' => 'nullable|string|max:20',             // phone is nullable
            'city' => 'required|string|max:255',             // city is required
            'institution' => 'required|string|max:255',      // institution is required
            'project' => 'required|string|max:255',          // project is now required (based on DB schema)
            'message' => 'nullable|string',                   // message is nullable based on DB schema
        ]);

        // Create a new request form entry
        RequestForm::create($request->only([
            'name', 'email', 'phone', 'city', 'institution', 'project', 'message'
        ]));

        // Redirect back with a success message
        return redirect('/requist-form')->with('success', 'Your request has been submitted successfully!');
    }
}
