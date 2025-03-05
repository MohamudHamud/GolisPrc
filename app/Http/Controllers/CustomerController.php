<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PermissionRoleModel;
use Illuminate\Support\Facades\Response;
class CustomerController extends Controller
{
    

public function exportCSV()
{
    $customers = Customer::all();
    $csvData = "Name,Contact Information\n";

    foreach ($customers as $customer) {
        $csvData .= "{$customer->name},{$customer->contact_information}\n";
    }

    return Response::make($csvData, 200, [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="customer_list.csv"',
    ]);
}

    public function index()
    {
        $PermissionCustomer = PermissionRoleModel::getPermission('customers', Auth::user()->role_id);
        if (empty($PermissionCustomer)) {
            abort(403, 'You do not have permission to access Customers.');
        }

        $data['PermissionAdd'] = PermissionRoleModel::getPermission('add customers', Auth::user()->role_id);
        $data['PermissionEdit'] = PermissionRoleModel::getPermission('edit customers', Auth::user()->role_id);
        $data['PermissionDelete'] = PermissionRoleModel::getPermission('delete customers', Auth::user()->role_id);

        $data['getRecord'] = Customer::all();

        return view('Customers.list', $data);
    }

    public function create()
    {
        $PermissionCustomer = PermissionRoleModel::getPermission('add customers', Auth::user()->role_id);
        if (empty($PermissionCustomer)) {
            abort(403, 'You do not have permission to create a Customer.');
        }

        return view('Customers.add');
    }

    public function store(Request $request)
    {
        $PermissionCustomer = PermissionRoleModel::getPermission('add customers', Auth::user()->role_id);
        if (empty($PermissionCustomer)) {
            abort(403, 'You do not have permission to add a Customer.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'contact_information' => 'required|string|max:255',
        ]);

        Customer::create($request->all());

        return redirect(url('/customers'))->with('success', 'Customer added successfully!');
    }

    public function edit($id)
    {
        $PermissionCustomer = PermissionRoleModel::getPermission('edit customers', Auth::user()->role_id);
        if (empty($PermissionCustomer)) {
            abort(403, 'You do not have permission to edit this Customer.');
        }

        $data['getRecord'] = Customer::findOrFail($id);

        return view('Customers.edit', $data);
    }

    public function update($id, Request $request)
    {
        $PermissionCustomer = PermissionRoleModel::getPermission('edit customers', Auth::user()->role_id);
        if (empty($PermissionCustomer)) {
            abort(403, 'You do not have permission to update this Customer.');
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'contact_information' => 'sometimes|required|string|max:255',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return redirect(url('/customers'))->with('success', 'Customer updated successfully!');
    }

    public function destroy($id)
    {
        $PermissionCustomer = PermissionRoleModel::getPermission('delete customers', Auth::user()->role_id);
        if (empty($PermissionCustomer)) {
            abort(403, 'You do not have permission to delete this Customer.');
        }

        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect(url('/customers'))->with('success', 'Customer deleted successfully!');
    }
}