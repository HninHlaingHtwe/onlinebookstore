<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
     protected $fillable=['isbn','name','pdf','photo','price','discount','review','status','publisher','edition','publish_date','subcategory_id','category_id'];

    public function subcategory(){
    	return $this->belongsTo('App\Subcategory');
    }
    public function author(){
    	return $this->belongsTo('App\Author');
    }

    public function orders(){
    	return$this->belongsToMany('App\Order','orderdetails','order_id','book_id')
    	->withPivot('qty')
    	->withTimestamps();;
    }

    public function instocks()
    {
    	return $this->hasMany('App\Instock');
    }
}
