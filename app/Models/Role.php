<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Role extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }
    public function permissionsByTable($table)
    {
        return $this->permissions->where('table_name',$table);
    }

    public function can($table,$per)
    {
        if( Auth::user()->role->name == 'admin') {
            return true;
        }
       
       
       $permissions = $this->permissionsByTable($table);

        foreach ($permissions as $permission) {
             if ($permission->name === $per) {
                 return true;
             }
        }
        return false;
    }

}
