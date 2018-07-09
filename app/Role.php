<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
    protected $table = 'model_has_roles';
    protected $fillable = ['role_id','model_id','model_type'];
}
