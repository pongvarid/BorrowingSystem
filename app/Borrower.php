<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $table = 'borrower';
    protected $fillable = [
        'id',
        'user_id',
        'brw_ip',
        'brw_prefix',
        'brw_firstname',
        'brw_lastname',
        'brw_address',
        'brw_tel'
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
