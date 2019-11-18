<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowItem extends Model
{
    protected $table = 'borrow_item';
    protected $fillable = [
        'id',
        'brw_id',
        'bookitem_id',
        'off_id',
        'borrowitem_description',
        'borrowitem_status'
    ];
}
