<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = 'office';
    protected $fillable = [
        'off_id',
        'user_id',
        'off_role',
        'off_nickname',
        'off_name',
        'off_lastname',
        'off_address',
        'off_tel'
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
