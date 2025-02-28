<?php

namespace App\Http\Controllers;

use App\Models\ProjectTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PermissionRoleModel;

class ProjectTableController extends Controller
{
    public function index()
    {
        $PermissionProject = PermissionRoleModel::getPermission('projects', Auth::user()->role_id);
        if (empty($PermissionProject)) {
            abort(403, 'You do not have permission to access Project Tables.');
        }

        $data['PermissionAdd'] = PermissionRoleModel::getPermission('add project', Auth::user()->role_id);
        $data['PermissionEdit'] = PermissionRoleModel::getPermission('edit project', Auth::user()->role_id);
        $data['PermissionDelete'] = PermissionRoleModel::getPermission('delete project', Auth::user()->role_id);

        $data['getRecord'] = ProjectTable::all();

        return view('Projects.list', $data);
    }

    public function create()
    {
        $PermissionProject = PermissionRoleModel::getPermission('add project', Auth::user()->role_id);
        if (empty($PermissionProject)) {
            abort(403, 'You do not have permission to create a Project.');
        }

        return view('Projects.add');
    }

    public function store(Request $request)
    {
        $PermissionProject = PermissionRoleModel::getPermission('add project', Auth::user()->role_id);
        if (empty($PermissionProject)) {
            abort(403, 'You do not have permission to add a Project.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'no_users' => 'required|integer',
            'status' => 'required|in:available,not available',
        ]);

        $project = ProjectTable::create($request->all());

        return redirect(url('/projects'))->with('success', 'Project added successfully!');
    }

    public function edit($id)
    {
        $PermissionProject = PermissionRoleModel::getPermission('edit project', Auth::user()->role_id);
        if (empty($PermissionProject)) {
            abort(403, 'You do not have permission to edit this Project.');
        }

        $data['getRecord'] = ProjectTable::findOrFail($id);

        return view('Projects.edit', $data);
    }

    public function update($id, Request $request)
    {
        $PermissionProject = PermissionRoleModel::getPermission('edit project', Auth::user()->role_id);
        if (empty($PermissionProject)) {
            abort(403, 'You do not have permission to update this Project.');
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'no_users' => 'sometimes|required|integer',
            'status' => 'sometimes|required|in:available,not available',
        ]);

        $project = ProjectTable::findOrFail($id);
        $project->update($request->all());

        return redirect(url('/projects'))->with('success', 'Project updated successfully!');
    }

    public function destroy($id)
    {
        $PermissionProject = PermissionRoleModel::getPermission('delete project', Auth::user()->role_id);
        if (empty($PermissionProject)) {
            abort(403, 'You do not have permission to delete this Project.');
        }

        $project = ProjectTable::findOrFail($id);
        $project->delete();

        return redirect(url('/projects'))->with('success', 'Project deleted successfully!');
    }
}
