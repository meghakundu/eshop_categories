<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_name',
        'parent_id'
    ];

    public function children()
    {
        return $this->hasMany('App\Models\category', 'parent_id');
    }

    
}

