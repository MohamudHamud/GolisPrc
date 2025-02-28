<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PremissionModel extends Model
{
    
   
    protected $table = 'premissions';
    static public function getSingle($id)
    {
        return RoleModel::find($id);
    }
    
    static public function getRecord()
    {
        $getPermission = PremissionModel::select('groupby', DB::raw('MAX(id) as id'), DB::raw('MAX(name) as name'))
            ->groupBy('groupby')
            ->get();
        
        $result = [];
        foreach ($getPermission as $value) {
            $getPermissionGroup = PremissionModel::getPermissionGroup($value->groupby);
            $data = [
                'id' => $value->id,
                'name' => $value->name,
                'group' => []
            ];
            
            foreach ($getPermissionGroup as $valueG) {
                $data['group'][] = [
                    'id' => $valueG->id,
                    'name' => $valueG->name
                ];
            }
            $result[] = $data;
        }
        return $result;
    }
    
    
    static public function getPermissionGroup($groupby)
    {
        return PremissionModel::where('groupby', '=', $groupby)->get();
    }
    
  

}
