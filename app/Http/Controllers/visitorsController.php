<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestForm;

class visitorsController extends Controller
{
    public function index(Request $request)
    {
        $requests = RequestForm::all();
        return view('visitors.index', compact('requests'));
    }

    public function destroy($id)
    {
        $visitorRequest = RequestForm::findOrFail($id);
        $visitorRequest->delete();

        return redirect('/visitors')->with('success', 'Request deleted successfully.');
    }
}
