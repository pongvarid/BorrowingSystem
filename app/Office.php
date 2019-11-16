<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = 'office';
    protected $fillable = [
        'Off_id',
        'User_id',
        'Off_role',
        'Off_nickname',
        'Off_name',
        'Off_lastname',
        'Off_address',
        'Off_tel'
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'User_id');
    }
}
