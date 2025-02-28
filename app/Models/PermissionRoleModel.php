<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionRoleModel  extends Model
{
    use HasFactory;

    protected $table = 'premissions_role';

    
 // In PermissionRoleModel
static public function InsertUpdateRecord($permission_ids, $role_id)
{
    // Debug: Ensure $permission_ids is not null
    // if (is_null($permission_ids)) {
    //     throw new \InvalidArgumentException('Permission IDs cannot be null.');
    // }

    // // Debug: Check if $permission_ids is an array
    // if (!is_array($permission_ids)) {
    //     throw new \InvalidArgumentException('Permission IDs must be an array.');
    // }

    // Optionally delete old permissions if necessary
    PermissionRoleModel::where('role_id', '=', $role_id)->delete();

    foreach ($permission_ids as $permission_id) {
        $save = new PermissionRoleModel();
        $save->permission_id = $permission_id;
        $save->role_id = $role_id;
        $save->save();
    }
}

  
    static public function getRolePermission($role_id){
        return PermissionRoleModel::where('role_id', '=', $role_id)->get();
    }
    static public function getPermission($slug, $role_id)
{
    return PermissionRoleModel::select('premissions_role.id')
        ->join('premissions', 'premissions.id', '=', 'premissions_role.permission_id')
        ->where('premissions_role.role_id', '=', $role_id)
        ->where('premissions.slug', '=', $slug)
        ->count();
}

}
