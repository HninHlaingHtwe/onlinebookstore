<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instock extends Model
{
    use SoftDeletes;
     protected $fillable=['price','date','qty','book_id'];

     public function book()
     {
     	return $this->belongsTo('App\Book');
     }

}
