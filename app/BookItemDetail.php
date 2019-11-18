<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookItemDetail extends Model
{
    protected $table = 'book_item_detail';
    protected $fillable = [
        'id',
        'bookitem_id',
        'item_id',
        'bookitemdetail_number'

    ];
    public function BookItem()
    {
        return $this->belongsTo('App\BookItem', 'id');
    }
    public function Item()
    {
        return $this->belongsTo('App\Item', 'item_id');
    }
}
