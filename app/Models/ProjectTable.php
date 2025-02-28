<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTable extends Model
{
    use HasFactory;

    protected $table = 'project_tables';
    static public function getSingle($id){
        return RoleModel::find($id);
    }
    static public function getRecord(){
        return RoleModel::get();
    }

    protected $fillable = [
        'name',
        'description',
        'no_users',
        'status',
    ];
}
