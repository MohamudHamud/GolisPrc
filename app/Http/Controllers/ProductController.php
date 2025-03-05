<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PermissionRoleModel;
use Illuminate\Support\Facades\Response;


class ProductController extends Controller
{
    public function index()
    {
        $PermissionProduct = PermissionRoleModel::getPermission('products', Auth::user()->role_id);
        if (empty($PermissionProduct)) {
            abort(403, 'You do not have permission to access Products.');
        }

        $data['PermissionAdd'] = PermissionRoleModel::getPermission('add products', Auth::user()->role_id);
        $data['PermissionEdit'] = PermissionRoleModel::getPermission('edit products', Auth::user()->role_id);
        $data['PermissionDelete'] = PermissionRoleModel::getPermission('delete products', Auth::user()->role_id);

        $data['getRecord'] = Product::all();

        return view('Products.list', $data);
    }

    public function create()
    {

       
        $PermissionProduct = PermissionRoleModel::getPermission('add products', Auth::user()->role_id);
        if (empty($PermissionProduct)) {
            abort(403, 'You do not have permission to create a Product.');
        }

        return view('Products.add');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $PermissionProduct = PermissionRoleModel::getPermission('add products', Auth::user()->role_id);
        if (empty($PermissionProduct)) {
            abort(403, 'You do not have permission to add a Product.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'stock_quantity' => 'required|integer|min:0',
        ]);

        Product::create($request->all());

        return redirect(url('/products'))->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $PermissionProduct = PermissionRoleModel::getPermission('edit products', Auth::user()->role_id);
        if (empty($PermissionProduct)) {
            abort(403, 'You do not have permission to edit this Product.');
        }

        $data['getRecord'] = Product::findOrFail($id);

        return view('Products.edit', $data);
    }

    public function update($id, Request $request)
    {
        $PermissionProduct = PermissionRoleModel::getPermission('edit products', Auth::user()->role_id);
        if (empty($PermissionProduct)) {
            abort(403, 'You do not have permission to update this Product.');
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric|min:0',
            'description' => 'nullable|string',
            'stock_quantity' => 'sometimes|required|integer|min:0',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect(url('/products'))->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $PermissionProduct = PermissionRoleModel::getPermission('delete products', Auth::user()->role_id);
        if (empty($PermissionProduct)) {
            abort(403, 'You do not have permission to delete this Product.');
        }

        $product = Product::findOrFail($id);
        $product->delete();

        return redirect(url('/products'))->with('success', 'Product deleted successfully!');
    }


public function exportCSV()
{
    $products = Product::all();
    $csvData = "Name,Price,Description,Stock Quantity\n";

    foreach ($products as $product) {
        $csvData .= "{$product->name},{$product->price},{$product->description},{$product->stock_quantity}\n";
    }

    return Response::make($csvData, 200, [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="product_list.csv"',
    ]);
}
}
