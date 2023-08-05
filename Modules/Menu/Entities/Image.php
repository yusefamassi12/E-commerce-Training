<?php

namespace Modules\Menu\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class image extends Model
{
    use HasFactory;
    protected $fillable=['src','photoable_type','photoable_id'];
    protected $table='images';
    public function photoable(){
        return $this->morphTo();
    }
    protected static function newFactory()
    {
        return \Modules\Menu\Database\factories\CategoryFactory::new();
    }
}
