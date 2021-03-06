<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Basket extends Model
{
    protected $fillable = [
        'user_id', 'product_id','qty',
    ];
    public $timestamps = false;
    public function product(){
        return $this->hasOne('App\Product');
    }
}