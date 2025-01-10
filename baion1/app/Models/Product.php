<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;
    
    protected $fillable = ['store_id','name','description','price'];
    public function Store(){
        return $this->belongsTo(Store::class);
    }
   
}
