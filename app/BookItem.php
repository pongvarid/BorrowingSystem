<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookItem extends Model
{
    protected $table = 'book_item';
    protected $fillable = [
        'BookItem_id',
        'Brw_id',
        'BookItem_day',
        'BookItem_borrowDay',
        'BookItem _deadline',
        'BookItem_description',
        'BookItem_status'

    ];
    public function Borrower()
    {
        return $this->belongsTo('App\Borrower', 'Brw_id');
    }
}
