<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookItem extends Model
{
    protected $table = 'book_item';
    protected $fillable = [
        'id',
        'brw_id',
        'bookitem_day',
        'bookitem_borrowDay',
        'BookItem_deadline',
        'bookitem_description',
        'bookitem_status'

    ];
    public function Borrower()
    {
        return $this->belongsTo('App\Borrower', 'brw_id');
    }
}
