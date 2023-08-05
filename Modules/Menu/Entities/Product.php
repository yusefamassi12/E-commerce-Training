<?php

namespace Modules\Menu\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['name','descrption','category_id','price'];

    public function images(){

        return $this->morphMany(image::class,'photoable');
    }


        protected static function newFactory()
        {
            return \Modules\Menu\Database\factories\ProductFactory::new();
        }
}
