<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $fillable = [
        'id',
        'type_id',
        'item_name',
        'item_detail',
        'item_number',
        'item_remain',
        'item_img'
    ];
    public function ItemType()
    {
        return $this->belongsTo('App\ItemType', 'id');
    }
}
