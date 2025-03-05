<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\DB; 
use App\Models\RequestForm;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Get counts for each model
        $totalProducts = Product::count();
        $totalUsers = User::count(); // Change from RequestForm to User for total users
        $totalCustomers = Customer::count(); // Add count for customers

        // Return view with the necessary data
        return view('dashboard', compact('totalProducts', 'totalUsers', 'totalCustomers'));
    }
}
