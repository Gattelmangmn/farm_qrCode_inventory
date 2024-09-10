<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Role extends Model
{
    use HasFactory;
    use HasRoles;

    protected $table = 'roles';
    protected $fillable = ['name', 'guard_name']; // Если нужно указать заполняемые поля
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role', 'role_id', 'user_id');
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_permission_table_name', 'role_id', 'permission_id');
    }

}
