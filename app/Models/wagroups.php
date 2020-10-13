<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wagroups extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_id',
        'group_name',
        'group_members',
        'group_members_no',
    ];

    /*
    |--------------------------------------------------------------------------
    | Eloquent: Relationships
    |--------------------------------------------------------------------------
    | Database tables are often related to one another. Eloquent relationships
    | are defined as methods on Eloquent model classes.
    */

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
