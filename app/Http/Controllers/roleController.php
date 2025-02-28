<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use App\Models\PremissionModel;
use App\Models\PermissionRoleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function list()
    {
        $PermissionRole = PermissionRoleModel::getPermission('Roles', Auth::user()->role_id);
        
        if (empty($PermissionRole)) {
            abort(403, 'You do not have the permissions to access this resource.');
        }

        $data['PermissionAdd'] = PermissionRoleModel::getPermission('Add Roles', Auth::user()->role_id);
        $data['PermissionEdit'] = PermissionRoleModel::getPermission('Edit Roles', Auth::user()->role_id);
        $data['PermissionDelete'] = PermissionRoleModel::getPermission('Delete Roles', Auth::user()->role_id);
        
        $data['getRecord'] = RoleModel::getRecord();
        return view('roles.list', $data);
    }

    public function add()
    {
        $PermissionRole = PermissionRoleModel::getPermission('Add Roles', Auth::user()->role_id);
        if (empty($PermissionRole)) {
            abort(403, 'You do not have the permissions to access this Add Roles.');
        }
        $getPermission = PremissionModel::getRecord();
        $data['getPermission'] = $getPermission;

        return view('roles.add', $data);
    }

    public function insert(Request $request)
    {
        $PermissionRole = PermissionRoleModel::getPermission('Add Roles', Auth::user()->role_id);
        if (empty($PermissionRole)) {
            abort(403, 'You do not have the permissions to access this Delete Roles.');
        }

        // Save new role
        $save = new RoleModel;
        $save->name = $request->name;
        $save->save();

        // Insert/update role permissions
        PermissionRoleModel::InsertUpdateRecord($request->premission_id, $save->id);

        // Redirect with success message
        return redirect(url('/roles'))->with('success', 'You have successfully added a new role.');
    }

    public function edit($id)
    {
        $PermissionRole = PermissionRoleModel::getPermission('Edit Roles', Auth::user()->role_id);
        if (empty($PermissionRole)) {
            abort(403, 'You do not have the permissions to access this Edit Roles.');
        }

        $data['getRecord'] = RoleModel::getSingle($id);
        $data['getPermission'] = PremissionModel::getRecord();
        $data['getRolePermission'] = PermissionRoleModel::getRolePermission($id);

        return view('roles.edit', $data);
    }

    public function update($id, Request $request)
    {
        $PermissionRole = PermissionRoleModel::getPermission('Edit Roles', Auth::user()->role_id);
        if (empty($PermissionRole)) {
            abort(403, 'You do not have the permissions to access this Update Roles.');
        }

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'permission_id' => 'nullable|array', // Ensure permission_id is an array
        ]);

        // Retrieve and update the role
        $role = RoleModel::getSingle($id);
        $role->name = $request->name;
        $role->save();

        // Update role permissions
        PermissionRoleModel::InsertUpdateRecord($request->permission_id, $role->id);

        // Redirect with success message
        return redirect(url('/roles'))->with('success', 'You have successfully updated the role.');
    }

    public function delete($id)
    {
        $PermissionRole = PermissionRoleModel::getPermission('Delete Roles', Auth::user()->role_id);
        if (empty($PermissionRole)) {
            abort(403, 'You do not have the permissions to access this Delete Roles.');
        }

        // Find the role
        $role = RoleModel::find($id);
        
        if (!$role) {
            // Redirect with error message if role not found
            return redirect(url('/roles'))->with('error', 'Role not found.');
        }

        // Delete the role
        $role->delete();

        // Redirect with success message
        return redirect(url('/roles'))->with('success', 'You have successfully deleted the role.');
    }
}
