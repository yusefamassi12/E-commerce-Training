<?php

namespace Modules\Menu\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;

    protected $fillable = ['name','description'];
    protected $table='category';

    protected static function newFactory()
    {
        return \Modules\Menu\Database\factories\CategoryFactory::new();
    }
}
