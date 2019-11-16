<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookItemDetail extends Model
{
    protected $table = 'book_item_detail';
    protected $fillable = [
        'BookItemDetail_id',
        'BookItem_id',
        'Item_id',
        'BookItemDetail_Number'

    ];
    public function BookItem()
    {
        return $this->belongsTo('App\BookItem', 'BookItem_id');
    }
    public function Item()
    {
        return $this->belongsTo('App\Item', 'Item_id');
    }
}
