<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type_statuses extends Model
{
    protected $table = 'type_statuses';
    protected $fillable = ['name'];
    protected $guarded = ['id'];
}
