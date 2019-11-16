<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $table = 'borrower';
    protected $fillable = [
        'Brw_id',
        'User_id',
        'Brw_IP',
        'Brw_TitleName',
        'Brw_name',
        'Brw_lastname',
        'Brw_address',
        'Brw_tel'
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'User_id');
    }
}
