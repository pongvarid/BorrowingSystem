<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $fillable = [
        'Item_id',
        'ItemType_id',
        'Item_name',
        'Item_detail',
        'Item_number',
        'Item_remain',
        'Item_img'
    ];
    public function ItemType()
    {
        return $this->belongsTo('App\ItemType', 'ItemType_id');
    }
}
